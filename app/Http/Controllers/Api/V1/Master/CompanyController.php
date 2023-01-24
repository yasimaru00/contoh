<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Company;

class CompanyController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $limit = (int)$request->limit;

            $company = Company::select("id", "uuid","code", \DB::raw("INITCAP(name) as name"));
            if(!empty($search)) {
                $company = $company->whereRaw("lower(code) like '%$search%'");
                $company = $company->orWhereRaw("lower(name) like '%$search%'");
            }
            if(!empty($limit)) {
                $company = $company->limit($limit);
            }
            $company = $company->get();
            $this->responseOk($company);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function find($id)
    {
        try {
            $data = Company::select("id", "code", "name")->where("id", $id)->first();
            $this->responseOk($data);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

}

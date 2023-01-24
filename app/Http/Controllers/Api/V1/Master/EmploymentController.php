<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Employment;

class EmploymentController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);
            
            $employment = Employment::select("id", "uuid", \DB::raw("INITCAP(name) as name"));
            if(!empty($search)) {
                $employment = $employment->whereRaw("lower(name) like '%$search%'");
            }
            $employment = $employment->get();
            $this->responseOk($employment);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function find($uuid)
    {
        try {
            $data = Employment::select("id", "uuid", \DB::raw("INITCAP(name) as name"))->where("uuid", $uuid)->first();
            $this->responseOk($data);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

}

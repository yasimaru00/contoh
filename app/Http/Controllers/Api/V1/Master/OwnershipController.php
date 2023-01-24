<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Ownership;

class OwnershipController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $ownership = Ownership::select("id", \DB::raw("INITCAP(name) as name"),\DB::raw("INITCAP(foreign_name) as foreign_name"));
            if(!empty($search)) {
                $ownership = $ownership->whereRaw("lower(name) like '%$search%'");
                $ownership = $ownership->whereRaw("lower(foreign_name) like '%$search%'");
            }
            $ownership = $ownership->get();
            $this->responseOk($ownership);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }
}

<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Marriage;

class MarriageController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $marriage = Marriage::select("id", \DB::raw("INITCAP(name) as name"));
            if(!empty($search)) {
                $marriage = $marriage->whereRaw("lower(name) like '%$search%'");
            }
            $marriage = $marriage->get();
            $this->responseOk($marriage);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }
}

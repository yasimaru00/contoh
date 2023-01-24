<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\BackgroundFamily;

class BackgroudFamilyController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $background_family = BackgroundFamily::select("id", \DB::raw("INITCAP(name) as name"));
            if(!empty($search)) {
                $background_family = $background_family->whereRaw("lower(name) like '%$search%'");

            }
            $background_family = $background_family->get();
            $this->responseOk($background_family);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }
}

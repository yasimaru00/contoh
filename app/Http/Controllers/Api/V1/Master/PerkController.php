<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Perk;

class PerkController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $perk = Perk::select("id", "uuid", \DB::raw("INITCAP(name) as name"));
            if(!empty($search)) {
                $perk = $perk->whereRaw("lower(name) like '%$search%'");
            }
            $perk = $perk->get();
            $this->responseOk($perk);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function find($uuid)
    {
        try {
            $data = Perk::select("id", "uuid", \DB::raw("INITCAP(name) as name"))->where("uuid", $uuid)->first();
            $this->responseOk($data);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

}

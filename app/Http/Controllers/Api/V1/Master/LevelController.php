<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Level;

class LevelController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $level = Level::select("id", "uuid", \DB::raw("INITCAP(name) as name"));
            if(!empty($search)) {
                $level = $level->whereRaw("lower(name) like '%$search%'");
            }
            $level = $level->get();
            $this->responseOk($level);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function find($uuid)
    {
        try {
            $data = Level::select("id", "uuid", \DB::raw("INITCAP(name) as name"))->where("uuid", $uuid)->first();
            $this->responseOk($data);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

}

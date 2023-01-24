<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\City;

class CityController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $city = City::select("id", "code", \DB::raw("INITCAP(name) as name"));
            if(!empty($search)) {
                $city = $city->whereRaw("lower(code) like '%$search%'");
                $city = $city->orWhereRaw("lower(name) like '%$search%'");
            }
            $city = $city->get();
            $this->responseOk($city);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function find($id)
    {
        try {
            $data = City::select("id", "code", \DB::raw("INITCAP(name) as name"))->first();
            $this->responseOk($data);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

}

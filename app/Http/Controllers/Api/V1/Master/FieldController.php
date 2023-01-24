<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Field;

class FieldController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $field = Field::select("id", "uuid", \DB::raw("INITCAP(name) as name"));
            if(!empty($search)) {
                $field = $field->whereRaw("lower(name) like '%$search%'");
            }
            $field= $field->get();
            $this->responseOk($field);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function find($uuid)
    {
        try {
            $data = Field::select("id", "uuid", \DB::raw("INITCAP(name) as name"))->where("uuid", $uuid)->first();
            $this->responseOk($data);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

}

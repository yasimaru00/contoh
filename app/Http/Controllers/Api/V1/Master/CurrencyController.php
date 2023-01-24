<?php


namespace App\Http\Controllers\Api\V1\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Currency;

class CurrencyController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $currency = Currency::select("id", "code", \DB::raw("INITCAP(name) as name", "symbol"));
            if(!empty($search)) {
                $currency = $currency->whereRaw("lower(code) like '%$search%'");
                $currency = $currency->orWhereRaw("lower(name) like '%$search%'");
            }
            $currency = $currency->get();
            $this->responseOk($currency);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }
}

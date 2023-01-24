<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $status;
    protected $success;
    protected $message;
    protected $data;
    protected $response;

    function __construct() {
        $this->status = 200;
        $this->success = true;
        $this->message = "Success";
        $this->data = null;
        $this->setResponse();
    }

    protected function setResponse() {
        $this->response = [
            "success" => $this->success,
            "message" => $this->message,
            "data" => $this->data,
        ];
    }

    protected function responseOk($data = null, $message = "Success") {
        $this->status = 200;
        $this->success = true;
        $this->message = $message;
        $this->data = $data;
        $this->setResponse();
    }

    protected function responseFail($message = "Failed", $data = null) {
        $this->status = 500;
        $this->success = false;
        $this->message = $message;
        $this->data = $data;
        $this->setResponse();
    }

    protected function responseBadReq($data = null, $message = "Bad Request, check again your parameter") {
        $this->status = 400;
        $this->success = false;
        $this->message = $message;
        $this->data = $data;
        $this->setResponse();
    }

    protected function sendResponse() {
        return response()->json($this->response, $this->status);
    }
}

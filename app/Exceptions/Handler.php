<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($request->expectsJson() || $request->isJson() || $request->is('api/*')) {
            if (method_exists($exception, 'getStatusCode')) {
                    $statusCode = $exception->getStatusCode();
                } else {
                    $statusCode = 500;
                }
            if ($exception instanceof Exception) {
                try {
                    $file =  $exception->getFile();
                    $line =  $exception->getLine();
                    $message =  $exception->getMessage();
                    if($statusCode == 500) {
                        $summary = $file." (".$line.") : ".$message;
                    } else {
                        $summary = $message;
                    }
                } catch (\Throwable $th) {
                    $summary = "";
                }
            }
            if ($exception instanceof \Illuminate\Validation\ValidationException) {
                $summary = "";
                foreach ($exception->errors() as $key => $field) {
                    foreach ($field as $key_err => $err) {
                        $summary .= $err;
                    }
                }
            }
            if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
                $summary = "Unauthentication";
                $statusCode = 401;
            }

            return response()->json([
                "success" => false,
                "message" => ($summary) ?: \Symfony\Component\HttpFoundation\Response::$statusTexts[$statusCode],
                "data" => null,
            ], $statusCode);
        } else {
            return parent::render($request, $exception);
        }
    }
}

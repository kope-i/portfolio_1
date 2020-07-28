<?php

namespace App\Exceptions;

// use Exception;
use Throwable;
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
     * @param  \Throwable  $exception
     * @return void
     */
    // public function report(Exception $exception)
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    // public function render($request, Exception $exception)
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

    //追記。マルチログイン
    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     if($request->expectsJson()){
    //         return response()->json(['message' => $exception->getMessage()], 401);
    //     }

    //     if (in_array('admin', $exception->guards(), true)) {
    //         return redirect()->guest(route('admin.login'));
    //     }

    //     return redirect()->guest(route('login'));
    // }
}

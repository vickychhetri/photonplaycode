<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            return redirect()->route('customer.homePage')->with('error', 'An error occurred: ');
        });
    }

    public function render($request, Throwable $exception)
    {

        if ($exception instanceof \Illuminate\Session\TokenMismatchException) {
        return redirect()->back()->withErrors([
            'error' => 'Your session has expired. Please refresh the page and try again.',
        ]);
        }


        if ($exception instanceof NotFoundHttpException) {
            return Redirect::route('customer.homePage');
        }

        return parent::render($request, $exception);
    }
}

<?php
namespace Novichkov\LaravelApiHandler;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Throwable;

class LaravelApiHandler extends ExceptionHandler
{
    public function render($request, Throwable $e): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
    {
        return response()->json([
            'status' => 'fail',
            'error' => 'Laravel Api Handler'
        ], 400);
    }
}

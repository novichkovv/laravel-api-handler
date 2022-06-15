<?php
namespace Novichkov\ApiHandler;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Throwable;

class ApiHandler extends ExceptionHandler
{
    public function render($request, Throwable $e): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
    {
        return response()->json([
            'status' => 'fail',
            'error' => 'Laravel Api Handler'
        ], 400);
    }
}

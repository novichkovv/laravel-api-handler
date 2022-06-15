<?php
namespace Novichkovv\LaravelApiHandler;

use App\Exceptions\Handler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Novichkovv\LaravelApiHandler\Services\ApiRequestDefiner;
use Throwable;

class ApiHandler extends Handler
{
    public function render($request, Throwable $e): Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
    {
        $definer = new ApiRequestDefiner($request);
        if($definer->isApiRequest() === true) {
            $renderer = new ApiErrorRenderer($e);
            return $renderer->render();
        }
        return parent::render($request, $e);
    }
}

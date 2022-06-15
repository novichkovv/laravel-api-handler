<?php
namespace Novichkovv\LaravelApiHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Novichkovv\LaravelApiHandler\Enums\HttpStatusCode;
use Throwable;

class ApiErrorRenderer
{
    public function __construct(private Throwable $error)
    {

    }

    public function render() : Response|JsonResponse|\Symfony\Component\HttpFoundation\Response
    {
        return \response()->json([
            'status' => 'fail',
            'error' => 'Laravel Api Error',
            'original_error' => $this->error->getMessage()
        ], HttpStatusCode::unexpected->value);
    }
}

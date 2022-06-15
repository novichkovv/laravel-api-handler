<?php
namespace Novichkovv\LaravelApiHandler\Exceptions;
use Exception;
use JetBrains\PhpStorm\Pure;
use Novichkovv\LaravelApiHandler\Enums\HttpStatusCode;
use Throwable;

class ApiResponseException extends Exception
{
    #[Pure] public function __construct($message = "", private int|null $http_status_code = null, $error_code = 0, Throwable $previous = null)
    {
        if(null === $this->http_status_code) {
            $this->http_status_code = HttpStatusCode::unexpected->value;
        }
        parent::__construct($message, $error_code, $previous);
    }

    public function getHttpStatusCode() : int
    {
        return $this->http_status_code;
    }
}

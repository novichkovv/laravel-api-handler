<?php
namespace Novichkovv\LaravelApiHandler\Enums;
enum HttpStatusCode : int
{
    case notFound = 404;
    case unexpected = 500;
}

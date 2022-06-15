<?php
namespace Novichkovv\LaravelApiHandler\Services;
use Illuminate\Http\Request;

class ApiRequestDefiner
{
    public function __construct(private Request $request) {}

    public function isApiRequest() : bool
    {
        $is_api_handler = false;
        foreach (config('api_handler.handle.prefixes') as $prefix) {
            if($this->request->route()->getPrefix() === $prefix) {
                $is_api_handler = true;
            }
        }
        foreach (config('api_handler.handle.domains') as $domain) {
            if($this->request->route()->getDomain() === $domain) {
                $is_api_handler = true;
            }
        }
        return $is_api_handler;
    }
}

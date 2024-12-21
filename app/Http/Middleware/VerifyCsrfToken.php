<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'api/articles',  // Isso vai desabilitar CSRF para todas as rotas que começam com api/
    ];
}
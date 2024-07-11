<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyCrsfToken extends Middleware{
    
    protected $except = [
        '/add',
    ];    
}

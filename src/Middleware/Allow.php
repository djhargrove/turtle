<?php

namespace Kjdion84\Turtle\Middleware;

class Allow
{
    public function handle($request, $next, $key)
    {
        // if config option is not set to true redirect to index
        if (!config('turtle.allow.' . $key)) {
            return redirect()->route('index');
        }

        return $next($request);
    }
}
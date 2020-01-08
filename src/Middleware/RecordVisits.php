<?php

namespace Voerro\Laravel\VisitorTracker\Middleware;

use Closure;
use Voerro\Laravel\VisitorTracker\Tracker;

class RecordVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = Tracker::recordVisit();

        $request->request->add(['visitData' => $data]);

        return $next($request);
    }
}

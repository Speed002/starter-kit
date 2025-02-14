<?php

namespace App\Http\Middleware;

use App\Http\Resources\UserResource;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'ziggy' => function () use ($request) {
                $ziggy = new Ziggy();
                return [
                    'url' => $request->url(),
                    'routes' => $ziggy->toArray()
                ];
            },
            'config' => config()->get(['app.name']),
            'auth' => [
                'user' => $request->user() ? UserResource::make($request->user()) : null
            ],
            // This is a helper, this helps with routing
            'ziggy' => [
                'route_name' => Route::currentRouteName()
            ]
        ]);
    }
}

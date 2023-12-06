<?php

namespace LA09R\PackageOne\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

use LA09R\StarterKit\UI\Vue\Inertia\App\Providers\RouteServiceProvider;

class MainController extends Controller
{
    public function webEdit(Request $request)
    {
        return Inertia::render('PackageOne/Edit', [

        ]);
    }

    public function webIndex(Request $request)
    {
        return Inertia::render('PackageOne/Index', [

        ]);
    }

    public function webList(Request $request)
    {
        return Inertia::render('PackageOne/List', [

        ]);
    }

    public function webSettings(Request $request)
    {
        return Inertia::render('PackageOne/Settings', [

        ]);
    }

    public function apiList(Request $request)
    {

        return $request->wantsJson() ? new JsonResponse([], 200) : redirect(route('main.' . RouteServiceProvider::PREFIX_WEB . '.dashboard'));
    }

    public function apiSelect(Request $request, $id)
    {

        return $request->wantsJson() ? new JsonResponse([], 200) : redirect(route('main.' . RouteServiceProvider::PREFIX_WEB . '.dashboard'));
    }

    public function apiInsert(Request $request)
    {

        return $request->wantsJson() ? new JsonResponse([], 200) : redirect(route('main.' . RouteServiceProvider::PREFIX_WEB . '.dashboard'));
    }

    public function apiDelete(Request $request)
    {

        return $request->wantsJson() ? new JsonResponse([], 200) : redirect(route('main.' . RouteServiceProvider::PREFIX_WEB . '.dashboard'));
    }

    public function apiUpdate(Request $request)
    {

        return $request->wantsJson() ? new JsonResponse([], 200) : redirect(route('main.' . RouteServiceProvider::PREFIX_WEB . '.dashboard'));
    }

    public function apiNew(Request $request)
    {

        return $request->wantsJson() ? new JsonResponse([], 200) : redirect(route('main.' . RouteServiceProvider::PREFIX_WEB . '.dashboard'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePorfolioRequest;
use App\Http\Resources\Portfolio as PortfolioResource;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Portfolio::active()->get();
        
        return PortfolioResource($projects);
    }


    public function create()
    {
        //
    }

    public function store(StorePortfolioRequest $request)
    {
        //
    }

    public function show(Portfolio $portfolio)
    {
        //
    }

    public function edit(Portfolio $portfolio)
    {
        //
    }

    public function update(UpdatePorfolioRequest $request, Portfolio $portfolio)
    {
        //
    }

    public function destroy(Portfolio $portfolio)
    {
        //
    }
}

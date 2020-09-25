<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Resources\Portfolio as PortfolioResource;
use App\Http\Requests\StorePortfolioRequest;

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

    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    public function destroy(Portfolio $portfolio)
    {
        //
    }
}

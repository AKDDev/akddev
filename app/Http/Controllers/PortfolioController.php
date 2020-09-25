<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePorfolioRequest;
use App\Http\Requests\UpdatePorfolioRequest;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Portfolio::active()->get();

        return view('portfolio.list')
            ->with('projects', $projects);
    }


    public function create()
    {
        return view('portfolio.create');
    }

    public function store(StorePorfolioRequest $request)
    {
        Portfolio::create([
            'project' => $request->get('project')
        ]);

        session()->flash('success','Portfolio project created.');

        return redirect()->route('portfolio');
    }

    public function show(Portfolio $portfolio)
    {
        return view('portfolio.show')
            ->with('portfolio',$portfolio);
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit')
            ->with('portfolio',$portfolio);
    }

    public function update(UpdatePorfolioRequest $request, Portfolio $portfolio)
    {
        $portfolio->project = $request->get('project');

        $portfolio->save();

        session()->flash('success','Portfolio project updated.');

        return redirect()->route('portfolio');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        session()->flash('success','Portfolio project deleted.');

        return redirect()->route('portfolio');

    }
}

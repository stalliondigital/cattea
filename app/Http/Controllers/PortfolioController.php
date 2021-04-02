<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::all();
        return view ('portfolio.index', ['portfolio' => $portfolio]);
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function manage()
    {
        $portfolio = Portfolio::orderBy('category', 'DESC')->get();

        return view ('portfolio.manage', ['portfolio' => $portfolio]);    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'altText' => 'required|max:2021',
            'category' => 'required',
            'imagePath' => 'required|mimes:jpg, png, jpeg|max:5048'       
        ]);
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
        $portfolio->delete(); // TODO add delete for file item too

        return redirect()->route('portfolio.manage')->with('success', 'Portfolio Image deleted successfully');
    }
}

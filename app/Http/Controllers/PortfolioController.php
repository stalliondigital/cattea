<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 


class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::paginate(50);

        return view ('portfolio.index', ['portfolio' => $portfolio]);
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function manage()
    {
        $portfolio = Portfolio::orderBy('category', 'DESC')->paginate(10);

        return view ('portfolio.manage', ['portfolio' => $portfolio]);    }


    public function store(Request $request)
    {
        $this->validatePortfolio();

        $newImageName = time() . '-' . str_replace(' ', '-', $request->title) . '.' . $request->imagePath->extension();

        $request->imagePath->move(public_path('img/portfolio/') . lcfirst($request->category), $newImageName);

        $portfolio = Portfolio::create([
            'title' => $request->input('title'),
            'altText' => $request->input('altText'),
            'category' => $request->input('category'),
            'imagePath' => lcfirst($request->category) . '/' . $newImageName,
        ]);

        return redirect('/portfolio/manage');

    }


    public function show(Portfolio $portfolio)
    {
        //
    }


    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', ['portfolio' => $portfolio]);
    }


    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->update([
            'title' => $request->input('title'),
            'altText' => $request->input('altText'),
            'category' => $request->input('category'),
        ]);

        return redirect(route('portfolio.manage'));

    }

    public function destroy(Portfolio $portfolio)
    {
        $fullPath = public_path('img/portfolio/') . $portfolio->imagePath;

        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }



        $portfolio->delete();

        return redirect()->route('portfolio.manage')->with('success', 'Portfolio Image deleted successfully');
    }

    public function validatePortfolio()
    {
        request()->validate([
            'title' => 'required',
            'altText' => 'max:2021',
            'category' => 'required',
            'imagePath' => 'required|mimes:jpg, png, jpeg|max:5048'       
        ]);
    }
}

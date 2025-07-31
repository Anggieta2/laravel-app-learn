<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Product;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): view
    {
        //get all products
        $products = Product::latest()->paginate(10);

        //render view with products
        return view('products.index', compact('products'));
    }

    /**
     * create
     * 
     * @return View
     */
    public function create(): view
    {
        return view('products.create');
    }

    /**
     * store
     * 
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'checkout_book' => 'required',
            'stock' => 'required|numeric'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        Product::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'description' => $request->description,
            'checkout_book' => $request->checkout_book,
            'stock' => $request->stock
        ]);

        return redirect()->route('products.index')->with(['success' => 'Product created successfully']);
    }
}

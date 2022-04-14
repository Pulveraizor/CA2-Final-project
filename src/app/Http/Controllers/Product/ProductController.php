<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function products (Request $request) {
        $products = Products\Products::with('brand');
       
        if ($request->has('type_id')) {
            $products->orWhere('type_id', $request->type_id);
        }

        if ($request->has('brand_id')) {
            $products->orWhere('brand_id', $request->brand_id);
        }
    

        if ($request->order_by == 'price') {
            $products->orderBy('price');
        } elseif ($request->order_by == 'newest') {
            $products->orderBy('created_at');
        } elseif ($request->order_by == 'type') {
            $products->orderBy('type_id');
        }


        $items = $products->get();

        $types = Products\ProductType::get();
        $brands = Products\ProductBrands::get();

        $view = view('pages.products', compact('items', 'types', 'brands'));
        $view->with('type', $request->type);
        $view->with('brand', $request->brand);

        return $view;
    }

    public function show(Products\Products $product)
    {
        $brands = Products\ProductBrands::get();
        return view('pages.showDetails', compact('product', 'brands'));
    }

    public function getForAdmin (Request $request) {
        if(Auth::user() && Auth::user()->admin){

        $products = Products\Products::with('brand', 'type')->get();

        return json_encode($products);
        }

    }

    public function store (Request $request) {
        $product = $request->validate([
            'type' => 'required|exists',
            'brand' => 'required|max:250',
            'model' => 'required|max:250',
            'description' => 'required|max:1000',
            'serial_number' => 'required',
            'image' => ''
        ]);
    }

    public function cart() {
        return view('pages.cart');
    }

    public function addToCart($id) {

        $product = Products\Products::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "brand" => $product->brand,
                "model" => $product->model,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request) {

        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');

            return view('pages.cart');
        }
    }
}

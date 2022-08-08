<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pet;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Product::with('pet','typeproduct')->simplePaginate(5);
        //dd(Pet);
        //return $Products;
        //dd($Products);
        return view('product/data',compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typepro = TypeProduct::all();
        $pet = Pet::all();
        return view('product/add', compact('typepro', 'pet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'type' => 'required',
            'pet' => 'required',
            'icon' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        //return $request;

        //cara 1 Eloquent ORM biasa
        // $products = new Product;
        // $products->ProductName = $request->name;
        // $products->IdProductType = $request->type;
        // $products->Icon = $request->icon;
        // $products->Pet_id = $request->pet;
        // $products->Price = $request->price;
        // $products->Description = $request->description;
        // $products->save();

        //cara 2 mass assignment
        // Product::create([
        //     'ProductName' => $request->name,
        //     'IdProductType' => $request->type,
        //     'Icon' => $request->icon,
        //     'Pet_id' => $request->pet,
        //     'Price' => $request->price,
        //     'Description' => $request->description,
        // ]);

        //cara 3 nama field sama dengan nama input an 
        //Product::create($request->all());

        //cara 4 gabungan no 2 dan 1
        $product = new Product([
            'ProductName' => $request->name,
            'IdProductType' => $request->type,
            'Icon' => $request->icon,
            'Pet_id' => $request->pet,
            'Price' => $request->price,
            'Description' => $request->description,
        ]);
        $product -> save();

        return redirect('product')->with('status', 'Produk berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
        return view('product/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $typepro = TypeProduct::all();
        $pet = Pet::all();
        //return $product;
        return view('product/edit', compact('product','typepro','pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:3',
            'type' => 'required',
            'pet' => 'required',
            'icon' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        //cara 1 Eloquent ORM biasa
        // $products = new Product;
        // $products->ProductName = $request->name;
        // $products->IdProductType = $request->type;
        // $products->Icon = $request->icon;
        // $products->Pet_id = $request->pet;
        // $products->Price = $request->price;
        // $products->Description = $request->description;
        // $products->save();

        //cara 2
        Product::where('IdProduct', $product->IdProduct)
                ->update([
                    'ProductName' => $request->name,
                    'IdProductType' => $request->type,
                    'Icon' => $request->icon,
                    'Pet_id' => $request->pet,
                    'Price' => $request->price,
                    'Description' => $request->description,
                ]);
        
        return redirect('product')->with('status', 'Produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product -> delete();
        
        return redirect('product')->with('status', 'Produk berhasil dihapus!');
    }
}

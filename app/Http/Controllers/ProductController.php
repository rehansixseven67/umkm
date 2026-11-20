<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('permission:view-products', ['only' => ['index']]);
        $this->middleware('permission:create-products', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-products', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-products', ['only' => ['destroy']]);
    }
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'image' => 'nullable | image | mimes:jpg,jpeg,png,webp',
            'tokopedia_url' => 'nullable|url|max:2048',

            'kategori_id' => 'required|exists:categories,id_kategori',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Product::create($data);

        return redirect()->route('product.index')
            ->with('success', 'produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // $product->load('category');

        return view('pelanggan.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'tokopedia_url' => 'nullable|url|max:2048',

            'image' => 'nullable | image | mimes:jpg,jpeg,png,webp | max:2048',

            'kategori_id' => 'required|exists:categories,id_kategori',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $product->update($data);

        return redirect()->route('product.index')
            ->with('success', 'produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')
            ->with('success', 'produk berhasil dihapus.');
    }
    public function pelangganIndex(Request $request)
    {

        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:100'],
        ]);

        $search = trim($validated['search'] ?? '');

        $query = Product::with('category');

        if ($search !== '') {
            $query->where(function ($query) use ($search) {
                $query->where('produk', 'like', "%{$search}%")
                    ->orWhereHas('category', function ($categoryQuery) use ($search) {
                        $categoryQuery->where('kategori', 'like', "%{$search}%");
                    });
            });
        }


        $products = $query->paginate(10)->withQueryString();

        return view('pelanggan.index', compact('products', 'search'));
    }

    public function pelangganHome()
    {
        $products = Product::with('category')
            ->latest()
            ->take(5)
            ->get();

        return view('pelanggan.home', compact('products'));

        // $latestProducts = Product::with('category')
        //     ->latest()
        //     ->take(5)
        //     ->get();

        // $popularProducts = Product::with('category')
        //     ->where('is_popular', true)
        //     ->latest()
        //     ->take(5)
        //     ->get();

        // return view('pelanggan.home', compact('latestProducts', 'popularProducts'));
    }
}

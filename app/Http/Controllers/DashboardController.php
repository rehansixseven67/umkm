<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $totalProducts = Product::count();
        $produkTerbaru = Product::with('category')
            ->latest()
            ->take(5)
            ->get();

        $produkTerlaris = Product::with('category')
            ->where('terlaris', true)
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'produkTerbaru',
            'produkTerlaris'
        ));
    }
}

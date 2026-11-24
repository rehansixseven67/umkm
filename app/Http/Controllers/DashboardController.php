<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;

class DashboardController extends Controller
{
    public function __invoke()
    {

        $totalUsers = User::count();

        $totalAdmins = User::role(['Admin', 'Super Admin'])->count();
        $totalCustomers = User::role('User')->count();
        $totalProducts = Product::count();
        $totalReviews = Review::count();
        $averageRating = Review::avg('rating') ?? 0;

        $latestReviews = Review::with(['user', 'product'])
            ->latest()
            ->take(10)
            ->get();
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
            'totalUsers',
            'totalProducts',
            'produkTerlaris',
            'totalReviews',
            'averageRating',
            'latestReviews',
            'totalAdmins',
            'totalCustomers'
        ));
    }
}

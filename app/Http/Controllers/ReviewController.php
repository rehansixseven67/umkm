<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::with(['user', 'product'])
            ->latest()
            ->paginate(10);

        return view('pelanggan.ulasan', compact('reviews'));
    }
    public function adminIndex(Request $request)
    {
        $validated = $request->validate([
            'rating' => ['nullable', 'integer', 'between:1,5'],
            'search' => ['nullable', 'string', 'max:100'],
        ]);

        $rating = $validated['rating'] ?? '';
        $search = trim($validated['search'] ?? '');

        $query = Review::with(['user', 'product']);

        if ($rating !== '') {
            $query->where('rating', $rating);
        }

        if ($search !== '') {
            $query->where(function ($query) use ($search) {
                $query->where('ulasan', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('name', 'like', "%{$search}%");
                    })
                    ->orWhereHas('product', function ($productQuery) use ($search) {
                        $productQuery->where('produk', 'like', "%{$search}%");
                    });
            });
        }

        $reviews = $query->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.ulasan', compact('reviews', 'rating', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => ['required', 'exists:products,id'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'ulasan' => ['required', 'string', 'max:1000'],
        ]);

        $user = $request->user();

        if ($user === null) {
            return redirect()->route('login');
        }

        $userId = $user->getAuthIdentifier();

        $exists = Review::where('user_id', $userId)
            ->where('product_id', $validated['product_id'])
            ->exists();

        if ($exists) {
            return back()->withErrors([
                'ulasan' => 'Anda sudah memberi ulasan untuk produk ini.',
            ]);
        }

        Review::create([
            'user_id' => $userId,
            'product_id' => $validated['product_id'],
            'rating' => $validated['rating'],
            'ulasan' => $validated['ulasan'],
        ]);

        return back()->with('success', 'Ulasan berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Ulasan berhasil dihapus.');
    }
}

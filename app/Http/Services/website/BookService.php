<?php

namespace App\Http\Services\website;

use App\Http\Requests\Api\V1\Auth\SignInRequest;
use App\Http\Requests\Api\V1\Auth\SignUpRequest;
use App\Http\Resources\V1\User\UserResource;
use App\Models\userBook;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookService
{


    public function addToCart(Request $request)
    {
        // Validate the request
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        // Get the authenticated user
        $user = Auth::guard('api')->user();

        // Add the book to the user's cart (assuming you have a cart system)
        $user->cart()->attach($request->book_id);

        return response()->json([
            'status' => 'success',
            'message' => 'Book added to cart successfully!',
        ]);
    }

    /**
     * Add a book to favorites.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addToFavorites(Request $request)
    {
        // Validate the request
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        // Get the authenticated user
        $user = auth('api')->user();

        // Check if the book is already in favorites
        $isFavorite = userBook::where('user_id', $user->id)
            ->where('book_id', $request->book_id)
            ->exists();

        if ($isFavorite) {
            return response()->json([
                'status' => 'error',
                'message' => 'Book is already in your favorites!',
            ], 400);
        }

        // Add the book to favorites
        userBook::create([
            'user_id' => $user->id,
            'book_id' => $request->book_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Book added to favorites successfully!',
        ]);
    }

    /**
     * Remove a book from favorites.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function removeFromFavorites(Request $request)
    {
        // Validate the request
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Remove the book from favorites
        userBook::where('user_id', $user->id)
            ->where('book_id', $request->book_id)
            ->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Book removed from favorites successfully!',
        ]);
    }

}

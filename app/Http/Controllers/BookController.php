<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request){

    $books = Book::query()

        ->when(
            $request->filled('titulo'),
            fn ($query) =>
                $query->where('titulo', 'like', '%' . $request->titulo . '%')
        )
        ->when(
            $request->filled('isbn'),
            fn ($query) =>
                $query->where('isbn', 'like', '%' . $request->isbn . '%')
        )

        ->when(
            $request->boolean('disponible'),
            fn ($query) => $query->onlyTrashed()
        )
        ->get();

    return BookResource::collection($books);
    }


}

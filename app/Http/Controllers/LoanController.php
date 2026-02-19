<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoanRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;
use Nette\Utils\Json;

class LoanController extends Controller
{
    public function store(StoreLoanRequest $request){


        $data = $request->validated();

        $loan = Loan::create($data);
        
        $book =Book::query()

        ->where('id', '=', $data["book_id"])
        
        ->get();



        if ($book['disponible'] == 0){
            return response()->json(['message' => 'Libro no disponible.'], 422);
        } 

        return response()->json(Loan::make($loan), 201);

    }
}

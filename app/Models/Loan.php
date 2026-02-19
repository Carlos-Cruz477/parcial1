<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'solicitante',
        'hora_prestamo',
        'book_id',

    ];
}

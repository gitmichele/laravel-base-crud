<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'ospiti';

    protected $fillable = [
        'name',
        'lastname',
        'date_of_birth',
        'document_type',
        'document_number',
    ];
}

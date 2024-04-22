<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id',          
                'gender',
                'user_id',
                'dateofbirth',
                'emergencycontactnumber',
                'phoneNumber',
                'address',
            ];
}
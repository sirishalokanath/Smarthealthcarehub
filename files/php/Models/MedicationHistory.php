<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationHistory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'patient_id', 'date', 'description' ,'type'];

}

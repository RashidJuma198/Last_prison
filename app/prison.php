<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prison extends Model
{
    use HasFactory;
    protected $fillable=[
        'Full_Names',
        'Age',
        'Location',
        'Prison_Name'
    ];
}

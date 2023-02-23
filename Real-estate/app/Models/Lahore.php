<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahore extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';
    protected $table = 'lahore';

    protected $fillable = [
        'id',
        'name',
        'img'
    ];
    public $timestamps = false;
}

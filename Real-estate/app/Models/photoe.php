<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photoe extends Model
{
    use HasFactory;
    protected $primaryKey = 'p_id';

    protected $fillable = [
        
        'name',
        'detail',
        'file_path'
    ];
    public $timestamps = false;
}

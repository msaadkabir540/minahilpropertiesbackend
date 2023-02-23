<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class block extends Model
{
    use HasFactory;
    protected $table = 'blocks';
    protected $primaryKey = 'b_id';

    protected $fillable = [
        'b_id',
        'block_name',
        'p_id'
    ];
    public $timestamps = false;
}

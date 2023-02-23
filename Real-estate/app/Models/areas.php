<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\area_type;

class areas extends Model
{
    use HasFactory;
    protected $table = 'areas';
    protected $primaryKey = 'a_id';

    protected $fillable = [
        'a_id', 
        'Area', 
        'price', 
        'at_id',
        'p_id'
    ];
    public $timestamps = false;

    public function areatypes_details() {
        return $this->hasOne(area_type::class, 'at_id', 'at_id');
        
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\block;
use App\Models\areas;
use App\Models\area_type;

class phasedetail extends Model
{
    use HasFactory;
    protected $table = 'phasedetails';
    protected $primaryKey = 'p_id';

    protected $fillable = [ 'p_id', 'name', 'detail', 'img' ];
    public $timestamps = false;

    
    public function block_detail() {
        return $this->hasMany(block::class,  'p_id', 'p_id');
    }
    public function area_detail(){
        return $this->hasMany(areas::class, 'p_id', 'p_id');
        
    }
    public function areatype_detail(){
        return $this->hasMany(area_type::class, 'p_id', 'p_id');
        
    }

    
    
}


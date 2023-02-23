<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\areas;
// use App\Models\phasedetail;



class area_type extends Model
{
    use HasFactory;
    protected $table = 'area_type';
    protected $primaryKey = 'at_id';

    protected $fillable = [
        'at_id',
        'type_name',
        'a_id'
    ];
    public $timestamps = false;

    // public function areatype_details() {
    //     return $this->hasMany(areas::class, 'at_id', 'at_id');
    //     // ->where('p_id'->$id);
    // }
    // public function areatypes_detail() {
    //     return $this->belongsTo(areas::class, 'at_id', 'at_id');
        
    // }


    public function area_details() {
        return $this->hasMany(areas::class, 'at_id', 'at_id');
        
    }


   
}

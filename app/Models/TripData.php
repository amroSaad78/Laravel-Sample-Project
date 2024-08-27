<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripData extends Model
{
    use HasFactory;
    //protected $fillable = ['price'];
    //protected $with = ['cartype'];

    // public function cartype()
    // {
    //     return $this->belongsTo(CarType::class,'car_types_id')->select(['id', 'seat', 'bag','image']);
    // }
    // public function arivcity()
    // {
    //     return $this->belongsTo(ArivCity::class);
    // }
    // public function depcity()
    // {
    //     return $this->belongsTo(DepCity::class);
    // }
    // public function triptype()
    // {
    //     return $this->belongsTo(TripType::class);
    // }
}

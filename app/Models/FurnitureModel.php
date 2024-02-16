<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FurnitureModel extends Model
{
    protected $table="furniture";
    protected $fillable=['room_id','product_id','hotspot1_id','hotspot2_id','imageURL'];
    use HasFactory;
}

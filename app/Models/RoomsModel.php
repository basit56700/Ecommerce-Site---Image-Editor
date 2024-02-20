<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsModel extends Model
{
    protected $table="rooms";
    protected $fillable=['id','hotspot_qty','img_width','img_height','divide_point','imageURL'];
    use HasFactory;
}
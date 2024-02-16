<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    protected $table="image";
    protected $fillable=['room_id','product_id','hotspot_id','imageURL'];
    use HasFactory;
}

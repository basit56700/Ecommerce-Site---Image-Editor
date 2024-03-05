<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['series','category','cat_id','sub_category','slug','description','photo','cat_logo','status'];
}

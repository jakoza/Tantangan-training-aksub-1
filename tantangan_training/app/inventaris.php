<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventaris extends Model
{
    protected $fillable = ['item_name','item_qtt','item_price','item_condition'];
}

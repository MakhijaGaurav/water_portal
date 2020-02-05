<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Family extends Model
{
    protected $fillable = ["surname","head","address_first_line","address_second_line","address_landmark","address_city","address_state","address_zip"];
    public $timestamps = true;
    use SoftDeletes;
}

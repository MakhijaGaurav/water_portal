<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComplainImages extends Model
{
    protected $fillable=['complain_id','img','created_by'];
    public $timestamps = true;
    use SoftDeletes;
}

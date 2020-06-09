<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complain extends Model
{
    protected $fillable=['complainant','msg','status','created_by'];
    public $timestamps = true;
    use SoftDeletes;
}

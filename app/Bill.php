<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ["family_id","bill_paid","start_date","end_date"];
}

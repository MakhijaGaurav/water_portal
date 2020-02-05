<?php
namespace App\Services;
use App\Cleaning;
use App\User;

class CleaningService{
    public function store($cleaner_name,$start_date,$end_date)
    {
        Cleaning::create([
           "cleaner_name" => $cleaner_name,
            "start_date" => $start_date,
            "end_date" => $end_date
        ]);
    }
}

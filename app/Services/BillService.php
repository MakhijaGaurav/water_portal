<?php
namespace App\Services;
use App\Bill;

class   BillService{

    public function store($family_id,$bill_paid,$start_date,$end_date)
    {
        return Bill::create([
            "family_id" => $family_id,
            "bill_paid" => $bill_paid,
            "start_date" => $start_date,
            "end_date" => $end_date
        ]);
    }
    public function update($id,$family_id,$bill_paid,$start_date,$end_date)
    {
        $bill = Bill::where('family_id','=',$family_id)->get();
        $bill->update([
            "bill_paid" => $bill_paid,
            "start_date" => $start_date,
            "end_date" => $end_date
        ]);
    }
}

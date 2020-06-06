<?php

namespace App\Services;
use App\Rfid;
use App\WaterConsumption;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RfidService
{
    public function checkIfValid($rfid)
    {
        $user = DB::select("SELECT surname,
                                    CASE
                                    WHEN COUNT(surname) < 1 THEN 'RFID DID NOT MATCH'
                                    WHEN bills.bill_paid != '1' THEN 'BILL NOT PAID'
                                    else '1'
                                    END AS reason
                                    from rfids, families, bills
                                    where rfids.allocated_to = families.id and
                                    families.id = bills.family_id and
                                     rfids.tag_data='$rfid'
                                    GROUP BY surname,bills.bill_paid
                                    LIMIT 1");
        if(empty($user))
        {
            $user['surname'] = "RFID DID NOT MATCH";
            $user['reason'] = "RFID DID NOT MATCH";
            return $user;
        }

        $store = DB::table('water_consumptions')->insert([
            'rfid' => $rfid,
            'litres_consumed' => 0,
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now(),
            'unit_no' => "1",
            'unit_type' => "indian"
        ]);
        return $user[0];

    }

    function recordConsumption($rfid,$consumption)
    {

        $litres_consumed = str_replace(",","",$consumption)-1900;
        //$litres_consumed = $litres-1900;
        //return $litres;
        $update = DB::table('water_consumptions')
                    ->where('rfid','=',$rfid)
                    ->update([
                        'litres_consumed' => $litres_consumed,
                        'end_time' => Carbon::now()
                    ]);
        return "Recorded Successfully";
    }
}

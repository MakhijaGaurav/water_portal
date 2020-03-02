<?php

namespace App\Services;
use App\Rfid;
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
                                    GROUP BY surname,bills.bill_paid");
        return $user;
    }
}

<?php
namespace App\Services;
use App\Family;
use Illuminate\Support\Facades\DB;

class FamilyService{
    public function store($surname,$head,$address_first_line,$address_second_line,$address_landmark,$address_city,$address_state,$address_zip)
    {
        return Family::create([
            "surname" => $surname,
            "head" => $head,
            "address_first_line" => $address_first_line,
            "address_second_line" => $address_second_line,
            "address_landmark" => $address_landmark,
            "address_city" => $address_city,
            "address_state" => $address_state,
            "address_zip" => $address_zip
        ]);
    }
    public function update($id,$head,$address_first_line,$address_second_line,$address_landmark,$address_city,$address_state,$address_zip)
    {
        $family = Family::findOrFail($id);
        $family->update([
            "head" => $head,
            "address_first_line" => $address_first_line,
            "address_second_line" => $address_second_line,
            "address_landmark" => $address_landmark,
            "address_city" => $address_city,
            "address_state" => $address_state,
            "address_zip" => $address_zip
        ]);
    }
    public function getAllFamily()
    {
        $family = Family::all();
        return $family;
    }

    public function destroy($id)
    {
        $family = Family::findOrFail($id);
        $family->delete();
    }

    public function getRfidDetails($id)
    {
        $cards = Family::join('rfids','rfids.allocated_to','families.id')
                        ->where('families.id','=',$id)
                        ->select(['rfids.tag_number AS card_number'])
                        ->get();
        return $cards;
    }

    public function getAllMembers($id)
    {
        $members = Family::join('family_users','family_users.family_id','families.id')
                            ->join('users','users.id','family_users.user_id')
                            ->where('families.id','=',$id)
                            ->select(['users.name AS member_name','users.email AS member_email','users.phone AS member_phone'])
                            ->get();
        return $members;
    }

    public function getAllConsumption($id)
    {
        $consumption = Family::join('rfids','rfids.allocated_to','families.id')
                                ->join('water_consumptions','water_consumptions.rfid','rfids.tag_data')
                                ->where('families.id','=',$id)
                                ->select(['rfids.tag_number','unit_no','unit_type','litres_consumed','start_time','end_time'])
                                ->get();
        return $consumption;
    }

    public function getAllBills($id)
    {
        $bills = Family::join('bills','bills.family_id','families.id')
                         ->where('families.id','=',$id)
                         ->orderBy('start_date','desc')
                         ->select('total_amount','bill_paid',DB::raw('DATE(start_date) as start_date'),
                         DB::raw('DATE(DATE_ADD(start_date,INTERVAL 30 DAY)) as end_date'))
                         ->get();
        return $bills;
    }

}

<?php
namespace App\Services;
use App\Family;

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
    public function update($id,$address_first_line,$address_second_line,$address_landmark,$address_city,$address_state,$address_zip)
    {
        $family = Family::where('id', '=',$id)->get();
        $family->update([
            "address_first_line" => $address_first_line,
            "address_second_line" => $address_second_line,
            "address_landmark" => $address_landmark,
            "address_city" => $address_city,
            "address_state" => $address_state,
            "address_zip" => $address_zip
        ]);
    }

    public function destroy($id)
    {
        $family = Family::findOrFail($id);
        $family->delete();
    }
}

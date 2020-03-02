<?php

namespace App\Http\Controllers\Api;

use App\Services\FamilyService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamilyRestController extends Controller
{
    protected $familyService;

    public function __construct()
    {
        $this->familyService = new FamilyService();
    }

    public function store(Request $request)
    {
        $payload = $request->all();
        return response()->json($this->familyService->store($payload["surname"],$payload["head"],$payload["address_first_line"],$payload["address_second_line"],$payload["address_landmark"],
                                                                $payload["address_city"],$payload["address_state"],$payload["address_zip"]),200);
    }

    public function update($family_id,Request $request)
    {
        $payload = $request->all();
        $this->familyService->update($family_id,$payload["head"],$payload["address_first_line"],
                                    $payload["address_second_line"],$payload["address_landmark"],
                                    $payload["address_city"],$payload["address_state"],
                                    $payload["address_zip"]);

        return response()->json("UPDATED SUCCESSFULLY",200);
    }

    public function destroy($family_id)
    {
        $this->familyService->destroy($family_id);
        return response()->json("DELETED SUCCESSFULLY",200);
    }

    public function getAllFamily()
    {
        return response()->json($this->familyService->getAllFamily(),200);
    }

    public function getRfidDetails($id)
    {
        //  dd($this->familyService->getRfidDetails($id));
        return response()->json($this->familyService->getRfidDetails($id),200);
    }

    public function getAllMembers($id)
    {
        return response()->json($this->familyService->getAllMembers($id),200);
    }

    public function getAllConsumption($id)
    {
        return response()->json($this->familyService->getAllConsumption($id),200);
    }
    public function getAllBills($id)
    {
        return response()->json($this->familyService->getAllBills($id));
    }
}

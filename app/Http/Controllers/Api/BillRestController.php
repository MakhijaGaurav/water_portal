<?php

namespace App\Http\Controllers\Api;

use App\Services\BillService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillRestController extends Controller
{
    protected $billService;

    public function __construct()
    {
        $this->billService = new BillService();
    }

    public function store(Request $request)
    {
        $payload = $request->all();
        return response()->json($this->billService->store($payload["family_id"], $payload["bill_paid"], $payload["start_date"],
            $payload["end_date"]), 200);
    }
}

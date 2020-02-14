<?php

namespace App\Http\Controllers\Api;

use App\Services\RfidService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RfidController extends Controller
{
    protected $rfidService;

    public function __construct()
    {
        $this->rfidService = new RfidService();
    }

    public function checkIfValid($rfid)
    {
        return response()->json($this->rfidService->checkIfValid($rfid)[0]->reason);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
use App\FamilyMember;
use App\Bill;



class DashboardPagesController extends Controller
{

    function getAllBills(Bill $bills){
        $bills = Bill::all();
        return view('dashboard.view_all_bills',compact('bills'));
    }
    
    function getAllComplains(){
        return view('dashboard.view_all_complains');
    }
    
    function getAllFeedbacks(){
        return view('dashboard.view_all_feedbacks');
    }
    
    function getAllUsers(FamilyMember $members){
        $members = FamilyMember::all();
        return view('dashboard.view_all_users',compact('members'));
    }
    
    function getAllConsumption(){
        return view('dashboard.view_all_consumption');
    }
    
    function getUnitConsumption(){
        return view('dashboard.view_unit_consumption');
    }
    
    function getFamilyConsumption(){
        return view('dashboard.view_family_consumption');
    }
    
}

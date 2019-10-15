<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPagesController extends Controller
{
    function getAllBills(){
        return view('dashboard.view_all_bills');
    }
    
    function getAllComplains(){
        return view('dashboard.view_all_complains');
    }
    
    function getAllFeedbacks(){
        return view('dashboard.view_all_feedbacks');
    }
    
    function getAllUsers(){
        return view('dashboard.view_all_users');
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

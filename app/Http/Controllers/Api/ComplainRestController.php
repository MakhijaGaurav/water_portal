<?php

namespace App\Http\Controllers\Api;

use App\Complain;
use App\ComplainImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComplainRestController extends Controller
{
    public function store(Request $request)
    {
        $payload = $request->all();
        $complain = Complain::create([
           "complainant" => $payload['complainant'],
            "msg" => $payload['msg'],
            "status" => 0,
            "created_at" => Carbon::now(),
            "created_by" => $payload['user_id']
        ]);

        if($request->hasFile('images'))
        {
            $count=0;
            foreach ($request->file('images') as $image) {
                $count++;
                $fileExtention = $image->getClientOriginalExtension();
                $filename = "user".$complain->created_by."complain".$complain->id."image".$count.".".$fileExtention;
                $image->storeAs('public/complains',$filename);
                ComplainImages::create([
                   "complain_id" => $complain->id,
                    "img" => $filename,
                    "created_by" => $complain->created_by
                ]);
            }
            $count=0;
        }

    }

}

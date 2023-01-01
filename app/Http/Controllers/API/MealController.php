<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\meal;
use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    public function index()
    {
        $members = member::all();
        return response()->json($members);
    }
    public function store(Request $request)
    {
        foreach ($request->user_id as $key=>$insert) {
            $saverecord = [
                'date'     => $request->date,
                'user_id'  => $request->user_id[$key],
                'meal'     => 1,
            ];
           
            // $data = DB::table('meals')->insert($saverecord);
        }
        $data = meal::insert($saverecord);
        return response()->json($data);
    }
}

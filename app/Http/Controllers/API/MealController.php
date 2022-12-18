<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\meal;
use App\Models\member;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $members = member::all();
        return response()->json($members);
    }
    public function store(Request $request)
    {
        // if ($meals = $request->get('myArray')) {
        //     foreach($meals as $meal){
        //         meal::create([
        //             'date' => $meal['date'],
        //             'user_id' => $meal['user_id'],
        //             'meal'    => 1,
        //         ]);
        //     }
        // }
        // return response()->json($meals);

        foreach($request->user_id as $i => $meal)
        {
            $meal = new meal();
            $meal->date    = $request->date;
            $meal->user_id = $request->user_id[$i];
            $meal->meal    = '1';

            $meal->save();
            return response()->json('Succcess');
        }
    }
}

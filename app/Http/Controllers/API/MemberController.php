<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = member::all();
        return response()->json($members);
    }

    public function addmember(Request $request)
    {
        $this->validate($request,[
            'name'   => 'required | unique:members',
        ],[
            'name.required' => "Please Enter Name",
            'name.unique'   => "Name Allready Taken",
        ]);

        $member = new member();
        $member->name   = $request->name;
        $member->status = '1';
        $member->save();

        return back()->with('success');
    }

    public function edit($id)
    {
        $member = member::find($id);
        return response()->json($member);
    }

    public function update(Request $request, $id)
    {
        $member = member::find($id);
        $member->name   = $request->name;
        $member->save();
        return response()->json('scuccess');
    }

    public function delete($id)
    {
        $member = member::find($id);
        $member->delete();
        
    }
}

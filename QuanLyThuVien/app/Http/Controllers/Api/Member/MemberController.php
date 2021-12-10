<?php

namespace App\Http\Controllers\Api\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MemberResource;
use App\Model\Member;
use Validate;
use File;
use Storage;
use Session;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Member::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.member.add-member');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'phone' => 'required',
            'email' => 'required'
        ]);
        $member = new Member();
        
        $member->name = $request['name'];
        $member->gender = $request['gender'];
        $member->dOB = $request['dOB'];
        $member->address = $request['address'];
        if ($request['avatar']) {
            //them image
            $image = $request['avatar'];
            $extension = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('member')->put($name,File::get($image));
            $member->avatar = $name;
        }
        else {
            $member->avatar = "default.png";
        }
        $member->phone = $data['phone'];
        $member->email = $data['email'];
        $member->save();
        Session::put('message','Thêm thành công');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return new MemberResource($member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($member)
    {
        $data = Member::find($member);
        return view('pages.member.update-member')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $member)
    {
        $member = Member::find($member);
        $data = $request->validate([
            'phone' => 'required',
            'email' => 'required'
        ]);
        if ($request['avatar']) {
            //update image
            $image = $request['avatar'];
            $extension = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('member')->put($name,File::get($image));
            $member->avatar = $name;
        }
        $member->name = $request['name'];
        $member->gender = $request['gender'];
        $member->dOB = $request['dOB'];
        $member->address = $request['address'];
        $member->phone = $data['phone'];
        $member->email = $data['email'];
        $member->save();
        return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete($id);
        return $member;
    }
}

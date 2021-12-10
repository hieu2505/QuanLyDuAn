<?php

namespace App\Http\Controllers\Api\Reader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Reader;
use App\Model\ClassStudent;
use Validate;
use File;
use Storage;
class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('readers')
        ->leftJoin('class_students', 'readers.class_id', '=', 'class_students.id')
        ->leftJoin('facultys', 'class_students.faculty_id', '=', 'facultys.id')
        ->select('readers.*', 'class_students.title as class_title','facultys.title as faculty_title')
        ->get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.reader.add-reader');
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
        $reader = new Reader();
        $reader->class_id = $request['classStudent'];
        $reader->name = $request['name'];
        $reader->gender = $request['gender'];
        $reader->dOB = $request['dOB'];
        $reader->address = $request['address'];
        if ($request['avatar']) {
            //them image
            $image = $request['avatar'];
            $extension = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('reader')->put($name,File::get($image));
            $reader->avatar = $name;
        }
        else {
            $reader->avatar = "default.png";
        }
        $reader->phone = $data['phone'];
        $reader->email = $data['email'];
        $reader->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Reader::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Reader::find($id);
        return view('pages.reader.update-reader')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reader)
    {
        $reader = Reader::find($reader);
        $data = $request->validate([
            'phone' => 'required',
            'email' => 'required'
        ]);
        $reader->class_id = $request['classStudent'];
        $reader->name = $request['name'];
        $reader->gender = $request['gender'];
        $reader->dOB = $request['dOB'];
        $reader->address = $request['address'];
        if ($request['avatar']) {
            //them image
            $image = $request['avatar'];
            $extension = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('reader')->put($name,File::get($image));
            $reader->avatar = $name;
        }
        $reader->phone = $data['phone'];
        $reader->email = $data['email'];
        $reader->save();
        return redirect('reader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reader = Reader::find($id);
        $reader->delete($id);
        return $reader;
    }
}

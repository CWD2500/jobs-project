<?php

namespace App\Http\Controllers;

use App\Models\ProFile;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class ProFileController extends Controller
{


    public function index($slug)
    {
    
        if(auth::user())
        {
            $proFile = ProFile::where('slug', $slug)->first();
            return view('proFile.proFile' , compact('proFile'));   
        }else{

            abort(404);
        }
    }


    public function create($id)
    {
        $proFile = ProFile::find($id);
        return view('proFile.edit' ,compact('proFile'));
    }


    public function store(Request $request)
    {
        $this->validate($request , [
            'full_name' => 'required',
            // 'user_id'   => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'country'   => 'required',
            'address    '   => 'required',
        ]);


        $proFile = new ProFile();  
        $proFile->full_name = $request->full_name;
        $proFile->email = $request->email;
        $proFile->phone = $request->phone;
        $proFile->country = $request->country;
        $proFile->address = $request->address;
        dd($request->all());  // json => Array :  key and value

    }


    public function show($id)
    {
        //
    }


    public function edit($slug)
    {
        $proFile = ProFile::where('slug', $slug)->first();
        return view('proFile.edit' ,compact('proFile'));
    }


    public function update(Request $request ,$id)
    {
        $proFile = ProFile::find($id);
        $user =  User::find($id);
        $this->validate($request , [
            'full_name' =>'required',
            'email'     => 'required',
            'phone'     =>'required',
            'country'   => 'required',
            'address'   =>'required',
        ]);

        $user->name = $request->full_name;
        $user->email = $request->email;
        
        $proFile->full_name = $user->name;
        $proFile->email = $user->email;
        $proFile->phone = $request->phone;
        $proFile->country = $request->country;
        $proFile->address = $request->address;
        $user->save();  
        $proFile->save();

        return redirect()->back();


    }

    public function destroy(ProFile $proFile)
    {
        //
    }
}

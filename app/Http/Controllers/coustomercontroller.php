<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coustomer;

class coustomercontroller extends Controller
{
    public function index()
    {
      

        $url = url('/coustomer');
        $title ="Customer Registration";
        $coustomer=new coustomer();
        $data = compact('url','title','coustomer');
        return view('coustomer')->with($data);
    }





    public function coustreg(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm-password' => 'required|same:password',
                'country' => 'required',
                'address' => 'required',
                'gender' => 'required',
                'dob' => 'required'
            ]

        );




        $coustomer = new coustomer;
        $coustomer->name = $request['name'];
        $coustomer->email = $request['email'];
        $coustomer->country = $request['country'];
        $coustomer->state = $request['state'];
        $coustomer->address = $request['address'];
        $coustomer->Gender = $request['gender'];
        $coustomer->dob = $request['dob'];
        $coustomer->password = md5($request['password']);
        $coustomer->save();


        return redirect('/coustomer/view');



        // $request->validate(
        //     [
        //         'name' => 'required',
        //         'email' => 'required|email',
        //         'password' => 'required',
        //         'confirm-password' => 'required|same:password',
        //         'country' => 'required',
        //         'address' => 'required',
        //         'gender' => 'required',
        //         'dob' => 'required'
        //     ]

        // );
    }
    public function view(Request $request)
    {
        $search = $request["search"]?? "";
        if($search ==! ""){
            $coustomer = Coustomer::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();

        }
        else
        {


            $coustomer = Coustomer::get();
            // paginate(15);
        }
       
        $data = compact('coustomer','search');

        return view('cos-view')->with($data);
    }

    public function trash(){
        
        $coustomer = Coustomer::onlyTrashed()->get();
        $data = compact('coustomer');

        return view('cos-trash')->with($data);
        
    }


    public function delete($id)

    {
        $coustomer = Coustomer::find($id);
        if(!is_null($coustomer))
        {
            $coustomer->delete();
        }
        return redirect('coustomer/view');


    }

    //restore
    public function restore($id)

    {
        $coustomer = Coustomer::withTrashed()->find($id);
        if(!is_null($coustomer))
        {
            $coustomer->restore();
        }
        return redirect()->back();


    }
    //forcedel
    public function forcedelete($id)

    {
        $coustomer = Coustomer::withTrashed()->find($id);
        if(!is_null($coustomer))
        {
            $coustomer->forceDelete();
        }
        return redirect()->back();


    }
    

    public function edit($id){

        $coustomer = Coustomer::find($id);
        if(is_null($coustomer))
        {
            //if coustomer not found.
            return redirect('coustomer/view');
        }
        else {

            $url = url('/coustomer/update')."/". $id;
            $title = "Update Coustomer";
            $data = compact('coustomer','url','title');
            return view('coustomer')->with($data);
        }
    }
    public function update($id, Request $request){
        $coustomer = Coustomer::find($id);
        $coustomer->name = $request['name'];
        $coustomer->email = $request['email'];
        $coustomer->country = $request['country'];
        $coustomer->state = $request['state'];
        $coustomer->address = $request['address'];
        $coustomer->Gender = $request['gender'];
        $coustomer->dob = $request['dob'];
        $coustomer->save();
        return redirect('coustomer/view');

    }
}

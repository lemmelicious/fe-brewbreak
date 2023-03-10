<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.users', [
            'header'    => 'Users Management',
            'users'     => User::all()
        ]);
    }


    public function form()
    {
        return view('users.form', [
            'header'    => 'Add User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //for validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);


        //for storing after validation
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        session()->flash('status', 'Successfully Added! ');


        //redirect you to the list of users
        return redirect('/users');
    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('users.form', [
            'header' => 'Update User',
            'user'   => $user
        ]);

    }
    





    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //For Validation

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::find($id);

        $user->update($request->all());

        session()->flash('status', 'Updated Successfully!');

        // return redirect('/users/update/' . $user->id);
        return redirect('/users');
        
    }
    




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = user::find($id);
        $user->delete();
        
        // session()->flash('status', 'Deleted Successfully! ');
        session()->flash('message', 'Deleted Successfully! ');

        // Redirect to the List of Users
        return redirect('/users');
    }





}

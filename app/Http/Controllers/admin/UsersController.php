<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\FilesService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Http\Requests\auth\RegisterUserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(2);
        // dd($users->links());
        return view('admin.edite-users')->with(['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterUserRequest $request)
    {
        $this->validate($request,[
            'privilege' => 'required'
        ]);
        $privilege = $request->privilege;
        $attachmentPath = FilesService::storeFile($request);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'adress' => $request->adress,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'countery' => $request->countery,
            'attachment' =>  $attachmentPath,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'privilege' => $request->privilege
        ]);

        session(['message' => 'user added successfully']);
    return redirect()->route('admin.add.users' , Auth::user());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      
        return view('admin.update-user', ['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $fields = $request->getUpdatedFields();

        User::where('id', $id)->update($fields);
        return Back()->with(['message'=>'The user has been updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        // session(['message'=>'The user has been deleted successfully']);
        return Back()->with(['message'=>'The user has been deleted successfully']);
    }
}

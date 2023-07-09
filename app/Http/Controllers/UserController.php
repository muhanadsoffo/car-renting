<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function alluser()
    {
        //
        $data=User::all();
        return view('admin.user',[
            'data'=>$data
        ]);
    }
    public function adduserindex()
    {

        return view('admin.adduser');
    }

    public function insertuser(Request $request)
    {
        //
        $data=new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect('admin/all-user');

    }
    public function edituser($id)
    {
        $data=User::find($id);
        return view('admin/edituser',[
            'data' => $data
        ]);

    }

    public function updateuser(Request $request, User $user,$id)
    {
        //

        $data= User::find($id);
        if ($data) {
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = $request->password;
            $data->save();
            return redirect('admin/all-user')->with('success', 'User updated successfully.');
        }
    }
    public function deleteuser($id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            $user->delete();
        }

        return redirect()->route('admin.alluser')->with('success', 'User deleted successfully.');
    }

}

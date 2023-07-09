<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index(){

        $data=Message::all();
        return view('admin.message.index',[

            'data'=>$data
        ]);
    }

    public function reply(Request $request,$id,$userId){

        $data=Message::find($id);
        $userdata = User::find($userId);
        $data->reply = $request->input('reply');
        $data->status = 'replied';
        $data->save();
        return view('admin.message.reply',[
            'data'=>$data,
            'userdata'=>$userdata
        ]);

    }

    public function show($id)
    {
        //
        $data=Message::find($id);
        if($data->status=='new'){
            $data->status = 'seen';
            $data->save();
        }

        return view('admin.message.show',[
            'data'=>$data
        ]);

    }

    public function destroy($id)
    {
        //
        $data = Message::find($id);
        $data->delete();
        return redirect('admin/message');
    }

}

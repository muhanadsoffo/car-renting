<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //

    public function index()
    {

        $data = Reservation::all();
        return view('admin.reservation.index',[
            'data'=>$data
        ]);
    }


    public function show($id)
    {
        $data=Reservation::find($id);

        return view('admin.reservation.approve',[
            'data' => $data

        ]);
    }

    public function update(Request $request,$id)
    {
        $data= Reservation::find($id);
        $data->status = $request->status;
        $data->save();
        return redirect('admin/reservation');

    }


    public function destroy($id)
    {
        $data = Reservation::find($id);
        $data->delete();
        return redirect('admin/reservation');
    }
}

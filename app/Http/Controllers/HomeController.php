<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{



    public function index(){
        $data=Product::limit(6)->latest()->get();
        $category=Category::limit(3)->latest()->get();
        return view('home.index',[

            'data'=>$data,
            'category'=>$category
        ]);
    }

    public function about(){
        return view('home.about');
    }


    public function products(){
        $data=Product::orderBy('created_at', 'desc')->get();
        return view('home.products',
            [
                'data'=>$data

            ]);
    }

    public function detail($pid)
    {
        $user = Auth::user();
        $data = Product::find($pid);
        $images = DB::table('images')->where('productId', $pid)->get();
        $reservation = null;

        if ($user) {
            $reservation = Reservation::where('userId', $user->id)->first();
        }
        return view('home.detail', [
            'data' => $data,
            'images' => $images,
            'reservation' => $reservation
        ]);
    }




    public function searched(Request $request)
    {
        if ($request->search) {
            $searchQuery = $request->input('search');
            $searchedP = Product::where('keywords', 'LIKE', '%' . $request->search . '%')
                ->orWhere('title', 'LIKE', '%' . $request->search . '%')
                ->orWhere('description', 'LIKE', '%' . $request->search . '%')
                ->orWhere('detail', 'LIKE', '%' . $request->search . '%')
                ->get();
            return view('home.searched', [
                'searchedP' => $searchedP,
                'searchQuery' => $searchQuery
            ]);
        }
        else{
            return redirect()->back();
        }
    }

    public function contact(){

        return view('home.contact');
    }

    public function storemessage(Request $request){
        $userId = Auth::id();
        $data=new Message();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->userId = $userId;
        $data->save();

        return view('home.contact');

    }

    public function message(){
        // Retrieve the message with its reply for the authenticated user
        $user = Auth::user();
        $message = Message::where('userId', $user->id)->orderBy('created_at', 'desc')->get();

        return view('home.message', [

            'message' => $message

        ]);
    }

    public  function reservation(Request $request)
    {

        $data = new Reservation();
        $data->userId = Auth::id();
        $data->productId=$request->productId;
        $data->picDate = $request->picDate;
        $data->retDate = $request->retDate;
        $data->phone = $request->phone;
        $data->save();
        return redirect()->route('products');
    }

    public function book(){

        $user=Auth::user();
        $reservation = Reservation::where('userId', $user->id)->first();

        return view('home.book',[

            'reservation'=>$reservation
        ]);

    }
    public function category($categoryTitle){

        $data=Product::whereHas('category', function ($query) use ($categoryTitle) {
            $query->where('title', $categoryTitle);
        })->get();
        return view('home.category',[

            'data'=>$data
        ]);

    }

    public function allcategories(){
        $data=Category::orderBy('created_at', 'desc')->get();
        return view('home.allcategories',
            [
                'data'=>$data

            ]);
    }

}

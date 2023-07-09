<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($pid)
    {
        //
        $product=Product::find($pid);
        $images=DB::table('images')->where('productId',$pid)->get();
        return view('admin.image.index',[
            'product'=>$product,
            'images'=>$images
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$pid)
    {
        //
        $data= new Image();
        $data->productId=$pid;
        $data->title=$request->title;
        if($request->file('image')){
            $data->image=$request->file('image')->store('image');
        }
        $data->save();
        return redirect()->route('admin.image.index',['pid'=>$pid]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pid,string $id)
    {
        $data=Image::find($id);
        if($data->image && Storage::disk('public')-> exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete($id);

        return redirect()->route('admin.image.index', ['pid' => $pid]);
    }
}

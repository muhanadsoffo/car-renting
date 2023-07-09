<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function index()
    {

        $data = Product::all();
        return view('admin.product.index',[
            'data'=>$data
        ]);
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.product.create',[
            'category'=>$category
        ]);
    }

    public function store(Request $request)
    {
        //
        $data=new Product();
        $data->CategoryId = $request->CategoryId;
        $data->userId=0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->detail = $request->detail;
        $data->description = $request->description;
        $data->price = $request->price;
        if($request->file('image')){
            $data->image=$request->file('image')->store('image');
        }
        $data->status = $request->status;
        $data->save();
        return redirect('admin/product');

    }
    public function show($id)
    {
        //
        $data=Product::find($id);
        return view('admin.product.show',[
            'data'=>$data
        ]);

    }
    public function edit($id)
    {
        //
        $data=Product::find($id);
        $datalist=Category::all();
        return view('admin/product/edit',[
            'data' => $data,
            'datalist'=>$datalist
        ]);
    }


    /**
     * Update the specified resource in storage.
     * @param \App\Models\Product $product
     */
    public function update(Request $request, Product $product,$id)
    {
        //
        $data= Product::find($id);
        $data->userId=0;
        $data->CategoryId = $request->CategoryId;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->detail = $request->detail;
        $data->description = $request->description;
        $data->price = $request->price;
        if($request->file('image')){
            $data->image=$request->file('image')->store('image');
        }
        $data->status = $request->status;
        $data->save();
        return redirect('admin/product');

    }

    public function destroy(Product $product,$id)
    {
        //
        $data = Product::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/product');
    }
}

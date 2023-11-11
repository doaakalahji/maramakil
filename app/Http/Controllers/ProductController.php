<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(5);

        return view("dashboard.dashboard" , ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.add_product");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required|min:2|max:100',
            'price' => 'required',
            // 'description'=> 'required',
            // 'image'=> 'required',
        ]);
        if ($request->hasFile('image')) {
            $image          = $request->file('image');
            $imageName   = uniqid().'-'.$request->name.'.'.$image->getClientOriginalExtension();
            // $location       = public_path('/img');
            $image->move(\public_path("img/"),$imageName);
      
        }
    //    if($request->hasFile("image")){
    //       $file=$request->file("image");
    //       $imageName=$file->getClientOriginalName();
    //       $file->move(\public_path("img/"),$imageName);
    //    }
    //      $name = $request->file('img_path')->getClientOriginalName();
    //      $path = $request->file('img_path')->store('public/images');
          $product = new Product([
              "name" =>$request->name,
              "price" =>$request->price,
              "description" =>$request->description,
              "image" => $imageName ?? "",
          ]);
          
         if($product->save()){
            return redirect()->back()->with('message',"Save Successfully");
         }
          
        else {
          return redirect()->back()->with('failed',"Failed Save");
          }
        //   return json_encode(['res'=>'success']);
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where("id" , $id)->first();
        // dd($product);
        return view("dashboard.add_product" , ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|min:2|max:100',
            'price' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image          = $request->file('image');
            $newImageName   = uniqid().'-'.$request->name.'.'.$image->getClientOriginalExtension();
            $location       = public_path('/img');
            $OldImage       = public_path('img/'.$product->image); #new
            $image->move($location, $newImageName);
            unlink($OldImage); #new
        }else {
            $newImageName   = $request->image;
        }


        // $file=$request->file("image");
        // $imageName=$file->getClientOriginalName();
        // $file->move(\public_path("img/"),$imageName);
    
        $product->fill(
            [
                "name" =>$request->name,
                "price" =>$request->price,
                "description" =>$request->description,
                "image" => $newImageName,
            ]
        );
    
        // $product->lecturers()->sync($request->lecturer_id);
    
        $product->save();

        return redirect()->back()->with('message',"Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $product = Product::where("id" , $id)->first();
        if($product->delete()){
            return redirect()->back()->with('message',"Product Deleted Successfully");
        }
    }
}

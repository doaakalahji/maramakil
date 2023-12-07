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
        // $products = Product::paginate(5);

        // return view("dashboard.dashboard" , ["products" => $products]);
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
            'name_en' => 'required|min:2|max:100',
            'name_ar' => 'required|min:2|max:100',
            'name_tr' => 'required|min:2|max:100',
            'price' => 'required',
            // 'description'=> 'required',
            // 'image'=> 'required',
        ]);
        if ($request->hasFile('image')) {
            $image          = $request->file('image');
            $imageName      =   uniqid().'.'.$image->getClientOriginalExtension();
            // $imageName   = uniqid().'-'.$request->name.'.'.$image->getClientOriginalExtension();
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
              "name_en" =>$request->name_en,
              "name_ar" =>$request->name_ar,
              "name_tr" =>$request->name_tr,
              "price" =>$request->price,
              "description_en" =>$request->description_en,
              "description_ar" =>$request->description_ar,
              "description_tr" =>$request->description_tr,
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

    public function manageProducts(){
        $countProducts = Product::count();
        $products = Product::paginate(6);
        return view("dashboard/manage_products" , ["products" => $products, "countProducts" => $countProducts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where("id" , $id)->first();
        // dd($product);
        return view("dashboard.edit_product" , ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name_en' => 'required|min:2|max:100',
            'name_ar' => 'required|min:2|max:100',
            'name_tr' => 'required|min:2|max:100',
            'price' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image          = $request->file('image');
            $newImageName   = uniqid().'.'.$image->getClientOriginalExtension();
            $location       = public_path('/img');
            $OldImage       = public_path('img/'.$product->image); //new
            $image->move($location, $newImageName);
            unlink($OldImage); //new
        }else {
            $newImageName   = $request->image;
        }


        // $file=$request->file("image");
        // $imageName=$file->getClientOriginalName();
        // $file->move(\public_path("img/"),$imageName);

        $product->fill(
            [
                "name_en" =>$request->name_en,
                "name_ar" =>$request->name_ar,
                "name_tr" =>$request->name_tr,
                "price" =>$request->price,
                "description_en" =>$request->description_en,
                "description_ar" =>$request->description_ar,
                "description_tr" =>$request->description_tr,
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

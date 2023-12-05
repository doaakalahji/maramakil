<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProductSiteController extends Controller
{
    public function getAllProducts(){
        $products = Product::paginate(6);
        return view("pages.products" , ["products" => $products]);
    }

    public function showProduct($id) {
        $product = Product::where("id" , $id)->first();
        $comments = Comment::where("product_id" , $id)->orderByDesc("created_at")->paginate(2);
        $comments_count = Comment::where("product_id" , $id)->count();
        $profile = Profile::first();

        return view("pages.product_info" ,
         ["product" => $product , "comments" => $comments ,
          "comments_count" => $comments_count , "profile" => $profile]);
    }

    public function newestProducts(){
        $products = Product::orderBy('created_at','DESC')->get()->take(4);
        return view("pages.product_owner_profile" , ["products" => $products]);
    }
    public function saveComment(Request $request){
        $data = $request->validate([
            'product_id' => 'required',
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|max:100',
            'comment' => 'required|min:2|max:100',
        ]);
        // dd($request->all());
          $comment = new Comment([
              "product_id" =>$request->product_id,
              "name" =>$request->name,
              "email" =>$request->email,
              "comment" =>$request->comment,
          ]);

         if($comment->save()){
            return redirect()->back()->with('message',"Save Successfully");
         }

        else {
          return redirect()->back()->with('failed',"Failed Save");
          }

    }

    public function saveReplyComment(Request $request , $product_id , $comment_id){
    //    dd($comment_id);
       $comment = Comment::where("product_id" , $product_id)->
       where("id" , $comment_id)->first();
       $comment->fill(
        [
            "reply" => $request->reply,
        ]
    );

    // $product->lecturers()->sync($request->lecturer_id);

    $comment->save();

    return redirect()->back()->with('message',"Updated Successfully");
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDataDashboard(){
        $products = Product::all();
        $comments = Comment::all();
        $messages = Contact::all();
        $recentComments = Comment::orderBy('created_at','DESC')->get()->take(4);
        $recentMessages = Contact::orderBy('created_at','DESC')->get()->take(4);
        return view("dashboard/dashboard" , ["products" => $products, "comments" => $comments, "messages" => $messages, "recentComments" => $recentComments, "recentMessages" => $recentMessages]);
    }

    public function showMessages()  {
        $messages = Contact::paginate(5); 
        $countMessages = Contact::count();
        return view("dashboard.show_messages" , ["messages" => $messages, "countMessages" => $countMessages ]);
    }
}

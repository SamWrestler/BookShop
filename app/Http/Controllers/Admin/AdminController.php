<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $items = Post::all();
        return view('admin.index' , [
            'items' => $items,
        ]);
    }
    public function store(Request $request){
//        return response()->json(['message' => 'Item saved']);
//        $validated_data = $request->validate([
//            'title' => ['string' ,'required'],
//            'subject' => ['string' , 'required'],
//            'description' => ['string', 'required'],
//            'type' => ['required'],
//            'price' => ['required'],
//            'quantity' => ['required']
//        ]);

        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'subject' => ['required'],
            'description' => ['required'],
            'type' => ['required'],
            'price' => ['required'],
            'quantity' => ['required']
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()]);
        }
        Post::create([
            'title' => $request->title,
            'subject' => $request->subject,
            'description' => $request->description,
            'type' => $request->type,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        return response()->json(['success' => 'پست مورد نظر با موفقیت ساخته شد']);
    }
}

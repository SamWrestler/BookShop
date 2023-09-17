<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

    public function create_admin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'number' => ['required'],
            'type' => ['required'],
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()]);
        }
        return response()->json(['success' => 'پست مورد نظر با موفقیت ساخته شد']);

    }
}

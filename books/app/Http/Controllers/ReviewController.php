<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;

class ReviewController extends Controller
{
public function index()
{

// ==========ここから編集する==========
        $reviews = Review::where('status', 1)->orderBy('created_at', 'DESC')->paginate(9);
// ==========ここまで追加する==========

// ==========ここから編集する==========
    return view('index', compact('reviews'));
// ==========ここまで編集する==========

}

public function show($id)
{
    $review = Review::where('id', $id)->where('status', 1)->first();

    return view('show', compact('review'));
}


public function create()
    {
        return view('review');
    }
    
    public function store(Request $request)
    {
        $post = $request->all();
    
    
    // ==========ここから追加する==========
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
        'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
// ==========ここまで追加する==========
        
     if ($request->hasFile('image')) {
        $request->file('image')->store('/public/images');
        $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body'], 'image' => $request->file('image')->hashName()];
        
        // ==========ここから追加する==========
        } else {
              $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body']];
        }
        // ==========ここまで追加する==========


        Review::insert($data);
        
// ==========ここから編集する==========
        return redirect('/')->with('flash_message', '投稿が完了しました');
// ==========ここまで編集する==========

        return redirect('/');
    }
}

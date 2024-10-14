<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;  // Assuming Post model exists
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // Overeni prispevku 
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'main_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Nahrani nahledove fotky
        $mainPhotoPath = $request->file('main_photo') ? $request->file('main_photo')->store('photos', 'public') : null;

        // Nahrani dalsich fotek 
        $additionalImages = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $additionalImages[] = $image->store('photos', 'public');
            }
        }

        // Vytvoreni postu
        Post::create([
            'admin_id' => auth()->user()->id,  
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'main_photo' => $mainPhotoPath,
            'images' => json_encode($additionalImages),  
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.dashboard')->with('success', 'Post created successfully!');
    }
}


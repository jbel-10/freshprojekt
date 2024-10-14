<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // Over request
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'main_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Nahrani hlavni fotky
        $mainPhotoPath = $request->file('main_photo') ? $request->file('main_photo')->store('photos', 'public') : null;

        // Nahrani fotek patricich k clanku
        $additionalImages = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $additionalImages[] = $image->store('photos', 'public');
            }
        }

        // Vyvoreni postu
        Post::create([
            'admin_id' => auth()->user()->id, 
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'main_photo' => $mainPhotoPath,
            'images' => json_encode($additionalImages),
        ]);

        // Presmerovani po pridani prispevku
        return redirect()->route('admin.dashboard')->with('success', 'Post created successfully!');
    }
}

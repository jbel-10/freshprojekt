<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Illuminate\Support\Facades\Auth;

class PostController extends Controller

{

    public function fotkyzcest()
    {
        // Fetch all posts to get the additional images from all posts
        $allPosts = Post::all();
        $allImages = [];
    
        foreach ($allPosts as $post) {
            if ($post->images) {
                // Decode the JSON array of images
                $images = json_decode($post->images);
                foreach ($images as $image) {
                    $allImages[] = $image;
                }
            }
        }
    
        // Shuffle the images array to get a random order
        shuffle($allImages);
    
        // Take the first 9 random images
        $selectedImages = array_slice($allImages, 0, 9);
    
        // Return the view with the selected images
        return view('pages.index', compact('selectedImages'));
    }
    


    public function index()
    {
    // Get the latest 9 posts
    $posts = Post::orderBy('created_at', 'desc')->take(9)->get();

    // Return view with the posts
    return view('pages.index', compact('posts'));
    }


    public function show($category, $id)
    {
        // Vyhledani postu podle kategorie
        $post = Post::where('id', $id)->where('category', $category)->firstOrFail();

        // Vraceni postu pro view
        return view('pages.post', compact('post', 'category'));
    }

    public function category($category)
    {
        // Ziskani postu pro danou kategorii
        $posts = Post::where('category', $category)->orderBy('created_at', 'desc')->paginate(10);

        // Ukazani postu
        return view('pages.category', compact('posts', 'category'));
    }

    public function store(Request $request)
    {
        // Overeni prispevku 
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'main_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'content' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
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
            'admin_id' => session('admin_id'),
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'main_photo' => $mainPhotoPath,
            'images' => json_encode($additionalImages),  
        ]);

        // Redirect back with a success message
        return redirect()->route('pages.admindashboard')->with('success', 'Post created successfully!');
    }
}


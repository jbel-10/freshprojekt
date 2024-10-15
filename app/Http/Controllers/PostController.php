<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostController extends Controller

{

    public function fotkyzcest()
    {
        // Vem vsechny fotky v additional images
        $allPosts = Post::all();
        $allImages = [];
    
        foreach ($allPosts as $post) {
            if ($post->images) {
                
                // Dekoduj z JSON formatu
                $images = json_decode($post->images);
                foreach ($images as $image) {
                    $allImages[] = $image;
                }
            }
        }
    
        // Zamichej fotky
        shuffle($allImages);
    
        // Vem prvnich devet ze seznamu
        $vybraneFotky = array_slice($allImages, 0, 9);
    
        // Vrat view a zobraz je na strance
        return view('pages.index', compact('vybraneFotky'));
    }
    


    public function index()
    {
    // Vyhledej 9 nejnovejsich postu
    $posts = Post::orderBy('created_at', 'desc')->take(6)->get();

    // Vrat view
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
        $posts = Post::where('category', $category)->orderBy('created_at', 'desc')->paginate(9);

        // Ukazani postu
        return view('pages.category', compact('posts', 'category'));
    }

    public function store(Request $request)
    {
        try {
            // Overeni requestu
            $request->validate([
                'title' => 'required|string|max:255',
                'category' => 'required|string',
                'main_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
                'content' => 'required|string',
            ]);
    
            // Nahraj nahledovou fotku
            $mainPhotoPath = $request->file('main_photo') ? $request->file('main_photo')->store('photos', 'public') : null;
    
            // Nahraj dalsi fotky
            $additionalImages = [];
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $additionalImages[] = $image->store('photos', 'public');
                }
            }
    
            // Vytvor prispevek
            Post::create([
                'admin_id' => session('admin_id'),
                'title' => $request->title,
                'category' => $request->category,
                'content' => $request->content,
                'main_photo' => $mainPhotoPath,
                'images' => json_encode($additionalImages),  
            ]);
    
            // Pokud vse probehlo spravne, potvrd
            return redirect()->back()->with('success', 'Prispevek byl uspesne vytvoren!');

        } catch (\Exception $e) {

        // Pokud nastane chyba, ukaz ji na screenu
        return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

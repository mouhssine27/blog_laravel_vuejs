<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $postsFindPremuim =DB::table('categories')
        ->join('posts','category_id', '=', 'categories.id')
        ->where('published',1)->where('premuim',1)->first();
    
        // $nomCategoriePremuim =   $postsFindPremuim->name_en;
        // $photoCategoriePremuim =   $postsFindPremuim->photo;
       
        $posts = DB::table('categories')
        ->join('posts','category_id', '=', 'categories.id')
        ->where('published',1)->where('premuim',0)
        ->limit(10)->get();

        foreach ($posts as $post) {
            $createdAt = Carbon::parse($post->created_at);
            $formattedCreatedAt = $createdAt->diffForHumans();
        }

        $postsPremuim= Post::where('published',1)->where('premuim',1)->latest()->get();
        
        $categoriesgrips = Category::with('posts')->get();
     
    
        return view('Home',array('formattedCreatedAt'=>$formattedCreatedAt,'categoriesgrips'=>$categoriesgrips,'posts'=>$posts,'postsPremuim'=>$postsPremuim ,'categoriesgrips'=>$categoriesgrips) );
    }

    public function postsByCategory(Category $category){
        $posts = $category->posts()->get();
        return view('home',compact('posts', 'category'));
    }

    public function changeLang($lang){
        session()->forget('lang');
        session()->put('lang',$lang);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Circle;
use App\Models\Image;
use App\Models\Statistic;
use App\Models\Latestnew;
use App\Models\Gallery;
use App\Models\Tribe;
use App\Models\Footer;
use App\Models\Leader;
use App\Models\Contact;
use App\Models\Post;

class MainController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        $sliders = Slider::all();
        $cricles = Circle::all();
        $images = Image::all();
        $statistics = Statistic::all();
        $latestnews = Latestnew::all();
        $galleries = Gallery::all();
        $tribes = Tribe::all();
        $footers = Footer::all();
        return view('index', compact('categories', 'sliders', 'cricles', 'images','statistics','latestnews','galleries', 'tribes', 'footers'));
    }

    public function leader()
   {
    $footers = Footer::all();
    $leaders = Leader::all();
    return view('menu.leader', compact('footers', 'leaders'));
   }

   public function news()
   {
    $footers = Footer::all();
    // $posts = Post::paginate(1);
    $posts = Post::limit(10)->latest()->get();
     return view('menu.news', compact('footers','posts'));
   }

   public function contact()
   {
    $footers = Footer::all();
    $contacts = Contact::all();
    return view('menu.contact', compact('footers', 'contacts'));
   }

   public function picture()
   {
    $galleries = Gallery::all();
     $footers = Footer::all();
     return view('menu.picture', compact('footers','galleries'));
   }
}

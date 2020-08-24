<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MenusCollection;
use App\Submenu;
use App\Menu;

class SubmenuController extends Controller
{
    public function index(){
        $submenus = Submenu::latest()->get();
        return json_encode($submenus);
        // return new PostsCollection(Post::with(['submenu'])->get());
    }
}

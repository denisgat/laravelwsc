<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MenusCollection;
Use App\Menu;

class MenuController extends Controller
{
    public function index ()
    {
        return new MenusCollection(Menu::with(['submenu'])->get());
    }
}

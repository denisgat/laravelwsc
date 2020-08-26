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

    public function update(Request $request, $id){

        $input = ($request->all() == null ? json_decode($request->getContent(), true) : $request->all());

        $menu = Menu::find($id);
        $menu->header = $input['menuheader'];
        $menu->body = $input['menubody'];
        $menu->save();

        return new MenusCollection(Menu::with(['submenu'])->get());
    }
}

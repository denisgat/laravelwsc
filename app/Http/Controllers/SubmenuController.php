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
        
    }

    public function update(Request $request, $id){
        $input = ($request->all() == null ? json_decode($request->getContent(), true) : $request->all());
        
        $submenu = Submenu::find($id);
        $submenu->header = $input['submenuheader'];
        $submenu->body = $input['submenubody'];
        $submenu->save();

       return new MenusCollection(Menu::with(['submenu'])->get());

    }
}


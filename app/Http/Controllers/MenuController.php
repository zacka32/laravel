<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Submenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function mainmenu() {
 		$mainmenu = Menu::where('aktif', 'Y')->orderBy('urutan')->get();
 		// $submenu = Menu::where('id_main', 'Y')->orderBy('urutan')->get();
 		return view('layouts.media', ['list_menu' => $mainmenu]);
    }
}

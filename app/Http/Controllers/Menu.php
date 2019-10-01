<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    function get_menu_child() {
    	$menu = \App\Menu::where('id_main', $parent)->get();
    	$parent = \App\Menu::where('id_sub', $parent)->first();
    	echo "";
    }
}

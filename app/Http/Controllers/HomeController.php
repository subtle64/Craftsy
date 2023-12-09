<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            "Accessories",
            "Bags",
            "Keychain",
            "Plushies",
            "Others",
        ];

        $query = "SELECT items.id, items.name, image_path, price, ROUND(IFNULL(AVG(rating), 0), 2) AS 'rating' FROM Items LEFT JOIN reviews ON reviews.item_id = items.id GROUP BY items.id ORDER BY 'rating'";

        $items = DB::select($query);
        
        return view('home', compact('categories', 'items'));
    }


    public function about() {
        return view('about');
    }
}

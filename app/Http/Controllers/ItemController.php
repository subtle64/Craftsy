<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class ItemController extends Controller
{
    public function search(Request $request) {
        $heading = "Search results for: ";
        $search = $request->search;
        $items = DB::select("SELECT items.id, items.name, image_path, price, ROUND(IFNULL(AVG(rating), 0), 2) AS 'rating' FROM Items  LEFT JOIN reviews ON reviews.item_id = items.id WHERE items.name LIKE '%$search%' GROUP BY items.id");
        $error = count($items) == 0 ? 'No items matched your search.' : '';
        return view('search', compact('items', 'error', 'search', 'heading'));
    }

    public function view(Item $item) {
        $items = DB::select("SELECT items.id, items.name, type, stock, image_path, price, ROUND(IFNULL(AVG(rating), 0), 2) AS 'rating' FROM Items LEFT JOIN reviews ON reviews.item_id = items.id WHERE items.id LIKE $item->id GROUP BY items.id");
        $items = $items[0];
        $shop= $item->shop;
        return view('detail', compact('items', 'shop'));
    } 

    public function more_like_this(Request $request) {
        $heading = "Category: ";
        $type = $request->type;
        $search = $type;
        $items = DB::select("SELECT items.id, items.name, image_path, price, ROUND(IFNULL(AVG(rating), 0), 2) AS 'rating' FROM Items  LEFT JOIN reviews ON reviews.item_id = items.id WHERE items.type LIKE '%$type%' GROUP BY items.id");
        $error = count($items) == 0 ? 'No items matched your search.' : '';
        return view('search', compact('items', 'error', 'search', 'heading'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request) {
        // dd($request);
        $id = $request->id;
        $quantity = $request->quantity;
        $operation = $request->operation;
        if($operation == '-') {
            if ($quantity > 1)
                Cart::where('id', $id)->decrement('quantity');
            else
                Cart::where('id', $id)->delete();
        }
        else if ($operation == '+') {
            Cart::where('id', $id)->increment('quantity');
        }

        return redirect()->back();
    }

    public function store(Request $request) {

        $result = Cart::where('user_id', Auth::user()->id)->where('item_id', $request->id)->get()->first();
        if ($result) {
            Cart::where('id', $result->id)->increment('quantity');
        } else {
            Cart::create([
                "user_id" => Auth::user()->id,
                "quantity" => 1,
                "item_id" => $request->id,
            ]);
        }
        
        return redirect()->back()->with('info', 'Added item to card');
    }

    public function show() {
        $cart = Cart::where('user_id', Auth::user()->id)->join('items', 'items.id', '=', 'carts.item_id')->join('shops', 'shops.id', '=', 'items.shop_id');
        $result = $cart->get([
            'carts.id as id',
            'items.name as item_name',
            'image_path',
            'shops.name as shop_name',
            'price',
            'quantity',
        ]);

        $total = $result->sum(function ($col) {
            return $col->quantity * $col->price;
        });

        return view('cart', compact('result', 'total'));
    }
}

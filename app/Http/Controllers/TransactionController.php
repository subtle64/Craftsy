<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function checkout() {
        $result = Cart::where('user_id', Auth::user()->id)->join('items', 'items.id', '=', 'carts.item_id');
        $result = $result->get([
            'items.name as item_name',
            'image_path',
            'price',
            'quantity',
        ]);
        return view('checkout', compact('result'));
    }

    public function store(Request $request) {
        $details = Cart::where('user_id', Auth::user()->id)->get();

        foreach ($details as $i) {
            Transaction::create([
                'user_id' => Auth::user()->id,
                'item_id' => $i->item_id,
                'qty' => $i->quantity,
                'date' => Carbon::now()->toDateString(),
            ]);
            Cart::where('id', $i->id)->delete();
        }

        return redirect('/home');
    }

    public function history() {
        $result = Transaction::where('user_id', Auth::user()->id)->get();
        return view('history', compact('result'));
    }
}

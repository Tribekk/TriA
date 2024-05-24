<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderList;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function add($id)
    {
        if (OrderList::where('product_id', '=', $id)->Where('user_id', '=', auth()->user()->id)->exists()) {
            $orderList = OrderList::where('product_id', '=', $id)->Where('user_id', '=', auth()->user()->id)->first();
            $colvo = $orderList->colvo;
            $colvo++;
            $orderList->update([
                'colvo' => $colvo
            ]);
        } else {
            OrderList::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id
            ]);
        }
        return redirect()->route('user.product');
    }

    public function show()
    {
        $sum=0;
        $orders = OrderList::where('user_id', '=', auth()->user()->id)->get();
        foreach ($orders as $order) {
            $sum += ($order->products->price) * ($order->colvo);
        }
        return view('user.order', compact('orders', 'sum'));
    }

    public function plus ($id)
    {
        $product = Product::find($id);
        $orderList = OrderList::where('user_id', '=', auth()->user()->id)->where('product_id', '=', $product->id)->first();
        $value = $orderList->colvo;
        $value++;
        $orderList->update([
            'colvo' => $value
        ]);
        return redirect()->route('cart');
    }

    public function minus ($id)
    {
        $product = Product::find($id);
        $orderList = OrderList::where('user_id', '=', auth()->user()->id)->where('product_id', '=', $product->id)->first();
        $value = $orderList->colvo;
        $value--;
        if($value>0)
        {
            $orderList->update([
                'colvo' => $value
            ]);
        }
        else
        {
            $orderList->delete();
        }
        return redirect()->route('cart');
    }

    public function delete ($id)
    {
        OrderList::find($id)->delete();
        return redirect()->route('cart');
    }

    public function create (Request $request)
    {
        $i=1;
        $sum=0;
        $body='';
        $request->validate([
           'email' => 'email|required|max:255'
        ]);
        $cart =  OrderList::where('user_id', '=', auth()->user()->id)->get();
        foreach ($cart as $order) {
            $sum += ($order->products->price) * ($order->colvo);
            $body .= $i .') '. $order->products->name . ' '. $order->colvo .' '. $order->products->measurement . '|||||';
            $i++;
        }
        $body .= ' Итого:' . $sum;
        $order = new Order();
        $order->create(
            [
                'name' => auth()->user()->name,
                'email' => $request->email,
                'title' => 'Заявка на покупку, сумма: '. $sum,
                'body' => $body
            ]
        );
        foreach ($cart as $order) {
            $order->delete();
        }
        return redirect()->route('cart')->with('success', 'Заявка создана');
    }
}

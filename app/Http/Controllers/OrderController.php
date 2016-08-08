<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Order;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id','desc')->paginate(30);

        return view('home')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->name = Input::get('name');
        $order->phone = Input::get('phone');
        $order->address = Input::get('address');
        $order->delivery_date = Input::get('delivery_date');
        $order->product_id = Input::get('product_id');
        $order->pay_option = Input::get('pay_option');
        $order->amount = Input::get('amount');
        $order->order_by = Input::get('order_by');

        $order->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);

        return view('show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);

        return view('edit')->with('order',$order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $order->name = Input::get('name');
        $order->phone = Input::get('phone');
        $order->address = Input::get('address');
        $order->delivery_date = Input::get('delivery_date');
        $order->product_id = Input::get('product_id');
        $order->pay_option = Input::get('pay_option');
        $order->amount = Input::get('amount');
        $order->order_by = Input::get('order_by');
        $order->status = Input::get('status');

        $order->update();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();

        return redirect('/');
    }
}

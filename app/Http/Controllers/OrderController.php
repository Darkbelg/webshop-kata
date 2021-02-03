<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //session('cart');
        $order = Order::create([
            'user_id' => auth()->id()
            ]);

            foreach (session('cart') as $key => $value) {
                $order->products()->attach($key, ['quantity' => $value]);
            }

            // Mail::to($request->user())->send(new OrderShipped($order));
            
            session()->forget('cart');

            return redirect(route('orders.show',$order->id))->send('status', __('Order succesfily placed'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('order.show',['order' => $order, 'products' => $order->products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $Order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $Order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $Order)
    {
        //
    }
}

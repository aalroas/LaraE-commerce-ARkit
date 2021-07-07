<?php

namespace App\Http\Controllers\API;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth()->user()->orders;
    return response([ 'orders' => OrderResource::collection($orders), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $data = $request->all();

        $validator = Validator::make($data, [
            'product_id' => 'required',
            'qty' => 'required|max:255',
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $order = new Order;
        $order->user_id = Auth()->user()->id;
        $order->product_id = $request->product_id;
        $order->status = "New";
        $order->qty =  $request->qty;
        $order->total =  $request->qty * $request->price;
        $order->save();

        return response([ 'order' => new OrderResource($order), 'message' => 'Created successfully'], 200);
    }

}
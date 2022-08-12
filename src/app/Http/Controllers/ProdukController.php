<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Agent;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Produk::all();
        return response([
            'success' => true,
            'message' => 'List Semua Posts',
            'data' => $posts
        ], 200);
        
    }


    public function top_produk(){

      $query = OrderDetail::withCount(['product'])
        ->orderBy('id', 'DESC')
        ->limit('10')->get();

      return response([
          'success' => true,
          'message' => 'List top 10',
          'data' => $query
      ], 200);

    }

    public function top_customer(){

      $query = Order::select('name', 'count(1)')->from('product')
        ->join('order_detail', 'product.id', '=', 'order_detail.product_id')
        ->group('product.product_name')->order('count(1)', 'DESC')->limit('10')->get();

      return response([
          'success' => true,
          'message' => 'List top 10',
          'data' => $query
      ], 200);

    }


    public function top_agent(){

      $query = Order::select('name', 'count(1)')->from('product')
        ->join('order_detail', 'product.id', '=', 'order_detail.product_id')
        ->group('product.product_name')->order('count(1)', 'DESC')->limit('10')->get();

      return response([
          'success' => true,
          'message' => 'List top 10',
          'data' => $query
      ], 200);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

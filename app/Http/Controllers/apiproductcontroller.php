<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\input;
use App\Models\review;
use App\Models\bnpl;

class apiproductcontroller extends Controller
{
            //product
            function productlist()
            {
            $data= Product::all();
            return $data;
            }
            function productCreate(Request $req)
            {
                $data= new Product();
                $data->id=$req->input('id');
                $data->name=$req->input('name');
                $data->price=$req->input('price');
                $data->category=$req->input('category');
                $data->description=$req->input('description');
                $data->photo=$req->input('photo');
                $data->save();
                return $data;
            }
            public function productEdit(Request $req)
            {
                $data= new Product();
                $data->exists = true;
                $data->id=$req->input('id');
                $data->name=$req->input('name');
                $data->price=$req->input('price');
                $data->category=$req->input('category');
                $data->description=$req->input('description');
                $data->photo=$req->input('photo');
                $data->save();
                return $data;
                if($data)
                {
                    return response()->json(["Message"=>"Data edited Successfully"]);
                }
                return response()->json(["Message"=>"Data edited Failed"]);

            }
            public function productDelete(Request $req)
            {
                $product = product::where('id',$req->id)->delete();

                if($product)
                {
                    return response()->json(["Message"=>"Data Deletted Successfully"]);
                }
                return response()->json(["Message"=>"Data Deleting Failed"]);
            }




    //cart


        function cartList()
        {
            $data =cart::all();
            return $data;
        }
        function cartListCreate(Request $req)
        {
            $cart= new cart;
            $cart->id=$req->input('id');
            $cart->product_id=$req->input('product_id');
            $cart->user_id=$req->input('user_id');
            $cart->save();
            return $cart;
        }
        public function CartListEdit(Request $req)
        {
            $cart = new cart();
            $cart->exists = true;
            $cart->id = $req->input('id');
            $cart->product_id = $req->input('product_id');
            $cart->user_id = $req->input('user_id');

            if($cart)
            {
                return response()->json(["Message"=>"Data edited Successfully"]);
            }
            return response()->json(["Message"=>"Data edited Failed"]);

        }

        public function CartListDelete(Request $req)
        {
            $cart = cart::where('id',$req->id)->delete();

            if($cart)
            {
                return response()->json(["Message"=>"Data Deletted Successfully"]);
            }
            return response()->json(["Message"=>"Data Deleting Failed"]);
        }


    //order
                function orderList()
                {
                    $data =order::all();
                    return $data;
                }
                function orderCreate(Request $req)
                {
                    $order= new order();
                    $order->id=$req->input('id');
                    $order->product_id=$req->input('product_id');
                    $order->user_id=$req->input('user_id');
                    $order->status=$req->input('status');
                    $order->payment_method=$req->input('payment_method');
                    $order->payment_status=$req->input('payment_status');
                    $order->address=$req->input('address');
                    $order->save();
                    return $order;
                }
                public function OrderEdit(Request $req)
                {
                    $order= new order();
                    $order->exists = true;
                    $order->id=$req->input('id');
                    $order->product_id=$req->input('product_id');
                    $order->user_id=$req->input('user_id');
                    $order->status=$req->input('status');
                    $order->payment_method=$req->input('payment_method');
                    $order->payment_status=$req->input('payment_status');
                    $order->address=$req->input('address');
                    $order->save();

                    if($order)
                    {
                        return response()->json(["Message"=>"order edited Successfully"]);
                    }
                    return response()->json(["Message"=>"order edited Failed"]);

                }

                public function OrderDelete(Request $req)
                {
                    $order = order::where('id',$req->id)->delete();

                    if($order)
                    {
                        return response()->json(["Message"=>"Data Deletted Successfully"]);
                    }
                    return response()->json(["Message"=>"Data Deleting Failed"]);
                }

    //reviews
    function reviewlist()
    {
       $data= review::all();
       return $data;
    }
    function reviewCreate(Request $req)
    {
        $rev= new review();
        $rev->id=$req->input('id');
        $rev->user_id=$req->input('user_id');
        $rev->order_id=$req->input('order_id');
        $rev->details=$req->input('details');
        $rev->save();
        if($rev)
        {
            return response()->json(["Message"=>"review created Successfully"]);
        }
        return response()->json(["Message"=>"review creating Failed"]);
    }

    public function reviewEdit(Request $req)
    {

        $rev= new review();
        $rev->exists = true;
        $rev->id=$req->input('id');
        $rev->user_id=$req->input('user_id');
        $rev->order_id=$req->input('order_id');
        $rev->details=$req->input('details');
        $rev->save();

        if($rev)
        {
            return response()->json(["Message"=>"review edited Successfully"]);
        }
        return response()->json(["Message"=>"review edited Failed"]);

    }

    public function reviewDelete(Request $req)
    {
        $rev = review::where('id',$req->id)->delete();

        if($rev)
        {
            return response()->json(["Message"=>"review Deletted Successfully"]);
        }
        return response()->json(["Message"=>"review Deleting Failed"]);
    }





                //buy now pay later -- bnpl
                function bnpllist()
                {
                $data= bnpl::all();
                return $data;
                }
                function bnplCreate(Request $req)
                {
                    $bnpl= new bnpl();
                    $bnpl->id=$req->input('id');
                    $bnpl->user_id=$req->input('user_id');
                    $bnpl->dewamount=$req->input('dewamount');
                    $bnpl->save();
                    if($bnpl)
                    {
                        return response()->json(["Message"=>"bnpl created Successfully"]);
                    }
                    return response()->json(["Message"=>"bnpl creating Failed"]);
                }

                public function bnplEdit(Request $req)
                {

                    $bnpl= new bnpl();
                    $bnpl->exists = true;
                    $bnpl->id=$req->input('id');
                    $bnpl->user_id=$req->input('user_id');
                    $bnpl->dewamount=$req->input('dewamount');
                    $bnpl->save();

                    if($bnpl)
                    {
                        return response()->json(["Message"=>"bnpl edited Successfully"]);
                    }
                    return response()->json(["Message"=>"bnpl edited Failed"]);

                }

                public function bnplDelete(Request $req)
                {
                    $rev = bnpl::where('id',$req->id)->delete();

                    if($rev)
                    {
                        return response()->json(["Message"=>"bnpl Deletted Successfully"]);
                    }
                    return response()->json(["Message"=>"bnpl Deleting Failed"]);
                }
            }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
    //
    public function pdfOrderGenerate(){
        $userId= Session::get('user')['id'];
        $orders= DB::table('orders')
          ->join('products','orders.product_id','=', 'products.id')
          ->where('orders.user_id',$userId)
          ->get();

        // $orders=order::all();
        $pdf_view= PDF::loadview('PdfMyOrder',compact('orders'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf_view->download('order.pdf');


    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts()
    {
    //     $products = [
    // ["productName" => "Car Alarm Installation", "productPrice" => 15000],
    // ["productName" => "Car Sound Set Up", "productPrice" => 12000],
    // ["productName" => "Troubleshoot Sound System", "productPrice" => 8000],
    // ["productName" => "Car Tinting", "productPrice" => 10000],
    // ["productName" => "Car Check Ups", "productPrice" => 5000],
    // ["productName" => "Car Alarm Malfunction Rescue", "productPrice" => 7000],
    // ["productName" => "Car Head Light Installations", "productPrice" => 9000],
    // ["productName" => "Car Stereo Installation", "productPrice" => 11000],
    // ["productName" => "Troubleshoot Sound System", "productPrice" => 8000],
    // ["productName" => "Car Alarm Installation", "productPrice" => 1232134],
    // ["productName" => "Car Sound Set Up", "productPrice" => 123],
    // ["productName" => "Troubleshoot Sound System", "productPrice" => 8000],
    // ["productName" => "Car Tinting", "productPrice" => 3],
    // ["productName" => "Car Check Ups", "productPrice" => 1],
    // ["productName" => "Car Alarm Malfunction Rescue", "productPrice" => 12],
    // ["productName" => "Car Head Light Installations", "productPrice" => 9000],
    // ["productName" => "Car Stereo Installation", "productPrice" => 11000],
    // ["productName" => "Troubleshoot Sound System", "productPrice" => 123213],
    // ["productName" => "Car Alarm Installation", "productPrice" => 15000],
    // ["productName" => "Car Sound Set Up", "productPrice" => 12000],
    // ["productName" => "Troubleshoot Sound System", "productPrice" => 12345123],
    // ["productName" => "Car Tinting", "productPrice" => 10000],
    // ["productName" => "Car Check Ups", "productPrice" => 5000],
    // ["productName" => "Car Alarm Malfunction Rescue", "productPrice" => 7000],
    // ["productName" => "Car Head Light Installations", "productPrice" => 9000],
    // ["productName" => "Car Stereo Installation", "productPrice" => 11000],
    // ["productName" => "Troubleshoot Sound System", "productPrice" => 8000]
    //     ];

    $showproduct = Product::all();

      // Set the number of items per page (e.g., 9 items per page)
    $perPage = 9;

    // Create a new collection from the services array
    $servicesCollection = new Collection($showproduct);

    // Get the current page from the request query string
    $currentPage = Paginator::resolveCurrentPage();

    // Slice the collection to get the items for the current page
    $currentPageItems = $servicesCollection->slice(($currentPage - 1) * $perPage, $perPage);

    // Create a new LengthAwarePaginator instance
    $pagination = new LengthAwarePaginator($currentPageItems, $servicesCollection->count(), $perPage, $currentPage, [
        'path' => Paginator::resolveCurrentPath(),
    ]);

    // Use Paginator::useBootstrap() to apply Bootstrap styling to the pagination links
    Paginator::useBootstrap();

        return view('product', ['products' => $pagination])->with('showproduct', $showproduct);
    }


    ############ ADD TO CART FUNCTION ###################

   function addToCart(Request $req) {

        if(Auth::check()){

        $cart['user_id'] = $req->user_id;
        $cart['product_id'] = $req->product_id;

        $form = Cart::create($cart);

            if(!$form){

                return redirect()->back()->with('error', 'Not logged in.');

            } else {

                return redirect()->back()->with('success', 'Orders added to cart');
            }

        } else {
            return redirect('/maglogin');
        }

    }

    function cartList() {

        if(Auth::check()){

            $user_id = Auth::id();
            $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $user_id)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

            $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $user_id)
            ->sum('products.price');

            return view('cart', ['products'=>$products, 'total' =>$total])->with('products', $products);

            } else {
                return redirect('/maglogin');
            }
    }

    function removeCart($id) {

        Cart::destroy($id);
        return redirect('cart');
    }

    function orderNow() {

        $user_id = Auth::id();
        $allCart = Cart::where('user_id', $user_id)->get();


        foreach($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status="pending";
            $order->save();
            Cart::where('user_id',$user_id)->delete();
        }

        return redirect ('product');
    }

    function myOrders() {

        $user_id = Auth::id();
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();

        $orderstotal = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)
            ->sum('products.price');

        // $ordersbydate = DB::table('orders')
        //     ->select('*')
        //     ->where('user_id','=',$user_id)
        //     ->where('created_at','=', '2023-09-27')
        //     ->get();

            return view('profile._purchasehistory', ['orders' =>$orders, 'orderstotal' =>$orderstotal])->with('orders', $orders);
    }
}

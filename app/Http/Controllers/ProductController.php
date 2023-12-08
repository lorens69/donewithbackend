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
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\View;

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
    $perPage = 2;

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

    ################### SORT BY CATEGORY FUNCTION #########################

    function sortby1 () {
        $catid = 1;
        $sort1 = DB::table('products')->where('category_id', $catid)->get();
        $perPage = 9;

    // Create a new collection from the services array
    $servicesCollection = new Collection($sort1);

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

        return view('categories.category1', ['products' => $pagination])->with('sort1', $sort1);


    }

    function sortby2 () {
        $catid = 2;
        $sort2 = DB::table('products')->where('category_id', $catid)->get();
        $perPage = 9;

    // Create a new collection from the services array
    $servicesCollection = new Collection($sort2);

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

        return view('categories.category2', ['products' => $pagination])->with('sort2', $sort2);


    }

    function sortby3 () {
        $catid = 3;
        $sort3 = DB::table('products')->where('category_id', $catid)->get();
        $perPage = 9;

    // Create a new collection from the services array
    $servicesCollection = new Collection($sort3);

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

        return view('categories.category3', ['products' => $pagination])->with('sort3', $sort3);


    }

    ############ ADD TO CART FUNCTION ###################

   function addToCart($productId) {

        if(Auth::check()){

            $user_id = Auth::id();

            $existingCartItem = DB::table('cart')
            ->where('uuser_id', $user_id)
            ->where('product_id', $productId)
            ->first();

            if ($existingCartItem) {
                // If the item is already in the cart, increase the quantity
                DB::table('cart')
                    ->where('id', $existingCartItem->id)
                    ->increment('quantity');
            } else {
                // If the item is not in the cart, add it with a quantity of 1
                DB::table('cart')->insert([
                    'uuser_id' => $user_id,
                    'product_id' => $productId,
                    'quantity' => 1,
                ]);
            }

            return redirect()->back()->with('success', 'Orders added to cart');

        } else {
            // return redirect('/maglogin');
            return redirect('/maglogin');
                // return redirect()->back()->with('success', 'Orders added to cart');
        }

    }

    function homeaddToCart($productId) {

        if(Auth::check()){

            $user_id = Auth::id();

            $existingCartItem = DB::table('cart')
            ->where('uuser_id', $user_id)
            ->where('product_id', $productId)
            ->first();

            if ($existingCartItem) {
                // If the item is already in the cart, increase the quantity
                DB::table('cart')
                    ->where('id', $existingCartItem->id)
                    ->increment('quantity');
            } else {
                // If the item is not in the cart, add it with a quantity of 1
                DB::table('cart')->insert([
                    'uuser_id' => $user_id,
                    'product_id' => $productId,
                    'quantity' => 1,
                ]);
            }

            return redirect()->back()->with('success', 'Orders added to cart');

        } else {
            // return redirect('/maglogin');
            return redirect('/maglogin');
                // return redirect()->back()->with('success', 'Orders added to cart');
        }

    }

    function cartList() {

        if(Auth::check()){

            $user_id = Auth::id();
            $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.uuser_id', $user_id)
            ->select('products.*', 'cart.id as cart_id','cart.quantity')
            ->get();

            $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.uuser_id', $user_id)
            ->sum('products.price');

            $totalValue = 0;

            foreach ($products as $product) {
                $totalValue += $product->price * $product->quantity;
            }
            $totalitem = DB::table('cart')->where('uuser_id', $user_id)->sum('quantity');

            return view('cart', ['products'=>$products, 'total' =>$total, 'totalitem'=>$totalitem, 'totalValue'=>$totalValue])->with('products', $products);

            } else {
                return redirect('/maglogin');
            }
    }

    function removeCart($id) {

        Cart::destroy($id);
        return redirect('cart');
    }

    function orderNow() {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the user has a contact number and email
        if (empty($user->contact) || empty($user->email)) {
            return redirect('userdetails')->with('error', 'Please update your contact number and email address before placing an order.');
        }

        // Check if the user has items in the cart
        $user_id = $user->id;
        $allCart = Cart::where('user_id', $user_id)->get();

        if ($allCart->isEmpty()) {
            return redirect('product')->with('error', 'Your cart is empty. Add items to your cart before placing an order.');
        }

        // Process the order
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['uuser_id'];
            $order->status = "pending";
            $order->quantity = $cart["quantity"];
            $order->DO = now();
            $order->save();
        }

        // Clear the cart after placing the order
        Cart::where('uuser_id', $user_id)->delete();

        return redirect('product')->with('success', 'Orders complete, find out more accessories!');
    }

    function myOrders() {
        $user_id = Auth::id();

        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.uuser_id', $user_id)
            ->get();

        $orderstotal = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.uuser_id', $user_id)
            ->sum('products.price');

        // Example: Filtering orders by the current date
        $ordersbydate = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.uuser_id', $user_id)
            ->whereDate('orders.created_at', now()->toDateString()) // Filtering by the current date
            ->get();

        return view('profile._purchasehistory', ['orders' => $orders, 'orderstotal' => $orderstotal, 'ordersbydate' => $ordersbydate]);
    }

    public function increaseQuantity($cartId)
    {
        DB::table('cart')->where('id', $cartId)->increment('quantity');
        return redirect('/cart');
    }

    public function decreaseQuantity($cartId)
    {
        // Add validation to ensure quantity doesn't go below 1
        DB::table('cart')->where('id', $cartId)->decrement('quantity');
        return redirect('/cart');
    }

    public function popularitems()
    {
        $randomItems = DB::table('products')->inRandomOrder()->limit(7)->get();

        return view('home')->with('randomItems', $randomItems);

    }


}

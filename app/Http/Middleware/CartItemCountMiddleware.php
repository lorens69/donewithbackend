<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CartItemCountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            // Retrieve and share the cart item count
            $cartItemCount = Cart::where('user_id', auth()->user()->id)->count();
            view()->share('cartItemCount', $cartItemCount);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\products;
use App\Models\signup;

use Illuminate\Http\Request;

class CtController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function buy()
    {
        return view('buy');
    }
    
    public function checkout()
    {
        return view('checkout');
    }
    

    public function addincart(products $product)
    {
        //return view('productpage');
       $cart=session()->get('cart');
       
        if(!$cart){
        $cart=[
            $product->id=>[
                'name'          =>$product->name,
                'quantity'      =>1,
                'price'         =>$product->price,
                'img'           =>$product->img,
            ]
            ];
            session()->put('cart',$cart);
            return redirect('cart')->with('success',"Added to cart");
        }

        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
            session()->put('cart',$cart);
            return redirect('cart')->with('success',"Added to cart");
        }

        $cart[$product->id]=[
                'name'          =>$product->name,
                'quantity'      =>1,
                'price'         =>$product->price,
                'img'           =>$product->img,
        ];
        session()->put('cart',$cart);
        return redirect('cart')->with('success',"Added to cart");
    }

    // public function changeQty(Request $request, products $product)
    // {
    //     $cart = session()->get('cart');
    //     if ($request->change_to === 'down') {
    //         if (isset($cart[$product->id])) {
    //             if ($cart[$product->id]['quantity'] > 1) {
    //                 $cart[$product->id]['quantity']--;
    //                 return $this->setSessionAndReturnResponse($cart);
    //             } else {
    //                 return $this->removeFromCart($product->id);
    //             }
    //         }
    //     } else {
    //         if (isset($cart[$product->id])) {
    //             $cart[$product->id]['quantity']++;
    //             return $this->setSessionAndReturnResponse($cart);
    //         }
    //     }

    //     return back();
    // }
    public function removecart($id)
    {
        $cart=session()->get('cart');

        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart',$cart);
        }
        return redirect('cart')->with('success',"Removed Successfully");
    }
    public function deletecart()
    {
        if (Session()->has('cart'))
        {
            session()->pull('cart');
            return redirect('/cart');
        }
    }
    public function cartaddress(Request $request)
    {
        //return "<h1 style='color:white;background-color:navy'>Welcome to dashboard</h1>";
        $myData = array();
        if (Session()->has('signup'))
        {
            $myData = signup::where('id',"=", Session()->get('signup'))->first();            
        }
        $my=compact('rec');
         return redirect('buy')->with($my);
        //return view('buy', compact('myData'));
    }
}

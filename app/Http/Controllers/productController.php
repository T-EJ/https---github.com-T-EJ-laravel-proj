<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use PDF;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
             
             
            return view('productupload');
        }
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
        $request->validate([
            'productid'=>'required',
            'name'=>'required',
            'price'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            
            
        ]);
       
        $file=$request->file('img');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/gallery/',$filename);
        $product=new products;
        $product->img=$filename;
        $product->path=$file;
        $product->productid=$request['productid'];
        $product->name=$request['name'];
        $product->price=$request['price'];
        $product->save();

        // return redirect('admin2');
    }

    public function show_gallery()
    {
        $allImages=products::all();
        $myData=compact('allImages');
        return view('pro')->with($myData);
    }
    public function show_gall()
    {
        $allImages=products::all();
        $myData=compact('allImages');
        return view('Products')->with($myData);
    }
 
    public function show_ed()
    {
        $allImages=products::all();
        $myData=compact('allImages');
        return view('pro')->with($myData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $rec=products::where('id',"=",$id)->first();
            return view('updateimg',compact('rec'));
            
        }
    }

    public function del(Request $req)
    {
        
        $data=products::find($req->id)->delete();
        return redirect('pro');
    
    
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, products $products)
    public function update(Request $req)
    {
        
    
        $rec=products::find($req->id);
        $rec->Productid=$req->productid;
        $rec->Name=$req->name;
        $rec->Price=$req->price;
        $rec->img=$req->img;
        $rec->save();
        return redirect('pro');
    
    }
    // -----------------Add to Cart---------------


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
    public function productopen($id)
    {
        $rec=products::where('id',"=",$id)->first();
        return view('Act',compact('rec'));
       
    }




    public function pdf()
    {
        
        $title=products::all();
        $pdf = PDF::loadView('myPDF', ['title'=>$title]);

        return $pdf->stream();
    }
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

    // public function removeFromCart($id)
    // {
    //     $cart = session()->get('cart');

    //     if (isset($cart[$id])) {
    //         unset($cart[$id]);
    //         session()->put('cart', $cart);
    //     }
    //     return redirect()->back()->with('success', "Removed from Cart");
    // }

    // protected function sessionData(products $products)
    // {
    //     return [
    //         'name' => $product->name,
    //         'quantity' => 1,
    //         'price' => $product->price,
    //         'image' => $product->img
    //     ];
    // }

    // protected function setSessionAndReturnResponse($cart)
    // {
    //     session()->put('cart', $cart);
    //     return redirect()->route('cart')->with('success', "Added to Cart");
    // }
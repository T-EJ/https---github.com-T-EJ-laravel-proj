 <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     
    
    </head>

 <section class="vh-100" style="background-color: #fdccbc;">
 
 @if(Session::has('success'))
                <span style="border-radius:20px;padding:2php0px; ">
                    {{Session::get('success')}}
                    </span>
                        @endif
                         

                      
                        
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">Shopping Cart </span></p>

        @php $total=0;@endphp
            @if(session('cart'))
            @foreach(session('cart') as $id=>$product)
            @php  
            $sub_total=$product['price']*$product['quantity'];
            $total += $sub_total;
            @endphp
        <div class="card mb-4">
          <div class="card-body p-4">

            <div class="row align-items-center">
              <div class="col-md-2">
              <img  src="{{asset('upload/gallery/'.$product['img'])}}" width="80px" style="border-radius:20px;"
              class="img-fluid" alt="Generic placeholder image">
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Name</p>
                  <p class="lead fw-normal mb-0">{{$product['name']}}</p>
                </div>
              </div>
              
              
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Quantity</p>
                  <p class="lead fw-normal mb-0">{{$product['quantity']}}</p>
                </div>
              </div>
             
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Price</p>
                  <p class="lead fw-normal mb-0">{{$product['price']}}</p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Total</p>
                  <p class="lead fw-normal mb-0">{{$total}}</p>
                </div>
              </div>

              <div class="col-md-2 d-flex justify-content-center">
          <div>
        <p><a href="{{route('remove',[$id])}}" class="btn btn-warning" style="margin-top:30px;">Remove Product</a></p>
        </div>
              </div>
            </div>

          </div>
        </div>

        
  @endforeach
            @endif
        <div class="card mb-5">
          <div class="card-body p-4">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2">Order total:</span> <span
                  class="lead fw-normal">{{$total}}</span>
              </p>
            </div>

          </div>
        </div>
        
        <div class="d-flex justify-content-end">
          
          <!-- <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>  -->
          <button type="button" class="btn btn-light btn-lg me-2"><a href="/Products" class="btn btn-light  btn-lg me-2" style="border-box=none;" >Continue Shopping</a></button>
          <!-- <button type="button" class="btn btn-primary btn-lg">Buy Now</button> -->
          <a href="/buy" style=" color:white;"> <button class="btn btn-primary btn-leg"  style="text-decoration:none">BUY NOW</a></button>
        
        </div>

      </div>
    </div>

  </div>
 

            
          
</section>
</html>




















 



 
 <!-- <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            body {
                background-image: url('cart1.jpeg');
                background-size: 1440px 860px;
                
  } 
             th{
                background-color:white;
                
                
            } 
            table {
                background-color:white;
                
                
            } 
            .back{
                background-color:#62B6B7;border-radius:5px;color:white;text-decoration:none;padding:10px;
                margin-left:45%;
                margin-top:80px;
            }
            /* .back:hover{
                background-color:#62D6C3;border-radius:5px;color:white;text-decoration:none;padding:10px;
            } */
            </style>
    </head>
<body style="background-color:#EAEAEA">
    

        
    <center><table  style="width:50%;box-shadow:5px 15px 30px grey;margin-top:300px;">
                @if(Session::has('success'))
                <span style="background-color:lightgreen;color:white;border-radius:20px;padding:2php0px; ">
                    {{Session::get('success')}}
                    </span>
                        @endif
           <tr> 
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            
        </tr>
        @php $total=0;@endphp
            @if(session('cart'))
            @foreach(session('cart') as $id=>$product)
            @php  
            $sub_total=$product['price']*$product['quantity'];
            $total += $sub_total;
            @endphp
                <tr>
                <td><img src="{{asset('upload/gallery/'.$product['img'])}}"  width='300px'></td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['quantity']}}</td>
                    <td><a href="{{route('remove',[$id])}}" class="btn btn-warning">REMOVE PRODUCT</a>
                </tr>
                <tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
           

            @endforeach
            @endif
            
            <tr><td><strong>Total: </strong><strong>{{$total}}</strong></td>
            <td>
            <a href="/prod" class="btn btn-warning" >Continue Shopping</a>
            
           
            </td></tr>
    </table></center>
    

</body>
</html> -->
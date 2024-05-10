<!doctype html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body{
        margin: 0;
        font-family: sans-serif;
        background: lightgrey;

    }
    h4{
        text-align: center;
        font-size: 30px;
        margin : 0;
        padding-top: 10px;
    }
    .gallery{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: center;
        align-items: center;
        margin: 50px 0;
        background: ;
    }
    .content{
        width: 30%;
        margin: 15px;
        box-sizing: border-box;
        float:left;
        text-align:center;
        border-radius: 20px;
        cursor: pointer;
        padding-top: 10px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),
        0 10px 10px rgba(0,0,0,0.22);
        transition: .4s;
        background: #f2f2f2;
    }
    .content:hover{
        box-shadow: 0 3px 6px rgba(0,0,0,0.16),
        0 3px 6px rgba(0,0,0,0.23);
        transform: translate(0px, -8px);
    }
    img{
       width: 200px;
       height: 200px;
       text-align: center;  
       margin: 0 auto;
       display: block;
       border-radius: 50px;
    }
    
    p{
        text-align: center;
        color: #b2bec3;
        color: #222f3e;
        margin: 0;
    }
    ul{
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 0;
    }
    li{
        padding-top: 5px;
    }
    .fa{
        font-size: 26px;
        transform: .4s;
        margin: 3px;
    
}
.checked{
    color: #ff9f43;
}
.fa:hover{
    transform: scale(1.3);
    transition: .6s;
}
button{
    text-align: center;
    font-size: 24px;
    color: #fff;
    width: 100%;
    padding-top: 15px;
    border: 0;
    outline: none;
    cursor: pointer;
    margin-top: 5px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
}

.buy-1{
    background: #2183a2;
}


    </style>
</head>
<!-- <body style="background:url('/IMAGES.jpg'); background-repeat: no-repeat; background-size: auto; background-attachment: fixed;"> -->
<body>
    <div class="gallery">
        <div class="content">
        <img src="{{ asset('upload/gallery/'.$rec->img)}}" height='100px' border-radius='60px' width='100px'> 
        <p>Lorem Ipsum is simply dummy text of the printing and typcen unknown printer took a galley of type and scrambled it to make a type specimen book</p>
        <h4 class="text-uppercase" >{{$rec->name}}</h4>
        <h5 class="text-uppercase mb-0" style="color:;"><b>Price:</b>₹{{$rec->price}}</h5>
        <ul>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <button class="buy-1"><a  href="{{url('addincart/'.$rec->id)}}" style="border-box=none; color:white; text-decoration:none;" >Add-To-Cart</a></button>
       
        <!-- <button class="buy-1">Add to Cart</button>   -->
</div>
</div>
</body>
</html>


















<!-- 
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background:url('/1.jpg');   background-size: 100%; background-repeat: no-repeat; background-attachment: fixed;" >
<a href="/cart"  ><img src="/cart.png" style="border-radius: 20px;"   width="30px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="height d-flex justify-content-center align-items-center" style="margin-top:200px">
    
    <div class="card p-3">
        
        <div class="d-flex justify-content-between align-items-center ">
            <div class="mt-2">
                <h4 class="text-uppercase" >{{$rec->name}}</h4>
                <div class="mt-5">
                    <h5 class="text-uppercase mb-0" style="color:green;"><b>Price:</b>₹{{$rec->price}}</h5>
                <br><br>
                    <div class="d-flex flex-row user-ratings">
                        <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        </div>
                        <div class="text-uppercase mb-0" style="width:300px">Look After Me : {{$rec->look}}</div> 
                    </div>
                    
                </div>
                <br><br>
                <div style="width:300px;"><b>Description:</b>&nbsp;&nbsp;{{$rec->desc}} </div>
            </div>
            <div class="image">
            <img src="{{ asset('upload/gallery/'.$rec->img)}}" height='400px' width='400px'> 
            </div>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
            
            <div class="colors">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        </div>
        
        
        
        
        <a  href="{{url('addtocart/'.$rec->masterid)}}" class="btn btn-danger">Add to cart</a>
        <br>
        <a href="/myproduct" class="btn btn-danger">Back</a>
    </div>
    
</div>
</body> -->
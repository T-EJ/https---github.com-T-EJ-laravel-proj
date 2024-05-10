
<!doctype html>
<html>
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
body{
    background: url('https://i.pinimg.com/474x/dd/56/61/dd5661f8122358e2d74869317ebbb774.jpg') no-repeat center;
    /* background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff); */
}
b{
    
}
.gallery{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: center;
        align-items: center;
        margin: 50px 0;
        margin-top: -140px;
        /* background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff); */
        
    }
    .content{
        width: 50%;
        height: 100%;
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
        background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
        /* background: #f2f2f2; */
    }
    .content:hover{
        box-shadow: 0 3px 6px rgba(0,0,0,0.16),
        0 3px 6px rgba(0,0,0,0.23);
        transform: translate(0px, -8px);
    }

    nav {
	display: -webkit-flex;
	background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: space-around;
	align-items: center;
	min-height: 10vh;
	
	
	/* background: #f8f8f8; */
}
.logo {
	/* color: rgb(0, 0, 0); */
	text-transform: capitalize;
	font-size: 24px;
	cursor: pointer;
	font-weight: 900;
	letter-spacing: 1px;
}
.logo span {
	color: deepskyblue;
}
.menu {
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: space-around;
	width: 30%;
	margin-right: 50px;
}
.menu li {
	list-style: none;
}
.menu a {
	color: rgb(255, 255, 255);
	text-decoration: none;
	font-size: 15px;
	padding: 30px;
	font-weight: 600;
	transition: .9s;
}
.menu a:hover {
	letter-spacing: 2px;
}
.bar {
	display: none;
	cursor: pointer;
}
.bar div {
	width: 25px;
	height: 3px;
	background-color: #fff;
	margin: 5px;
	transition: all .5s ease;
}

    </style>
</head>

<body  style=" background-image: url('p.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; ">
 <div class="b">    
<header>
        <nav>
       
       
            <div class="logo">
            <div class="content">   
                <!-- <h1 class="">Welcome </h1> -->
                

            </div>
            <h1 style="margin-left:-140px; color:white;"> Welcome </h1>
            </div>
            <ul class="menu">
            
                <li><a href="/dashboard">  Home</a></li>
                <li><a href="/Products">Products</a></li>
                <!-- <li><a href="#">Portfolio</a></li> -->
                <li><a href="#">Services</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="" style="text-decoration:none;color:white;">Profile</a></li>
               
            </ul>
            <div class="bar">
                <div class="bar-1"></div>
                <div class="bar-2"></div>
                <div class="bar-3"></div>
            </div>
        </nav>
    </header>
<div class="height d-flex justify-content-center align-items-center" style="margin-top:200px;">

    <!-- <div class="card p-3" > -->
        
        <!-- <div class="d-flex justify-content-between align-items-center "> -->
            <!-- <div class="mt-2"> -->
                <div class="gallery">
                <div class="content">
                
            <center>
                <h4 class="text-uppercase" style="font-size:30px;margin-left:20px;" >My Profile</h4><br><br>
                
        
                </center>
                
                <h4 class="text-uppercase" style="font-size:20px;" >Name: {{$rec->Name}}</h4>
                <h4 class="text-uppercase" style="font-size:18px;" >Email:</b>{{$rec->Email}}</h4>
                
                    
                       
                    </div>
                    
                </div>
</div>
</div>
                <br><br>
                
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
        
        
        
        <center><div height="20px">
        <a href="{{url('proedit/'.$rec->id)}}" class="btn btn-primary " style="width:200px ">Update</a>
    
        <a href="/dashboard" class="btn btn-primary" style="width:200px">Back</a></div></center>
    </div>
    
</div>
</div>
</body>
</html>
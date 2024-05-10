<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.container {
  position: relative;
  width: 200px;

}
/* .text_shadows {
font-family: bungee, sans-serif;

  text-transform: uppercase;
  font-size: calc(2rem + 5vw);
  text-align: center;
  margin-right: -40px;
  color: var(--color-primary); */

.image {
  
  width: 200px;
  height: auto;
  
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: relative;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

 .gallery{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: center;
        align-items: center;
        margin: 50px 0;
        margin-top: -140px; */
        /* background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff); */
        
 }
    .content{
        width: 0;
        /* height: 10%; */
        margin: 15px;
        box-sizing: border-box;
        float:left;
        text-align:center;
        border-radius: 20px;
        cursor: pointer;
        padding-top: px;
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
 <table >
     <body style= " background-color:lightgreen;  background-repeat: no-repeat; background-attachment: fixed;" > 
     <header>
        <nav>
       
 
            <div class="logo">
            <div class="content">
                <h2 class="text_shadows" style="color:white;">Welcome</h2> 

            </div>
            </div>
     <ul class="menu">
                  
                  <li><a href="/home2">  Home</a></li>
                  <li><a href="/Products">Products</a></li>
                  <!-- <li><a href="#">Portfolio</a></li> -->
                  <li><a href="#">Services</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li style="text-decoration:none; color:white;">User</li><img src="avatar.jpg" width="50" height="50" style="border:1px solid black; margin-right:-30px;  margin-top:-10px; border-radius:25px;">
                 
              </ul>
</nav>
</header>
            @foreach($allImages as $rec)
                 
            <div  style="display:inline-block; padding:40px;">
                     <a href="{{url('Act/'.$rec->id)}}" class="btn"><img src="upload/gallery/{{$rec->img}}" class="image" height='200px' width='200px' style="border-radius:20px;"></a>
                      
                         
               
                               
                     <p style="color: green;">{{$rec['name']}}</p>
                    <p style="font-size: 20px;">₹{{$rec['price']}}</p>
                    
                    
                        </div> 
            @endforeach
          
</body>
    </table> 
   </html>
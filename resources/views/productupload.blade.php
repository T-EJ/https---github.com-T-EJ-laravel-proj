<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      *{
        font-family:sans-serif;

      }
    .a{
      height: 100%;
      width: 100%;
      background-image: linear-gradient(rgba(0,0,0,0.-4),rgba(0,0,0,0.-4)),url('banner.jpg');
      background-image: url('banner.jpg');
      background-repeat: no-repeat;
      background-position: center;
      /* background-size: cover; */
      position: absolute;

    }
  .box{
     width: 380px;
     height: 400px;
     position: relative;
     margin: 6% auto;
     background: #fff;
     padding: 5px;

  }
  /* .button-box{
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow:0 0 20px 9px #ff61241f;
    border-radius: 30px; 
  } */
  .icons{
    margin: 30px 10px;;
    text-align: center;

  }
  .icons img{
    width: 30px;
    margin-top: 330px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius:50%;
  } 

  .group{
    top: 50px;
    position: absolute;
    width: 280px;
    transition: .5s
  }

  .field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    margin-left: 50px;
    border-left: 0;
    border-right: 0;
    border-top: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;


  }
  .btn-1{
    border-radius: 30px;
    width:85%;
    padding: 10px; 30px;
    cursor: pointer;
    display: block;
    margin-top: -30px;
    margin-left: 70px;
    background: linear-gradient(to right, #ff105f,#ffad06);
    font-family: sans-serif;
    text-align:center;
  }
  .btn{
    border-radius: 30px;
    width:85%;
    padding: 10px; 30px;
    cursor: pointer;
    display: block;
    margin-top: 20px;
    margin-left: 50px;
    background: linear-gradient(to right, #ff105f,#ffad06);
    font-family: sans-serif;
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


<body class="a" >
<header>
        <nav>
       
 
            <div class="logo">
            <div class="content">
                <h2 class="text_shadows" style="color:white;">Welcome</h2> 

            </div>
            </div>
     <ul class="menu">
                  
                    <li><a href='/admin1'>Home</a></li>
                  <li><a href="/Products">Products</a></li>
                  <li><a href="/pro">ProEdit</a></li>
                <li><a href="/excel">Import</a></li>             
                  <li style="text-decoration:none; color:white;">Admin</li><img src="avatar.jpg" width="50" height="50" style="border:1px solid black; margin-right:-30px;  margin-top:-10px; border-radius:25px;">
                 
              </ul>
</nav>
</header>
<form  action="/product" enctype="multipart/form-data" method="post">
  <div class=" box">

    @csrf
        <div class="button-box"> 
        
                  
               <div class="group">
               <div class="btn-1">HeLLO!</div>
                      <input type="text" class="field" id="productid" placeholder="Product Id" name="productid" class="input-box" />
                    
                  
                   
                      <input type="text" class="field" id="name" name="name" placeholder="Product-Name" class="input-box" />
                    
                  
                 
                    
                    
                      <input type="text" class="field" name="price" placeholder="Price" class="input-box" />
                    

                  
                  
                     <input type="file"class="field" name="img"placeholder="Image" class="input-box" />

                     <button  class="btn" type="submit"><a href="x  ">UPLOAD</button></a>
              </div>
                  
        </div>
        <div class="icons">
          <img src="fb.png">&nbsp; &nbsp; &nbsp;
          <img src="tw.png">&nbsp; &nbsp; &nbsp;
          <img src="gp.png">
        </div>    
       
 </div>
                  
                  
       
                 
</form>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</html>
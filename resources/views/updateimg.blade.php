
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="styless.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body 
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
	background: #23242a;
}
.box 
{
	position: relative;
	width: 380px;
	height: 490px;
	background: #1c1c1c;
	border-radius: 8px;
	overflow: hidden;
}
.box::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
	animation: animate 6s linear infinite;
}
.box::after 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
	animation: animate 6s linear infinite;
	animation-delay: -3s;
}
@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}
form 
{
	position: absolute;
	inset: 2px;
	background: #28292d;
	padding: 50px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
h2 
{
	color: #45f3ff;
	font-weight: 500;
	text-align: center;
	letter-spacing: 0.1em;
}
.inputBox 
{
	position: relative;
	width: 300px;
	margin-top: 35px;
}
.inputBox input 
{
	position: relative;
	width: 100%;
	padding: 20px 10px 10px;
	background: transparent;
	outline: none;
	box-shadow: none;
	border: none;
	color: #23242a;
	font-size: 1em;
	letter-spacing: 0.05em;
	transition: 0.5s;
	z-index: 10;
}
.inputBox span 
{
	position: absolute;
	left: 0;
	padding: 20px 0px 10px;
	pointer-events: none;
	font-size: 1em;
	color: #8f8f8f;
	letter-spacing: 0.05em;
	transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span 
{
	color: #45f3ff;
	transform: translateX(0px) translateY(-34px);
	font-size: 0.75em;
}
.inputBox i 
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #45f3ff;
	border-radius: 4px;
	overflow: hidden;
	transition: 0.5s;
	pointer-events: none;
	z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i 
{
	height: 44px;
}
.links 
{
	display: flex;
	justify-content: space-between;
}
.links a 
{
	margin: 10px 0;
	font-size: 0.75em;
	color: #8f8f8f;
	text-decoration: beige;
}
.links a:hover, 
.links a:nth-child(2)
{
	color: #45f3ff;
}
input[type="submit"]
{
	border: none;
	outline: none;
	padding: 11px 25px;
	background: #45f3ff;
	cursor: pointer;
	border-radius: 4px;
	font-weight: 600;
	width: 100px;
	margin-top: 10px;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}
    </style>
</head>
<body>

	<div class="box">
  <form action="{{url('update/'.$rec->id )}}"  method="post" autocomplete="off">
@csrf
			<h2>Update</h2>
      <div class="inputBox">
				<input type="text" name="productid" class="form-control" value="{{$rec->productid}}"" required="required">
				<span>Product Id</span>
				<i></i>
			</div>
			
			
			<div class="inputBox">
      <input type="text" id="name" name="name" class="form-control" value="{{$rec->name}}"/>
      <span>Name</span>
				<i></i>
			</div>
      <div class="inputBox">
      <input type="text"  name="price" class="form-control" value="{{$rec->price}}"/>
      <span>Price</span>
      <i></i>

      </div>

      <div class="inputBox">
      <input  name="img" class="form-control" value="{{$rec->img}}"/>
      <span>Image</span>
      <i></i>
      

     </div>
			
      <input type="submit" value="Update"></input>
	</div>
</body>
</html>















<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<form action="{{url('update/'.$rec->id )}}"  method="post">
@csrf
<div class="d-flex flex-row align-items-center mb-4">
    
                
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"  name="productid" class="form-control" value="{{$rec->productid}}"/>
                      <label class="form-label" for="form3Example3c">Product Id</label>
                    </div>
                  </div>
                  <div class="form-outline flex-fill mb-0">
                      <input type="text" id="name" name="name" class="form-control" value="{{$rec->name}}"/>
                      <label class="form-label" for="form3Example3c">Name</label>
                    </div>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"  name="price" class="form-control" value="{{$rec->price}}"/>
                      <label class="form-label" for="form3Example3c">Price</label>
                    </div>
                    <div class="form-outline flex-fill mb-0">
                      <input  name="img" class="form-control" value="{{$rec->img}}"/>
                      <label class="form-label" for="form3Example3c">Image</label>
                    </div>
                  
                  
                 
                  <button type="submit">Update</button>
</form>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</html> -->
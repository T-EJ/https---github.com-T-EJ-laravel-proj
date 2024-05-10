<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Import CSV File</title>
    <link rel="stylesheet" href="style.css">
    <!---we had linked our css file----->
    <style>
        *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
 .full-page
{
    height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(bg-2.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}
.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
    padding-left: 50px;
    padding-right: 30px;
    padding-top: 50px;
}
nav
{
    flex: 1;
    text-align: right;
}
nav ul 
{
    display: inline-block;
    list-style: none;
}
nav ul li
{
    display: inline-block;
    margin-right: 70px;
}
nav ul li a
{
    text-decoration: none;
    font-size: 20px;
    color: white;
    font-family: sans-serif;
}
nav ul li button
{
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}
nav ul li button:hover
{
    color: aqua;
}
nav ul li a:hover
{
    color: aqua;
}
a
{
    text-decoration: none;
    color: palevioletred;
    font-size: 28px;
}


body{
   

justify-content: center;
align-items: center;
}


label{
padding: 16px 48px;
border: 3px solid #ffc872;
border-radius: 48px;
text-transform: uppercase;
letter-spacing: 2px;
font-weight: bold;
color: #ffc872;
}

label:hover{
transform: scale(1.04);
}

label.active{
background-color: #ffc872;
color: #242424;

}

label span{
 font-weight: normal;
}

.button {
 
  border-radius: 15px  ;
  background-color: #ffc872;

  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {

    /* color: #242424; */
  /* border: 0px solid #4CAF50; */
}
        </style>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="{{route ('import') }}">
    @csrf
    <div class="full-page">
        <div class="navbar">
            <div>
                <!--  -->
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='/admin1'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Import</a></li>
                    <li><a href='/users'>Export</a></li>
                      <li><a href='/users'>Admin</a></li>
                      
                   
                </ul>
            </nav>
           
        </div>
        <span style="margin-left: 1130px;"><img src="avatar.jpg" width="40" height="40" style="border:1px solid black;  margin-right:0px; margin-top:-40px; border-radius:25px;"></span>  
      
                    <center style="margin-top: 150px;">
                    <span >
                        <h1>IMPORT CSV FILE</h1>
                <input type="file" name="file" id="file" hidden>
                <label for="file" id="selector">Select files</label> 
                <label><button class="button button1">DOWNLOAD</button> </label>
                <!-- <label><button class="button1"  >Upload excel file</button>  </label> -->
</span>
</center>
 <div class="btn">
                
                    <!-- <button style="background-color:Black;border-radius:10px;height:50px;width:130px"> <a style="color:White" href="/users">Download User List</a></button>
                    </div> -->
                </div>
                   
                  
                </div>
              
		
            </div>
        </div>
    </div>
    
  

</body>
</html>
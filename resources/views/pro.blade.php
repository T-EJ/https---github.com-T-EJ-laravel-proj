<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table th, td{
            border: 0px solid grey;
  border-radius: 30px;
  padding: 15px;
  text-align: center;
        }
.full-page
{
    height: 100%;
	width: 100%;
	/* background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(bg-2.jpg); */
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
    color: black;
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
    color: black;
    font-size: 28px;
}


body{
   

justify-content: center;
align-items: center;
}
hr.new5 {
  border: 8px solid black;
  border-radius: 5px;
}
        </style>
</head>
<body  style=" background-image: url('bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; ">

<div class="full-page">
        <div class="navbar">
            
            <nav style="    margin-top: -60px;  margin-right: 0px;  font-family: sans-serif;">
                <ul id='MenuItems'>
                    <li><a href='/admin1'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='excel'>Import</a></li>
                    <li><a href='/excel'>Export</a></li>
                    <li><a href='/users'>Admin</a></li><img src="avatar.jpg" width="50" height="50" style="border:1px solid black;  margin-top:-20px; border-radius:25px;">
                   
                </ul>
            </nav>
        </div>
        
<center><table class="table table-hover">
    <tr>
            <!-- <th scope="col">#</th> -->
            <th scope="col" style="color:black;">Product-Id</th>
            <th scope="col" style="color:black;">Name</th>
            <th scope="col" style="color:black;">Price</th>
            <th scope="col" style="color:black;">File</th>
            <th scope="col" style="color:black;">Image</th>
            <th scope="col" style="color:black;">Edit</th>
            <th scope="col" style="color:black;">Delete</th>
            </tr>    
        <tbody>
       
        <hr class="new5">
            @foreach($allImages as $rec)
                <tr>
                    <th scope="col" style="color:black;">{{ $rec->productid }}</th>
                    <th scope="col" style="color:black;">{{ $rec->name }}</th>
                    <th scope="col" style="color:black;">{{ $rec->price }}</th> 
                    <th scope="col" style="color:black;">{{ $rec->img }}</th>
                   
                <td><img src="{{ asset('upload/gallery/'.$rec->img) }}" height='150px' style="border:1px solid-black; border-radius:45px;" width='200px'></td>
                <td><a href="{{url('edit/'.$rec->id)}}">Edit</a></td>
                    <td><a href="{{url('delrec/'.$rec->id)}}">Delete</a></td>
                    

                   
                    
                </tr></center>
            @endforeach
        </tbody>
    </table>
</body>
</html>
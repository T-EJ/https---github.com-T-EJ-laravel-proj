<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table th, td{
            border: px solid grey;
  border-radius: 30px;
  padding: 15px;
  text-align: center;
        }
        </style>
</head>
<body  style=" background-image: url('up.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; ">
    <table style="margin-left: 240px;">
        <tr>
                    
                    <th>Product-ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image Address</th>
                    <th> Image </th>
                    <th> Edit </th>
                    <th> Delete </th>


    </tr>        
        <tbody>
       
            
            @foreach($allImages as $rec)
                <tr>
                    <td>{{ $rec->productid }}</td>
                    <td>{{ $rec->name }}</td>
                    <td>{{ $rec->price }}</td> 
                    <td>{{ $rec->img }}</td>
                   
                <td><img src="{{ asset('upload/gallery/'.$rec->img) }}" height='150px' width='200px'></td>
                <td><a href="{{url('edit/'.$rec->id)}}">Edit</a></td>
                    <td><a href="{{url('delrec/'.$rec->id)}}">Delete</a></td>
                    

                   
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
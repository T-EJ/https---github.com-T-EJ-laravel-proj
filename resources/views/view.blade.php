<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body style=" background-image: url('a7.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; ">
   <!-- <form method="post" enctype="multipart/form-data" action="{{route ('import') }}">
    @csrf -->
    <table class="table table-hover">
       
          
            
                <tr>
            <!-- <th scope="col">#</th> -->
            <th scope="col" style="color:white;">Name</th>
            <th scope="col" style="color:white;">Email</th>
            <th scope="col" style="color:white;">Password</th>
            <th scope="col" style="color:white;">Edit</th>
            <th scope="col" style="color:white;">Delete</th>
            </tr>   
            

            @foreach($allRecords as $data)
            
               <tr>
               
              
                    <td style="font-weight: bold; color:white;">{{$data->Name}}</td>                
                    <td style="font-weight: bold; color:white;">{{$data->Email}}</td>
                    <td style="font-weight: bold; color:white;">{{$data->Pwd}}</td>
                    <td style="font-weight: bold; color:white;"><a href="{{url('editdata/'.$data->id)}}">Edit</a></td>
                    <td style="font-weight: bold; color:white;"><a href="{{url('deldata/'.$data->id)}}">Delete</a></td>
                    
                </tr>
                
               
            
                
             
                
                
                @endforeach
               
                
   
       
            
    </table>
    
    
</body>
</html>



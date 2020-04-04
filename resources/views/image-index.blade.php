<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Manage image table</h2>
      

@if(session('success'))

<p class="alert alert-info">{{session('success')}}</p>
@endif

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th> Image </th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($image as $row)
      <tr>
        <td>{{$row->id}}</td>

            <td> <?php foreach (explode(',',$row->image) as $picture) { ?>
                 <img src="{{asset('/faiz')}}/{{$picture}}" style="height:80px; width:80px"/>
                <?php } ?>
           </td>
       
      
        <td>
          
          <a href="{{route('image.destroy',$row->id)}}" class="btn btn-primary">Delete</a>


        </td>
      </tr>
       @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{-- 
     @if ($errors->any())
         
          @foreach ( $errors->all() as $error)

          <p> {{$error}}</p> 
              
          @endforeach

     @endif --}}
      
     <style>
        .department-error{
            border: 1px solid red;
            color:red
        }
     </style>

    <form action="{{url('roles/store')}}" method="post">
        @csrf
        <div>
            <label for="name">Name</label> <br>
            <input type="text" name="name" value="{{old('name')}}" > <br>
            @error('name')
                <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="department">Department</label> <br>
            <input value="{{old('department')}}" class="@error('department') department-error  @enderror" type="text" name="department"><br>
            
            @error('department')
            <span style="color: red">{{$message}}</span>
             @enderror
           
        </div>
         <div>
            <button type="submit">Submit</button>
         </div>
    </form>
</body>
</html>
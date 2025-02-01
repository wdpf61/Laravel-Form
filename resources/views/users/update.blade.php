<form action="{{url('user/update')}}" method="post">
    @csrf

 <div>
    <label for="name">Name</label><br>
    <input type="text" name="name" id="" value="{{$user[0]->name}}">
    <input type="hidden" name="id" id="" value="{{$user[0]->id}}">
 </div>
 <div>
    <label for="email">email</label><br>
    <input type="text" name="email" id="" value="{{$user[0]->email}}">
 </div>
 <div>
    <label for="phone">phone</label><br>
    <input type="text" name="phone" id="" value="{{$user[0]->mobile}}">
 </div>

  <div>
    <button type="submit">submit</button>
  </div>


</form>
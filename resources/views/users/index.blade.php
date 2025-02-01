
@if (session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif
@if (session('delete'))
<p style="color: red;">{{ session('delete') }}</p>
@endif


<table>
    <tr>
        <th>Name</th>
        <th>email</th>
        <th>mobile</th>
        <th>Action</th>
    </tr>
     
    @foreach ($users as $user)
     
    <tr>
        <th>{{$user->name}}</th>
        <th>{{$user->email}}</th>
        <th>{{$user->mobile}}</th>
        <th> <a href="{{url("user/edit/$user->id")}}">Edit</a> <a href="{{url("user/delete/$user->id")}}">delete</a> <a href="{{url("user/show/$user->id")}}">Show</a></th>
    </tr>
        
    @endforeach

</table>
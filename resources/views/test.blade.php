
@php
      $user=[
         ['id'=>1, 'name'=>'admin'],
         ['id'=>2, 'name'=>'Employee'],
         ['id'=>3, 'name'=>'Hr'],
         ['id'=>4, 'name'=>'Manager'],
      ];
@endphp



<h1>This is test view</h1>
<p>The role id is {{$id}}</p>
<p>The role name is  {{$name}}</p>


<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>


     @foreach ( $roles as  $role)
     <tr>
         <td><?php echo $role['id']?></td>
         <td>{{$role['name']}}</td>
     </tr>
     @endforeach


</table>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>


        @foreach ($roles as $role)
            <tr>
                <td><?php echo $role['id']; ?></td>
                <td>{{ $role['name'] }}</td>
            </tr>
        @endforeach


    </table>


</body>

</html>

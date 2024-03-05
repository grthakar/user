
<!DOCTYPE html>
<html>
<head>
<title>User List</title>
</head>
<body>
<h1>User List</h1>
<button onclick="document.location='/add'">Add new user</button>
    <table border="1px">
        <tr>
          <th>Name</th>
          <th>Contact</th>
          <th>Country</th>
          <th>Action</th>
        </tr>
        @foreach ($info as $infos)

        <tr>
          <td>{{$infos->fname}} {{$infos->lname}}</td>
          <td>{{$infos->mobile}}</td>
          <td>{{$infos->country}}</td>
          <td><a href="edit/{{$infos->id}}">EDIT</a> || <a href="del/{{$infos->id}}">DELETE</a></td>
        </tr>
        @endforeach
      </table>
</body>
</html>

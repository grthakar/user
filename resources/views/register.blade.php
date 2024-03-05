<!DOCTYPE html>
<html>
<head>
<title>Add New User</title>
</head>
<body>
    <h1>Add New User </h1><br>
    <a href="/">Go to Dashboard</a><br><br><br><br>
    @if ($info==NULL && $info=="")


    <form action="{{url('/post')}}" method="POST">
        @csrf
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" value="" placeholder="Please enter your first name"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname" value="" placeholder="Please enter your last name"><br><br>
        <label for="contact">Contact Number:</label>
        <input type="text" id="contat" name="contact" value="" placeholder="Please enter your mobile number"><br><br>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="" placeholder="Please enter your country"><br><br>


        <input type="submit" value="Submit">
      </form>
      @else
      <form action="{{url('/post')}}" method="POST">
        @csrf
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" value="{{$info->fname}}" placeholder="Please enter your first name"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname" value="{{$info->lname}}" placeholder="Please enter your last name"><br><br>
        <label for="contact">Contact Number:</label>
        <input type="text" id="contat" name="contact" value="{{$info->mobile}}" placeholder="Please enter your mobile number"><br><br>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="{{$info->country}}" placeholder="Please enter your country"><br><br>


        <input type="submit" value="Update">
      </form>
      @endif
</body>
</html>

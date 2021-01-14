<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>

<a  href="{{route('home')}}">back</a>
<form method="post" action="">
@csrf
Name:<input type="text" name="name">
email:<input type="text" name="email">
phone:<input type="text" name="phone">
asd:<input type="text" name="created_at">
asd:<input type="text" name="updated_at">
<input type="submit" name="add" href="{{route('home')}}">
</form>
    <body>
</html>

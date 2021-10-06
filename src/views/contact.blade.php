<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1> Contact Us Any Time</h1>
<form action="{{route('allos.contact')}}" method="post">
@csrf
<input type="text" name="name" placeholder="Your Name Please">
<input type="email" name="email" placeholder=" Your Valid Email">
<textarea name="message" id="message" cols="30" rows="10"></textarea>
<br>
<input type="submit" value="Submit">
</form>

</body>
</html>

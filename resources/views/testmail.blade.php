<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testmail</title>
    <form action="{{ route('sendmail') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" id=""></br>
        <input type="text" name="email" placeholder="Email" id=""></br>
        <input type="text" name="phone" placeholder="Phone" id=""></br>
        <input type="submit" value="CREATE CUSTOMER">
    </form>
</head>
<body>
    
</body>
</html>
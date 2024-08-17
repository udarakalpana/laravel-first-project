<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>

    <h1>Welcome</h1>

{{--    <a href="/first-url">Go to the first Blade</a>--}}
    <a href={{ route('myUrl') }}>Go to the first Blade</a>
    <br>
    <a href={{ route('urlWithPara', ['userId' => 32]) }}>URL with para</a>
    <br><br>

    <form action="{{ route('userCreate') }}" method="POST">
        @csrf
        <label>User Name</label>
        <input type="text" name="userName">
        <br><br>

        <label>User Email</label>
        <input type="email" name="userEmail">
        <br><br>

        <button type="submit">Submit</button>
    </form>

<?php

    if (!empty($requestData)) {
        echo $requestData['userName'];
        echo "<br>";
        echo $requestData['userEmail'];
    }

?>

</body>
</html>

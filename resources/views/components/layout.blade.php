<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RuneManagement</title>
    <link rel="icon" href="runemanagement.png">
    <style>
        .image-left {
            float: left;
            margin-right: 20px;
            width: 200px;
        }

        .image-right {
            float: right;
            margin-left: 20px;
            width: 200px;
        }

        .right_header {

            float: right;
        }
    </style>
</head>

<body style="width: 75%; margin:0 auto;">
    <nav>
        <a href="/" style="margin-right: 20px; margin-left: 20px; margin-bottom: 100px; margin-top: 100px;">
            <img src="{{ asset('runemanagement.png') }}" alt="description of myimage" style="width: 60px; height: auto">
        </a>
        <a href="/articles" style="font-size: 40px; margin-left: 50px; color: #000000;">Articles</a>
        <a href="/about" style="font-size: 40px; margin-left: 50px; color: #000000;">About</a>
    </nav>
    {{ $slot }}
</body>

</html>
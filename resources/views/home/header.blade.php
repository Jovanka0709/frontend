<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font/bootstrap-icons.css') }}">
    <style>
        body{
            background-color: #F7F4F2;
        }
        nav{
            background-color: #F7F4F2;
            padding: 20PX;
            box-sizing: border-box;
        }
        header{
            background-color: #F7F4F2;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            justify-content: space-around;
        }
        .dua{
            margin: -7px 0 0 0;
        }
        .dua a{
            text-decoration: none;
            margin: 0 0 0 20px ;
            font-size: 16px;
            color: black;
        }
        a.satu{
            padding: 7px;
            box-sizing: border-box;
            border: 1px solid black;
            background-color: white;
            border-radius: 15px;
            transition: .7s;
        }
        a.satu:hover{
            background-color: #333;
            color: white;
        }
        a.dua{
            padding: 7px;
            box-sizing: border-box;
            color: white;
            background-color: #333;
            border-radius: 15px;
            transition: .7s;
        }
        .bi.bi-cart{
            font-size: 30px;
        }
    </style>
</head>
<body>
        <header>
            <div class="header-satu">
                <h3>JOP-STORE</h3>
            </div>
            <div class="dua">
                <a href="" class="a satu">login</a>
                <a href="" class="a dua">Register</a>
                <a href=""><i class="bi bi-cart"></i></a>
            </div>
        </header>
        <script src="{{ asset('bs/js/bootstrap.bundle.min.js') }}"></script>
        @yield('content')
</body>
</html>
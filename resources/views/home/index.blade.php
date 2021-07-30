@extends('home/header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .container-poster{
                width: 80%;
                display: flex;
                margin: 30px auto;
            }
            .poster-satu{
                width: 60%;
            }
            .poster-satu img{
                width: 100%;
                height: 300px;
            }
            .poster-dua{
                width: 38%;
                margin: 0 0 0 30px;
            }
            .poster-dua img{
                width: 100%;
                height: 208px;
            }
            .text-poster{
                padding: 20px;
                box-sizing: border-box;
                display: flex;
                background-color: #333;
                margin: 25px 0 0 0;
            }
            .text-poster h3{
                font-size: 23px;
                margin: auto;
                color: #fff;
            }
            @media(max-width:900px){
                .poster-dua{
                    display: none;
                }
                .poster-satu{
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <div class="container-poster">
            <div class="poster-satu">
                <img src="{{ asset('img/poster1.jpg') }}" alt="" width="300px">
            </div>
            <div class="poster-dua">
                <img src="{{ asset('img/poster4.jpg') }}" alt="" width="300px">
                <div class="text-poster">
                    <h3>Free Shipping all over indonesia</h3>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection
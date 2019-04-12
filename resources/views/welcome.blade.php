<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IBL Coming Soon</title>
       
        <!-- Styles -->

        <style>
            *{
                margin: 0;
                padding: 0;
            }

            img{
                height: 100vh;
                object-fit: cover;
                width: 100%;
                display: block;
            }

            .bg{
                background: url("img/coming-soon.jpg") center no-repeat;
                height: 100vh;
                background-size: cover;
            }

            @media screen and (max-width: 768px) {
                .bg{
                    background: url("img/mobile-coming-soon.jpg") center no-repeat;
                    height: 100vh;
                    background-size: cover;


                }
            }

        </style>
    </head>
    <body>
        <div class="bg"></div>
    </body>
</html>

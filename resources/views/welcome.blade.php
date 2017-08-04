<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

            <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <h1>BCA Queue</h1>
    <h2>Kantor Cabang Kaliurang</h2>
       

            <div class="content">
                <div class="title m-b-md">
    
   @foreach($region as $data)
            <big><strong>{{$data->kcp_kaliurang->cs_queue->running}}</strong></big> <br>

    <a class="btn btn-success" style="width:80px" title="Next" href="{{ action('getdataController@tambah', $data->kcp_kaliurang->cs_queue->running) }}">Next</a>
      <button class="btn btn-warning" style="width:80px" title="Pending" href="{{ action('getdataController@tambah', $data->kcp_kaliurang->cs_queue->running) }}">Pending</button>
      <a class="btn btn-danger" style="width:80px" title="Reset" href="{{ action('getdataController@reset') }}">Reset</a>
    
    @endforeach
    
                </div>

                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>

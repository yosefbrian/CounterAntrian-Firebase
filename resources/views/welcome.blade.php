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

            th {
               text-align: center;
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

<nav class="navbar navbar-inverse bg-primary" style="background-color: #032d70">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-weight: bold">BCA Queue</a>
    </div>
    <ul class="nav navbar-nav" style="font-weight: bold">
      <li class="active"><a href="#">Queue</a></li>
<!--       <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>



<!-- <div>
    <h1>BCA Queue</h1>
    <h2>Kantor Cabang Kaliurang</h2>
     </div>   -->

<div class="content">
                



    <div class="panel panel-default">
    <div class="panel-heading"><h5>Current</h5></div>
    <div class="panel-body">
       @foreach($region as $data)
           <h1 style="font-size: 250%"><strong>{{$data->kcp_kaliurang->cs_queue->running}}</strong></h1> <br>

        <a class="btn btn-success" style="width:80px" title="Next" href="{{ action('getdataController@tambah', $data->kcp_kaliurang->cs_queue->running) }}">Next</a>
          <button class="btn btn-warning" style="width:80px" title="Pending" href="{{ action('getdataController@tambah', $data->kcp_kaliurang->cs_queue->running) }}">Pending</button>
          <a class="btn btn-danger" style="width:80px" title="Reset" href="{{ action('getdataController@reset') }}">Reset</a>
        @endforeach
        </div>

        </div>
 



<div  style="margin-left: 200px; margin-right: 200px; ">

<table border="1" align="center" class="table table-bordered" style="border-color: black">
    <thead>
      <tr style="background-color: #bbc9f9;">
        <th>Total Queue</th>
        <th>Served</th>
        <th>Pending</th>
      </tr>
      <tr>
       @foreach($region as $data)
        <th><h1>{{$data->kcp_kaliurang->cs_queue->counter}}</h1></th>
        <th><h1>{{$data->kcp_kaliurang->cs_queue->served}}</h1></th>
        <th><h1>8</h1></th>
        @endforeach
      </tr>
    </thead>
  </table>
</div>


            </div>




<!-- 
 --> 
        </div>
    </body>
</html>

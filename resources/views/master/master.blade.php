




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Black Gym</title>


     <!-- Styles  CSS-->
     <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="//db.onlinewebfonts.com/c/0923ee644c97a87d70269aa80a6f1e79?family=The+Historia+Demo" rel="stylesheet" type="text/css"/>

     <!-- FONTOVI -->
    <link rel="stylesheet" href="https://use:fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

      <!-- FULLPAGE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.css" integrity="sha256-+dIh4jG2jQTHZwW81yUo8h6tzXWcNumyNL5XPZbwp1E=" crossorigin="anonymous" />


     <style>



  /*-----------GENERAL----------------*/

*{
    margin: 0;
    padding: 0;
    font-family: "Montserrat";
    box-sizing: border-box;
}

body{
    color: #fff;
    font-family: 'Montserrat';
    overflow: hidden;
}

        .s1{
            background-image: url('{{asset('/pictures/gym1.jpg')}}');
            background-size: cover;
            background-position: center;
        }

        .s2{
            background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('{{asset('pictures/gym2.jpg')}}');
            background-size: cover;
            background-position: center;
        }

        .s3{
            background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('{{asset('pictures/gym3.jpg')}}');
            background-size: cover;
            background-position: center;
        }

        .s4{
            background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ),  url('{{asset('pictures/gym5.jpg')}}');
            background-size: cover;
            background-position: center;
        }

        span{
            background: white !important;
        }

    </style>
</head>



<body>

    <div class="container">
        @if ($errors->any())
                <div class="alert alert-danger">
                     <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{$error}}</li>
                        @endforeach
                     </ul>
        @endif
    </div>

    <div class="container">
        @if (session()->has('success'))
             <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
    </div>

@yield('content')

<!-- OSTALO -->
<script src="https://use.fontawesome.com/releases/v5.12.0/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- /OSTALO -->

<!-- FULLPAGE JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.js" integrity="sha256-caNcSA0LvOCX90PTuEbwl+V09xPMca13CJUasl+VCtk=" crossorigin="anonymous"></script>

<script>
    new fullpage('#fullPage' , {
        autoScrolling: true,
        navigation:true,
        anchors: ['section1' , 'section2' , 'section3' , 'section4' , 'section5'],
        navigationTooltips: ['Home' , 'Programs' , 'Contact' , 'Location' , 'Programs'],
        showActiveTooltip: false,
        scrollingSpeed: 1500,
        controlArrows: false,
        slidesNavigation:true,
        keyboardScrolling: true,
    })
</script>

</body>
</html>


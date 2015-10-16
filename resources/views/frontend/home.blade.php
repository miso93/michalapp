<!DOCTYPE html>
<html>
<head>
    <title>Michal Čech</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link href="{{asset("assets/vendor/fortawesome/font-awesome/css/font-awesome.css")}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <style type="text/css">
        html, body {
            font-family: Lato, sans-serif;
            /*background-color: #ebefed;*/
            background: url('/assets/images/bg.png') repeat rgba(0,0,0,0.1);
            /*/!*background: url('/assets/images/photo1.jpg') no-repeat center center fixed,  #f2f6f4;*!/*/
            /*-webkit-background-size: cover;*/
            /*-moz-background-size: cover;*/
            /*-o-background-size: cover;*/
            /*background-size: cover;*/

            -webkit-box-shadow: inset 10px 300px 300px 0px rgba(240,240,240,1);
            -moz-box-shadow: inset 10px 300px 300px 0px rgba(240,240,240,1);
            box-shadow: inset 10px 300px 300px 0px rgba(240,240,240,1);

        }
        h1 {
            color: #59575f;
            font-size: 46px;
            text-shadow: 1px 1px 2px rgba(150, 150, 150, 0.8);
        }
        a {
            color: #59575f;
        }
        /*.me-wrapper {*/
            /*position: relative;*/
            /*padding-top: 50%;*/
        /*}*/
        .me {
            position: absolute;
            bottom: 20%;
            right: 0;
            width: 30%;
            min-width: 394px;
        }
        .icons {
            font-size: 26px;
        }
        .icons a {
            padding: 5px;
        }
        #bg { position: fixed; top: 0; left: 0; }
        .bgwidth { width: 100%;
            /*min-width: 460px;*/
        }
        .bgheight { height: 100%; }
    </style>
</head>
<body>
<img src="/assets/images/photo3.png" id="bg" alt="" class="bgwidth">
<div class="container">
    <div class="content">
        <div class="me-wrapper">
            <div class="me">
                <div class="text-center"><h1>Michal Čech</h1></div>
                <div class="icons text-center">
                    <a href="https://sk.linkedin.com/in/cechmichal" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/miso93" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="mailto:cech.michal@gmail.com"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).load(function() {

        var theWindow        = $(window),
                $bg              = $("#bg"),
                aspectRatio      = $bg.width() / $bg.height();

        function resizeBg() {

            if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
                $bg
                        .removeClass()
                        .addClass('bgheight');
            } else {
                $bg
                        .removeClass()
                        .addClass('bgwidth');
            }

        }

        theWindow.resize(resizeBg).trigger("resize");

    });
</script>
</body>
</html>

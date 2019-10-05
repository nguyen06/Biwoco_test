<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Hello, world!</title>
    <style>
        body{
            font-family: Sailec-Medium,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;
        }
        .logo{
            fill: #0069ff;
        }
        .m-g-64{
            margin-left: 64px !important;
        }
        .nav-item{
            margin-left: 0.6rem;
        }
        .nav-link{
            line-height: normal!important;
            font-size: 14px!important;
            color:#031b4e!important

        }
        .btn-outline-success {
            margin-top: 1rem !important;
            color: #0069ff !important;
            border-color: #0069ff !important;
        }
        .btn-outline-success:hover{
            color: white !important;
            border-color: #0069ff !important;
            background-color: #0069ff !important;
        }
        .shadow {
            box-shadow: 0 .1rem 0.5rem rgba(0,0,0,.15) !important;
        }
        .text-dark{
            color:#031b4e !important;
        }
        .bg-light-dark{
            background-image: linear-gradient(-180deg,#fff 50%,#f3f6f9);

        }
        .text-descript{
            font-size: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 900px;
            padding-top: 16px ;
            padding-bottom: 64px !important ;
            text-align: center;
            color: rgba(3,27,78,.7) !important;
        }

        .www-Tabs-bricks {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            list-style: none;
            margin: 10px 60px 16px;
            padding: 0;
            position: relative;
            /*top: 2px;*/
            text-align: center;
        }
        .www-Tabs-bricks
        {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0px;
            flex: 1 0 0;
            font-family: Sailec-Medium,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;
            font-size: 18px;
            border-bottom: none;
            cursor: pointer;

        }
        .support{

            padding: 20px 10px;
            border: 1px solid #e5e8ed;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0px;
            flex: 1 0 0;
            font-family: Sailec-Medium,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;
            font-size: 18px;
            border-bottom: none;
            cursor: pointer;
            background-color: white;

        }
        .sale{

            padding: 20px 10px;
            border: 1px solid #e5e8ed;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0px;
            flex: 1 0 0;
            font-family: Sailec-Medium,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;
            font-size: 18px;
            /*background-color: white;*/
            border-bottom: none;
            cursor: pointer;

        }
        .report{

            padding: 20px 10px;
            border: 1px solid #e5e8ed;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0px;
            flex: 1 0 0;
            font-family: Sailec-Medium,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;
            font-size: 18px;
            /*background-color: white;*/
            border-bottom: none;
            cursor: pointer;

        }
        .www-Tabs-bricks>li .www-Tabs-bricksSubText {
            color: rgba(3,27,78,.25);
            display: block;
            font-family: Sailec-Regular,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;
            font-size: 16px;
        }

        a div{
            text-decoration: none;
        }
        .support_text{
            padding-top: 2rem;
        }
        .support-title{
            font-size: 20px;
        }
        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            margin-top: 0;
            margin-bottom: 0;
        }

        input{
            height:48px !important;
        }
        .inner-addon {
            position: relative;
        }

        /* style icon */
        .inner-addon .glyphicon {
            position: absolute;
            padding: 15px;
            pointer-events: none;
            height: 48px !important;
        }
        .form-control{
            height:48px !important;
            border: 1px solid #ccc !important;
        }
        .form-group{
            margin-bottom:0px !important;
        }
        /* align icon */
        .left-addon .glyphicon  { left:  0px;}
        .right-addon .glyphicon { right: 0px;}

        /* add padding  */
        .left-addon input  { padding-left:  30px; }
        .right-addon input { padding-right: 30px; }
        .right-addon select { padding-right: 30px; }


        input::placeholder {
            color: rgba(3,27,78,.7) !important;
        }

        html{
            font: 400 16px/1.5 Sailec-Regular,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;
        }
        .form-control-1 {
            display: block;
            width: 100%;
            height: 65px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        select {
            /* for Firefox */
            -moz-appearance: none;
            /* for Chrome */
            -webkit-appearance: none;
        }

        /* For IE10 */
        select::-ms-expand {
            display: none;
        }
        .www-Button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent;
            border: 1px solid #0069ff;
            border-radius: 5px;
            color: #0069ff;
            cursor: pointer;
            display: inline-block;
            font-family: Sailec-Bold,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;
            font-size: 16px;
            font-weight: 400;
            height: 48px;
            line-height: 48px;
            padding: 0 32px;
            text-align: center;
            text-decoration: none;
            -webkit-transition: background-color .25s ease,border .25s ease,color .25s ease;
            transition: background-color .25s ease,border .25s ease,color .25s ease;
            vertical-align: middle;
            white-space: nowrap;
        }
        .www-Button--primary {
            background-color: #0069ff;
            border: none;
            color: #fff;
        }
        .www-Button--fullWidth {
            width: 100%;
        }
        .hasError{
            /*outline: 1px solid red !important;*/
            background-color: red !important;
        }
    </style>
</head>
<body>
    @yield('navbar')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(".support").click(function(){
        $(".sale").css("background-color","transparent");
        $(".report").css("background-color","transparent");
        $(".support").css("background-color","white");
        $('#content').load('/support_content/');

    });
    $(".sale").click(function(){
        $(".sale").css("background-color","white");
        $(".report").css("background-color","transparent");
        $(".support").css("background-color","transparent");
        $('#content').load('/sale_content/');
    });
    $(".report").click(function(){
        $(".sale").css("background-color","transparent");
        $(".report").css("background-color","white");
        $(".support").css("background-color","transparent");
        $('#content').load('/report_content/');

    });

    $(document).ready(function(){
        $('#myForm input[type="text"]').blur(function(){
            if(!$(this).val()){
                $(this).addClass("hasError");
            } else{
                $(this).removeClass("hasError");
            }
        });
    });

</script>
<script>

</script>
</body>
</html>
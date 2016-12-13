<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SiSEduc</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>



     
   



    <!-- Bootstrap -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.1/css/bootstrap-toggle.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/bootstrap.min.css" rel="stylesheet">


    <link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/simple-sidebar.css"rel="stylesheet">


    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <style type="text/css">
        .sidebar-nav li.active > a,
        .sidebar-nav li > a:focus {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .header {
            width: 100%;
            background: #e74c3c none repeat scroll 0 0;
            color: #fff;
            height: 50px;

        }
       .ui-datepicker-calendar tr
        span {
    border-left: 1px solid #ffffff;
    color: #666;
    font-size: 15px;
    margin-left: 10px;
    padding: 2px 2px 2px 10px;
}

       #ui-datepicker-div{
         width: 30%;
         margin-left: 150px;
         color: #blue;
       }
       .navbar-brand{
        color: #ffffff;
       }
   .quick-btn {
    background: #35495d none repeat scroll 0 0;
    box-shadow: 0 0 0 1px #bdc3c7 inset, 0 0 0 1px #cccccc;
    color: #e54d42;

    height: 100px;
    margin: auto ;
    padding-top: 16px;
    position: relative;
    text-align: center;
    text-decoration: none;
    width: 90px;
    border-radius: 1em;
    display: block;
}
    .quick-btn:hover{
      background: #e99755 none repeat scroll 0 0;
      color: #35495d;

    }

    #contact{
    padding:10px 0 10px;
  }

  .contact-text{
    margin:45px auto;
  }

  .mail-message-area{
    width:100%;
    padding:0 15px;
  }

  .mail-message{
    width: 100%;
    background:rgba(255,255,255, 0.8) !important;
    -webkit-transition: all 0.7s;
    -moz-transition: all 0.7s;
    transition: all 0.7s;
    margin:0 auto;
    border-radius: 0;
  }

  .not-visible-message{
    height:0px;
    opacity: 0;
  }

  .visible-message{
    height:auto;
    opacity: 1;
    margin:25px auto 0;
  }

/* Input Styles */

  .form{
    width: 100%;
    padding: 15px;
    background:#f8f8f8;
    border:1px solid rgba(0, 0, 0, 0.075);
    margin-bottom:25px;
    color:#727272 !important;
    font-size:13px;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }

  .form:hover{
    border:1px solid #e99755;
  }

  .form:focus{
    color: white;
    outline: none;
    border:1px solid #e99755;
  }
  .form-control:hover{
     border:1px solid #e99755;
  }
  .form-control:focus{
    color: #666;
    outline: none;
    border:1px solid #e99755;
  }
  .textarea{
    height: 200px;
    max-height: 200px;
    max-width: 100%;
  }

/* Generic Button Styles */

  .button{
    padding:8px 12px;
    background:#35495d;
    display: block;
    width:120px;
    margin:10px 0 0px 0;
    border-radius:3px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    text-align:center;
    font-size:0.8em;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .button:hover{
    background:#9b59b6;
    color:white;
  }

/* Send Button Styles */

  .form-btn{
    width:180px;
    display: block;
    height: auto;
    padding:15px;
    color:#666;
    background:#9b59b6;
    border:none;
    border-radius:3px;
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    margin:auto;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .form-btn:hover{
    background:#111;
    color: white;
    border:none;
  }

  .form-btn:active{
    opacity: 0.9;
  }
.center{
  margin-top:330px;
}
input {
    position: relative;
    z-index: 9999;
}
.form input:active {
    position: relative;
    z-index: 9999;
    border-color: #f19b2c;
}
    </style>
</head>
<body id="app-layout">

<?php if(Auth::guest()): ?>

    <nav class="navbar navbar-default navbar-static-top" style="background: #35495d none repeat scroll 0 0;box-shadow: 3px 3px 3px #e99755">
        <div class="container">

            <div class="navbar-header" >

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a style="color:#ffffff;"class="navbar-brand" href="#">
                    Sistema
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a style="color:#ffffff;" href="<?php echo e(url('/home')); ?>">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><span class="pull-right" style="margin-right: 10px;margin-top: 15px">
            <a style="color:#ffffff;"href="<?php echo e(url('/contato')); ?>"
               onclick="event.preventDefault(); document.getElementById('contact-form').submit();">Contato
            </a>
            <form id="contact-form" action="<?php echo e(url('/contato')); ?>" method="POST" style="display: none;">

                <?php echo e(csrf_field()); ?>


            </form>
        </span></li>
                    <li><a style="color:#ffffff;"href="<?php echo e(url('/login')); ?>">Login</a></li>
                    <li><a style="color:#ffffff;"href="<?php echo e(url('/register')); ?>">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php else: ?>

    <div id="wrapper" class="">
    <!-- Sidebar -->
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <header class="header">
        <a href="#menu-toggle"
           style="margin-top: 8px;margin-left: 5px;background-color: #566471;border-color: #E7E7E7;color:#e54d42"
           class="btn btn-default" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i>
        </a>

        <span class="pull-right" style="margin-right: 10px;margin-top: 15px">
            <a style="color:#ffffff;"href="<?php echo e(url('/logout')); ?>"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
            </a>
            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">

                <?php echo e(csrf_field()); ?>


            </form>
        </span>

        <span class="pull-right" style="margin-right: 10px;margin-top: 15px">
            <a style="color:#ffffff;" href="<?php echo e(url('/contato')); ?>"
               onclick="event.preventDefault(); document.getElementById('contact-form').submit();">Contato
            </a>
            <form id="contact-form" action="<?php echo e(url('/contato')); ?>" method="POST" style="display: none;">

                <?php echo e(csrf_field()); ?>


            </form>
        </span>
    </header>
    </div>
<?php endif; ?>

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <?php if(config('infyom.laravel_generator.add_on.menu.enabled') and !Auth::guest()): ?>
                <div class="col-md-10 col-md-offset-2">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            <?php else: ?>
                <div class="col-md-12">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>
<!-- /#page-content-wrapper -->

<script src="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/js/jquery.js"></script>

<script src="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/js/bootstrap.min.js"></script>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.1/js/bootstrap-toggle.min.js"></script>

<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>



<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.colVis.min.js"></script>

<script>

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

</script>

<script>
$(function() {
    $("#calendario").datepicker({
        dateFormat: 'yy/mm/dd',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});
</script>


<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Frazier Farms Order System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">


    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <style type="text/css">
        .container .box {
            width: 100%;
            height: 100%;
        }

        .container .box .top {
            width: 100%;
            background-color: #fff;
            color: #8c8c48;
            cursor: pointer;
            text-align: center;
        }

        .container .box .top:hover{
            background-color: #8c8c48;
            color: #fff;
        }

        .container .box .bottom {
            
            
            color: white;
            display: none;
        }

        .arrow-down {
            margin: 0px auto;
            width: 0; 
            height: 0; 
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 20px solid #fff;
            position: relative;
            top: 20px;

        }

.bottom {
    width: 206%;
}

        #accWrap {
    max-width: 800px;
    margin: 1em auto;   
    }
.accBox {   
  width:100%;   
    float: left;
    background: #eee;   
    font-size:.875em;
    font-weight:700;
    padding:.875em 0;
    text-indent:2.5%;
    border-top:1px dotted #ccc;
    }
    .accBox:hover { 
    background: #368;
    color:#fff;
  cursor:pointer;
    }   
.accContent {   
        width: 100%;
    float: left;
    padding: 2%;
    background: #ddd;
    /* border-top: 1px dotted #ccc; */
    height: 200px;
}
    }
    

    </style>
</head>

<body style="background-color: #e9e0c7;">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #fff;">
        <div class="container">
            <div class="navbar-header">
               <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <p style="margin-bottom: 0px; font-size: 16px; font-weight: bold;">Pick up Store: </p>
                <span style="color: #8c8c48;">Store</span>
            </div>
            
            <div class=" navbar-header pull-right">
                    <p style="margin-bottom: 0px; font-size: 16px; font-weight: bold;">Cart Total: <span>Price</span></p>
                    <button class="btn btn navbar-btn" style="background-color: #8c8c48; color: #fff; border-radius: 0px; margin-top: 0px;">CHECKOUT ></button>
            </div>
        </div>
    </nav>
    <div style="width:100%; text-align: center;">
        <img src="img/logo.png" style="text-align: center; width: 200px; ">    
    </div>
    

    <!-- Page Content -->
    <div class="container">
        <!-- /.row -->
        <!-- Create 2 Areas - Ordering System and Checkout Screen-->
        <div class="row" >
            <div class="col-lg-12">
                
                            <!-- Intro to Page -->
                           <div style="width: 100%; height: 28px; border-bottom: 1px solid #9F834D; text-align: center; color:#9F834D; margin-bottom: 30px; ">
                              <span style="font-size: 40px; background-color: #e9e0c7; padding: 0 10px;">
                                Order For Pickup <!--Padding? is optional-->
                              </span>
                            </div>
                            <div style="width: 100%; text-align: center; height: 60px;">
                                <span>We use the freshest, all natural ingredients available. All sandwiches are made to order.</span>  
                            </div>
                            
                            <!-- Page Header -->
                                <!-- <div class="row">
                                    <div class="col-lg-12 " style="margin-bottom:20px; ">
                                        <form>
                                            <label for="name" > Name: <input type="" name="name"></label> 
                                            <label for="phone">Phone: <input type="" name="phone" class="input-medium bfh-phone" data-country="US"></label> 
                                            <label for="email"> Email: <input type="" name="email" required></label><input type="" style="display: none;" name="orderInfo">
                                        </form>
                                           
                                    </div>
                                </div> -->






                                <!-- Projects Row -->
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 portfolio-item">
                                            <img class="img-responsive" src="http://placehold.it/700x400" style="width: 100%;" alt="Frazier Farms sandwiches">
                                            <h3 style="color: #8a6b24; text-align: center;">
                                              Project Name
                                            </h3>
                                            <p>Sandwhich Description that includes current items.</p>
                                            <h3 style="color: #8a6b24; text-align: center;">
                                              Price each
                                            </h3>


                                            <!--Div dropdown box goes here-->

                                            <div class="box">

                                                <div class="top">
                                                    <h3 style="padding: 0px; margin: 0px; margin-top: 3px;">Customize Sandwhich</h3>
                                                    <div class="arrow-down"></div>
                                                </div>
                                                <div class="bottom">
                                                    <div id="accWrap">
                                                        <div class="accBox">1</div>
                                                            <div class="accContent">
                                                            Content 1
                                                            </div>
                                                        <div class="accBox">2</div>
                                                        <div class="accContent">
                                                            Content 2
                                                        </div>
                                                        <div class="accBox">3</div>
                                                            <div class="accContent">
                                                            Content 3
                                                        </div>

                                                    </div>
                                                     <div style="height: 100%; background-color: blue;">
                                                        <h3>Your Sandwhich Order:</h3>
                                                        <p>Here are the details of the sandwhihc</p>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                        <div class="col-lg-6 col-md-6 portfolio-item">
                                            <a href="#">
                                                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                            </a>
                                            <h3>
                                                <a href="#">Project Name</a>
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 portfolio-item">
                                            <a href="#">
                                                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                            </a>
                                            <h3>
                                                <a href="#">Project Name</a>
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                        </div>
                                        <div class="col-md-4 portfolio-item">
                                            <a href="#">
                                                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                            </a>
                                            <h3>
                                                <a href="#">Project Name</a>
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                        </div>
                                        <div class="col-md-4 portfolio-item">
                                            <a href="#">
                                                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                            </a>
                                            <h3>
                                                <a href="#">Project Name</a>
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                        </div>
                       
                    </div>

                

        
        <!-- /.row -->

        <hr>

       <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Frazier Farms | Developed by <a href="#">DW Green Co.</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

     
   



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
 <script type="text/javascript">
     $('.top').on('click', function(){
        $parent_box = $(this).closest('.box');
        $parent_box.siblings().find('bottom').slideUp();
        $parent_box.find('.bottom').slideToggle(1000, 'swing');
     });


     $(document).ready(function(){$(".accBox").click(function(){$(".accContent").slideUp("fast");if($(this).next().is(":hidden")==true){$(this).next().slideDown("normal")}});$(".accContent").hide()});
  
 </script>

</body>

</html>

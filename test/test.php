<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="dropdownLayer.js"></script>



<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">
	* { box-sizing: border-box; }

body {
  background-color: #fff;
  color: #333;
  margin: 0;
  min-height: 100%;
}

.container { width: 100%; }

.persons {
  padding: 40px 0 20px;
  max-width: 1000px;
  margin: 0 auto;
  position: relative;
}

.top {
    width: 100%;
    background-color: #fff;
    color: #8c8c48;
    cursor: pointer;
    text-align: center;
}
.top:hover{
    background-color: #8c8c48;
    color: #fff;
}

.persons:before,
.persons:after {
  clear: both;
  content: " ";
  display: table;
}

.persons .person {
  width: 33%;
  margin-bottom: 20px;
  display: table;
  float: left;
  border-left: 20px solid transparent;
  cursor: pointer;
}

.persons .person .avatar {
  width: 100%;
  display: block;
  text-align: center;
}

.persons .person .avatar img {
  border: 24px solid #E5E5E5;
  display: inline-block;
  width: 100%;
  vertical-align: middle;
}

.persons .person.active .avatar img { border-color: #323A45; }

.persons .person .fullname {
  width: 100%;
  display: block;
  text-align: center;
  font-family: Raleway, sans-serif;
  color: #828282;
  font-size: 20px;
  padding: 10px 0 5px;
}

.persons .person .title {
  width: 100%;
  display: block;
  text-align: center;
  font-family: Raleway, sans-serif;
  color: #828282;
  font-size: 16px;
}

.persons .person .js-description { display: none; }
@media screen and (max-width: 700px) {

.persons .person { width: 50%; }
}
@media screen and (max-width: 400px) {

.persons .person {
  width: 100%;
  border-left: medium none;
}
}

.persons .js-dropdown {
  background-clip: padding-box !important;
  border: 0 solid transparent;
  box-sizing: border-box;
  float: left;
  padding: 0;
  margin: 40px 0 20px;
  width: 100%;
  display: table;
  border-color: transparent;
  border-image: none;
  border-style: solid;
  border-width: 0 0 10px 20px;
}

.persons .js-dropdown:before,
.persons .js-dropdown:after {
  clear: both;
  content: " ";
  display: table;
}
@media screen and (max-width: 400px) {

.persons .js-dropdown { border-left: medium none; }
}

.persons .js-dropdown .js-dropdown-content {
  background: none repeat scroll 0 0 #FFFFFF;
  border: 6px solid #E5E5E5;
  color: #333333;
  position: relative;
  width: 100%;
  padding: 48px 32px 0;
}

.persons .js-dropdown .js-dropdown-content .js-dropdown-arrow {
  position: absolute;
  bottom: 100%;
  left: 50%;
  width: 0;
  height: 0;
  margin-left: -55px;
  border: 46px solid transparent;
  border-bottom-color: #E5E5E5;
  pointer-events: none;
  -webkit-transition: left 0.3s;
  -moz-transition: left 0.3s;
  transition: left 0.3s;
}

.persons .js-dropdown .js-dropdown-content p {
  line-height: 26px;
  margin: 0 0 40px;
  padding: 0;
  font-size: 16px;
}
</style>
</head>
<body style="background-color: #e9e0c7;">

	!-- Navigation -->
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


<div class="container">
	<div class="row">
		<div class="persons js-dropdown-items">
		    
		    <div class="person js-dropdown-item">
		    	<img class="img-responsive" src="http://placehold.it/700x400" style="width: 100%;" alt="Frazier Farms sandwiches">
                <h3 style="color: #8a6b24; text-align: center;">
                  Project Name
                </h3>
                <p>Sandwhich Description that includes current items.</p>
                <h3 style="color: #8a6b24; text-align: center;">
                  Price each
                </h3>
		      	<div class="top">
                    <h4 style="padding: 0px; margin: 0px; margin-top: 3px;">Customize Sandwhich</h4>
                    <div class="arrow-down"></div>
                </div>
				<div class="js-description">
					<p>Description 1</p>
				</div>
		    </div>
		    <div class="person js-dropdown-item">
		    	<img class="img-responsive" src="http://placehold.it/700x400" style="width: 100%;" alt="Frazier Farms sandwiches">
                <h3 style="color: #8a6b24; text-align: center;">
                  Project Name
                </h3>
                <p>Sandwhich Description that includes current items.</p>
                <h3 style="color: #8a6b24; text-align: center;">
                  Price each
                </h3>
		      	<button style="height: 20px; width:100%; background-color: blue;">Customize Sandwhich</button>
				<div class="js-description">
					<p>Description 1</p>
				</div>
		    </div>
		    <div class="person js-dropdown-item">
		    	<img class="img-responsive" src="http://placehold.it/700x400" style="width: 100%;" alt="Frazier Farms sandwiches">
                <h3 style="color: #8a6b24; text-align: center;">
                  Project Name
                </h3>
                <p>Sandwhich Description that includes current items.</p>
                <h3 style="color: #8a6b24; text-align: center;">
                  Price each
                </h3>
		      	<button style="height: 20px; width:100%; background-color: blue;">Customize Sandwhich</button>
				<div class="js-description">
					<p>Description 1</p>
				</div>
		    </div>
		    <div class="person js-dropdown-item">
		    	<img class="img-responsive" src="http://placehold.it/700x400" style="width: 100%;" alt="Frazier Farms sandwiches">
                <h3 style="color: #8a6b24; text-align: center;">
                  Project Name
                </h3>
                <p>Sandwhich Description that includes current items.</p>
                <h3 style="color: #8a6b24; text-align: center;">
                  Price each
                </h3>
		      	<button style="height: 20px; width:100%; background-color: blue;">Customize Sandwhich</button>
				<div class="js-description">
					<p>Description 1</p>
				</div>
		    </div>
		    <div class="person js-dropdown-item">
		    	<img class="img-responsive" src="http://placehold.it/700x400" style="width: 100%;" alt="Frazier Farms sandwiches">
                <h3 style="color: #8a6b24; text-align: center;">
                  Project Name
                </h3>
                <p>Sandwhich Description that includes current items.</p>
                <h3 style="color: #8a6b24; text-align: center;">
                  Price each
                </h3>
		      	<button style="height: 20px; width:100%; background-color: blue;">Customize Sandwhich</button>
				<div class="js-description">
					<p>Description 1</p>
				</div>
		    </div>






		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	  $('.js-dropdown-item').dropdownLayer();
	});
</script>

</body>
</html>
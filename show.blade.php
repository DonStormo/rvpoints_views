<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$park->title}} | RVPoints.com | RV Camping Family Vacations | National Parks | Campers | Research | Booking Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$park->introtext}}">
    <meta name="author" content="Arkturis Website Solutions">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('scripts/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="{{asset('scripts/icons/general/stylesheets/general_foundicons.css')}}" media="screen" rel="stylesheet" type="text/css" />  
    <link href="{{asset('scripts/icons/social/stylesheets/social_foundicons.css')}}" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="{{asset('scripts/fontawesome/css/font-awesome.min.css')}}">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="//fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="{{asset('styles/custom.css')}}" rel="stylesheet" type="text/css" />
    
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    

    

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="#">Home</a> &nbsp;:&nbsp; <span>RVParks Overview&nbsp;:&nbsp; <b>{{$park->title}}<b></span>
            </div>

            <div class="row-fluid">
			
			
					                 
            	<!--Edit Main Content Area here-->
                <div class="span6" id="divMain">

                    <h1>{{$park->title}}</h1>
						
                    <p>{{{$park->introtext}}}</p>	

<!-- Edit Carousel -->
			  <h1>Campground Picture Gallery</h1>
           <div id="myCarousel" class="carousel slide">
              <div class="carousel-inner">
                
				<div class="item">
                <img src="{{asset('media/1.jpg')}}" class="img-polaroid" alt="">
                </div>
				
                <div class="item active">
                <img src="{{asset('media/2.jpg')}}" class="img-polaroid" alt="">
                </div>
				
                <div class="item">
                <img src="{{asset('media/3.jpg')}}" class="img-polaroid" alt="">
                </div>
                
                <div class="item">
                <img src="{{asset('media/4.jpg')}}" class="img-polaroid" alt="">
                </div>
				
                <div class="item">
                <img src="{{asset('media/5.jpg')}}" class="img-polaroid" alt="">
                </div>
				
                <div class="item">
                <img src="{{asset('media/6.jpg')}}" class="img-polaroid" alt="">
                </div>
                
                <div class="item">
                <img src="{{asset('media/7.jpg')}}" class="img-polaroid" alt="">
                </div>
                
                <div class="item">
                <img src="{{asset('media/8.jpg')}}" class="img-polaroid" alt="">
                </div>
				
                <div class="item">
                <img src="{{asset('media/9.jpg')}}" class="img-polaroid" alt="">
                </div>
				
                <div class="item">
                <img src="{{asset('media/10.jpg')}}" class="img-polaroid" alt="">
                </div>
                
                <div class="item">
                <img src="{{asset('media/11.jpg')}}" class="img-polaroid" alt="">
                </div>
				
                <div class="item">
                <img src="{{asset('media/12.jpg')}}" class="img-polaroid" alt="">
                </div>
				
                <div class="item">
                <img src="{{asset('media/13.jpg')}}" class="img-polaroid" alt="">
                </div>
                
                <div class="item">
                <img src="{{asset('media/14.jpg')}}" class="img-polaroid" alt="">
                </div>
				
              </div>
			  
           <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
           <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
           </div>
	        <!-- /End Carousel -->   	
                    					
				</div>	                             
                <!--Edit Sidebar Content here-->
                <div class="span3">                    
                 <h1>Location</h1>
                 <div class="panel panel-default">
						  <!-- Default panel contents -->
						  
						  <!-- Table -->
						  <table class="table table-striped">
						    <tbody><tr>
						    	<td>
						    		<address><strong>{{$park->title}}</strong><br>{{$park->address}}<br>{{$park->city}}, {{$park->state}} {{$park->zipcode}}</address>
						    		Phone: {{$park->phone}}<br>Website: <a href="{{$park->website}}" target="_blank">{{$park->website}}</a>
									<br>
								</td>
						    </tr>					    
						  </tbody></table>
						  <div class="embed-responsive">      
        					<iframe id="listing-map" frameborder="0" width="100%" height="300px" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d182168.76016587368!2d-109.3401705!3d44.486739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xa5e96002503ae66b!2sCody+KOA!5e0!3m2!1sen!2sus!4v1416696865556"></iframe>
        				   </div>
						</div>     
                <!-- Start Side Categories -->   
					
					<h1>Amenities</h1>
                    
						  <!-- Table -->
						  <table class="table table-striped">
						    <tr>
						    	<td>Total Sites: 250</td>
						    </tr>
						    <tr>
						    	<td>Electric Hookups</td>
						    </tr>
						    <tr>
						    	<td>Free Wi-Fi</td>
						    </tr>
						    <tr>
						    	<td>Activities Room</td>
						    </tr>
						    <tr>
						    	<td>Heated Swimming Pool | Wading Pool | Spray Fountains | Hot Tub</td>
						    </tr>
						    <tr>
						    	<td>Basketball Courts</td>
						    </tr>
						    <tr>
						    	<td>Off Leash Dog Playground</td>
						    </tr>
						  </table>
                          
                   <h1>Current Weather</h1>       
						  <!-- Table -->
						  <table class="table table-striped">
						    <tr>
						    	<td><iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat={{$park->latitude}}&lon={{$park->longitude}}&name={{$park->title}}"> </iframe></td>
						    </tr>
						  </table>
						</div>
				 </div>                 	
          </div>
				<!--/End Sidebar Content -->    					                  
				<!--/End Main Content Area here-->	                
					
							
            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    

    
</div>
<br /><br /><br />

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('scripts/default.js')}}" type="text/javascript"></script>





</body>
</html>
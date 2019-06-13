<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Portal 1</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="{{ url('/') }}/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')

</head>

<body>

    <!-- Navigation -->
    @include('nav')

<div class="container-fluid">

		<!-- Left Column -->
		@include('left')
  
		<!-- Center Column -->
		<div class="col-sm-6">
			@yield('content')
		</div><!--/Center Column-->


	  <!-- Right Column -->
	  @include('right')

	</div><!--/container-fluid-->
	
	<footer>
		<div class="footer-blurb">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 footer-blurb-item">
						<h3><span class="glyphicon glyphicon-text-size"></span> Dynamic</h3>
						<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
						<p><a class="btn btn-default" href="#">Procrastinate</a></p>
					</div>
					<div class="col-sm-3 footer-blurb-item">
						<h3><span class="glyphicon glyphicon-wrench"></span> Efficient</h3>
						<p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
						<p><a class="btn btn-default" href="#">Unleash</a></p>
					</div>
					<div class="col-sm-3 footer-blurb-item">
						<h3><span class="glyphicon glyphicon-paperclip"></span> Complete</h3>
						<p>Professionally cultivate one-to-one customer service with robust ideas. Completely synergize resource taxing relationships via premier niche markets. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
						<p><a class="btn btn-default" href="#">Complete</a></p>
					</div>
					<div class="col-sm-3 footer-blurb-item">
						
						<!-- Thumbnails --> 
						<h3><span class="glyphicon glyphicon-camera"></span> Phosfluorescent</h3>
							<div class="row">
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
							</div>
							
					</div>

				</div>
				<!-- /.row -->	
			</div>
        </div>
        
        <div class="small-print">
        	<div class="container">
        		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<p>Copyright &copy; Example.com 2015 </p>
        	</div>
        </div>
	</footer>

	
    <!-- jQuery -->
    <script src="{{ url('/') }}/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('/') }}/js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="{{ url('/') }}/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="{{ url('/') }}/js/holder.min.js"></script>

	@yield('script')
	
</body>

</html>

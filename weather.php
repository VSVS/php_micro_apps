<!DOCTYPE html>
<html>

<head>
	<title>

	</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<style>

	html, body{
		height: 100%;
		background-image: url("img/in_the_open_fields-905430.jpg");
		background-size: cover;
		background-position: center;

	}

	.container {
		width: 100%;
		height: 100%;
		
		padding-top: 100px;

	}

	.center{
		text-align: center;

	}

	.white{
		color: white;
	}
	p{
		padding-top:20px;
		padding-bottom: 15px;

	}

	button{
		margin-top: 20px;
		margin-bottom: 20px;

	}
	.alert{
		margin-top: 20px;
		display: none;
	}

</style>
</head>
<body>
<div class="container">

<div class="col-md-6 col-md-offset-3 center">

<h1 class="center white">WeatherMan Robby</h1>

<p class="lead center white">enter your city below to get a forecast for the weather
</p>
<form>
	<div class="form-group">
		<input type="input" class="form-control" name="city" id="city" placeholder="eg. New York. London, Tokyo, Paris..">
	</div>
	<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
</form>

	<div id="success" class="alert alert-success" style="margin-bottom:20px;">Success!</div>
	<div id="fail" class="alert alert-danger" style="margin-bottom:20px;">Could not find weather data for that city. Please try again.</div>
	<div id="noCity" class="alert alert-danger" style="margin-bottom:20px;">Please enter a city!</div>


</div>
</div>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrp.min.js"></script>
<script type="text/javascript">
	$('#findMyWeather').click(function(event){
		event.preventDefault();

		$('.alert').hide();

		if ($('#city').val()!=""){
			$.get("scraper.php?city="+$('#city').val(),
				function ( data ){
					if (data==""){
						$("#success").hide();
						$("#fail").fadeIn();
					}
					else{
						$("#fail").hide();						
						$("#success").html(data).fadeIn();

					}
				});
				} 
		else{
			$("#noCity").fadeIn();
		}
	});
	
</script>
</body>
</html>
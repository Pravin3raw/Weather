<!DOCTYPE html>
<html>
<head>
	<title>WeatherInfo | <?=$title?></title>
	<link rel="icon" href="<?=site_url('')?>assets/img/icon.png" type="image/gif" sizes="16x16">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
body {
  font-family: 'Raleway', sans-serif;
  background-image: url('../weather/assets/img/sky.jpg');
}
.homepage {
  text-align: center;
  margin-top:15%
}
.title {
  border-bottom: .1em solid #c6c6c6;
}
.title h2 {
  margin-top: 0;
  font-size: 4em;
  color: #ffffff;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  pointer-events:none;
}
#city{
	width:40%;
}
.threed {
	text-shadow: 4px 1px 1px #030303, 0px 2px 1px #000000, 0px 2px 1px #c8c7c7, 0px 4px 1px #000000, 0px 0px 1px #c1c1c1, 0px 6px 1px #000, 0px 0px 1px #777, 0px 0px 1px rgba(100, 100, 100, 0.4), 0px 9px 5px rgba(100, 100, 100, 0.1), 0px 10px 7px rgba(100, 100, 100, 0.15), 0px 11px 9px rgba(100, 100, 100, 0.2), 0px 12px 11px rgba(100, 100, 100, 0.25), 0px 13px 15px rgba(100, 100, 100, 0.3);  
	-o-transition:all .8s ease-in-out;  
	-o-transition:all .8s ease-in-out;  
	-moz-transition:all .8s ease-in-out;  
	-webkit-transition:all .8s ease-in-out;
	font-weight:bold;
	text-transform:uppercase;
}
span.select2-selection.select2-selection--single {
	height: 35px;
}
.jconfirm .jconfirm-box .jconfirm-buttons button.btn-default,.jconfirm .jconfirm-box .jconfirm-buttons button.btn-default:hover {
    background-color: #0b0b0b !important;
    color: white !important;
}
.jconfirm-content-pane.no-scroll{
	display:none !important
}
</style>

<body>	
	<video autoplay muted loop id="myVideo">
	  <source src="<?=site_url('')?>/assets/img/sky1.webm" type="video/mp4">
	</video>
	<div class="container homepage">
		<div class="row">
			<div class="col-sm-12 title"><h2 class="threed">Weather Info <i class="fa fa-cloud"></i></h2></div>
		</div>
		<div class="row">
		  <div class="col-lg-12 title">
			<form method="POST" id="form1" action="<?=site_url('weatherinfo')?>">
			  <br><select id="city" name="city" class="form-control input-sm" title="List of cities in germany"><?=$citylist?></select>
			  <button type="submit" class="btn btn-success" style="background-color: #0c4d2c;" title="Click to search">Search&nbsp;&nbsp;<i class="fa fa-search"></i></button>
			  <br><br>
			</form>
		  </div>
		</div>
	</div>
</body>
</html>

<script>
var vid = document.getElementById("myVideo");
vid.playbackRate = 0.8;

$(document).ready(function() {
	$("#city").select2({
		placeholder: "Select a city",
		allowClear: true,
	});
	
	$( "#form1" ).submit(function( event ) {
	  if($("#city").val()==null || $("#city").val()=='')
	  {
		$.alert({
			icon: 'fa fa-exclamation-circle',
			title: '<b>&nbsp;&nbsp;&nbsp;Please select a city..!</b>',
			type: 'black',
			content: ''
		});
		return false;
	  }
	});
});
</script>
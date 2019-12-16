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
  padding: 0% 2%;
  background-color: #014884;
  font-family: 'Arial', sans-serif;
  background-image: url('../weather/assets/img/sky.jpg');
  background-repeat:no-repeat;
  background-size: 100%;
}
.title {
  border-bottom: .1em solid #fff;
}
.title h1 {
  margin-top: 0;
  font-size: 4em;
}
.listdata {
	border-bottom: 1px solid #fff;
	padding: 10px 5px;
	margin: 0;
	background-color: #072655;
	color: #fff;
	border: 1px solid #7c7c7c;
}
.listdata:last-child {
	border-bottom: 0;
}
.level {
	position: relative;
	font-size: 120px;
	border-right: 1px solid #fff;
}
.level #unit {
	position: absolute;
	font-size: 30px;
	bottom: 10px;
	right: 5px;
}
.descript p {
	margin-bottom: 2px;
}
.scrollable-list {
	overflow-y: scroll;
	overflow-x: hidden;
	height: 80vh;
}
.weather {
	border-right:1px solid #fff
}

@media screen and (max-width: 767px) {
	.level {
		border-right: 0;
	}
}
span.select2-selection.select2-selection--single {
	height: 35px;
}
.title1{
	color: #fff;
}
#city{
	width:40%;
}
.threed {
	text-shadow: 4px 1px 1px #030303, 0px 2px 1px #000000, 0px 2px 1px #c8c7c7, 0px 4px 1px #000000, 0px 0px 1px #c1c1c1, 0px 6px 1px #94959b, 0px 0px 1px #777, 0px 0px 1px rgba(100, 100, 100, 0.4), 0px 9px 5px rgba(100, 100, 100, 0.1), 0px 10px 7px rgba(100, 100, 100, 0.15), 0px 11px 9px rgba(100, 100, 100, 0.2), 0px 12px 11px rgba(100, 100, 100, 0.25), 0px 13px 15px rgba(100, 100, 100, 0.3);  
	-moz-transition:all .8s ease-in-out;  
	-webkit-transition:all .8s ease-in-out;
	font-weight:bold;
	text-transform:uppercase;
	color:white !important;
}
.fa-home{
	font-size:40px;
	color:#fff;
	float:right;
	margin-top:-60px;
	border-bottom: 2px solid #1eff0f;
}

#details { font-family: "Quicksand", sans-serif; font-size: 60px; }
#home-box > h2 { font-family: "Quicksand", sans-serif; font-weight: 400; line-height: 1.1; color: #75b1ae; }
.price { font-size: 25px; float: left; }
.pricing_header { background: none repeat scroll 0% 0% rgb(13, 46, 79); border-radius: 5px 5px 0px 0px; transition: background 0.4s ease-out 0s; }
.pricing_header h2 { text-align:center; line-height: 25px; padding: 15px 0px; margin: 0px; font-family: "Quicksand", sans-serif; font-weight: 400; color: #e1e5e5; }
.list-group-item:first-child { border-top-right-radius: 0px; border-top-left-radius: 0px; }

.cal1{
	padding-right: 1px !important;
    padding-left: 1px !important;
}

.card {
    background-size: cover;
    width: 100%;
    height: 10%;
    border-radius: 20px;
    box-shadow: 0px 8px 16px 4px #9E9E9E;
    margin-top: 30px;
    margin-bottom: 30px;
	color:#fff;
	padding-left:20px;
	padding-right:20px;
}

.time-font {
    font-size: 50px;
	text-shadow: 1px 1px 1px #030303, 0px 2px 1px #000000, 0px 2px 1px #c8c7c7, 0px 1px 1px #000000, 0px 0px 1px #c1c1c1, 0px 4px 1px #000, 0px 0px 1px #777, 0px 0px 1px rgba(100, 100, 100, 0.4), 0px 9px 5px rgba(100, 100, 100, 0.1), 0px 10px 7px rgba(100, 100, 100, 0.15), 0px 11px 9px rgba(100, 100, 100, 0.2), 0px 12px 11px rgba(100, 100, 100, 0.25), 0px 13px 15px rgba(100, 100, 100, 0.3);  
	-o-transition:all .8s ease-in-out;
}

.sm-font {
    font-size: 20px
}

.med-font {
    font-size: 28px;
	text-shadow: 1px 1px 1px #030303, 0px 2px 1px #000000, 0px 2px 1px #c8c7c7, 0px 1px 1px #000000, 0px 0px 1px #c1c1c1, 0px 4px 1px #000, 0px 0px 1px #777, 0px 0px 1px rgba(100, 100, 100, 0.4), 0px 9px 5px rgba(100, 100, 100, 0.1), 0px 10px 7px rgba(100, 100, 100, 0.15), 0px 11px 9px rgba(100, 100, 100, 0.2), 0px 12px 11px rgba(100, 100, 100, 0.25), 0px 13px 15px rgba(100, 100, 100, 0.3);  
	-o-transition:all .8s ease-in-out;
}

.large-font {
    font-size: 50px;
	text-shadow: 1px 1px 1px #030303, 0px 2px 1px #000000, 0px 2px 1px #c8c7c7, 0px 1px 1px #000000, 0px 0px 1px #c1c1c1, 0px 4px 1px #000, 0px 0px 1px #777, 0px 0px 1px rgba(100, 100, 100, 0.4), 0px 9px 5px rgba(100, 100, 100, 0.1), 0px 10px 7px rgba(100, 100, 100, 0.15), 0px 11px 9px rgba(100, 100, 100, 0.2), 0px 12px 11px rgba(100, 100, 100, 0.25), 0px 13px 15px rgba(100, 100, 100, 0.3);  
	-o-transition:all .8s ease-in-out; 
}
::-webkit-scrollbar {
    width: 4px;
    height: 3px
}
::-webkit-scrollbar-button {
    background: #ccc
}
::-webkit-scrollbar-track-piece {
    background: #888
}
::-webkit-scrollbar-thumb {
    background: #eee
}​
.jconfirm .jconfirm-box .jconfirm-buttons button.btn-default,.jconfirm .jconfirm-box .jconfirm-buttons button.btn-default:hover {
    background-color: #0b0b0b !important;
    color: white !important;
}
.jconfirm-content-pane.no-scroll{
	display:none !important
}
</style>

<?php
if($current_weather==""){ redirect('',refresh); exit(); }

if (strpos(strtolower($current_weather['weather'][0]['main']), 'rain') !== false) {
    $weather_img = site_url('')."/assets/img/rain.jpg";
}
else if (strpos(strtolower($current_weather['weather'][0]['main']), 'drizzle') !== false) {
    $weather_img = site_url('')."/assets/img/rain.jpg";
}
else if (strpos(strtolower($current_weather['weather'][0]['main']), 'snow') !== false) {
    $weather_img = site_url('')."/assets/img/snow.jpg";
}
else if (strpos(strtolower($current_weather['weather'][0]['main']), 'sun') !== false) {
   $weather_img = site_url('')."/assets/img/sun.jpg";
}
else if (strpos(strtolower($current_weather['weather'][0]['main']), 'mist') !== false) {
   $weather_img = site_url('')."/assets/img/mist.jpg";
}
else if (strpos(strtolower($current_weather['weather'][0]['main']), 'cloud') !== false) {
    $weather_img = site_url('')."/assets/img/cloud.jfif";
}
else if (strpos(strtolower($current_weather['weather'][0]['main']), 'clear') !== false) {
    $weather_img = site_url('')."/assets/img/clear.jpg";
}
else{
	$weather_img = site_url('')."/assets/img/normal.jpg";
}
?>
<body>
	<center>
	<div class="row">
		<div class="col-sm-12"><h2 class="threed">Weather Info <i class="fa fa-cloud"></i></h2></div>
	</div>
	<div class="row">
	  <div class="col-lg-12 title">
		<form method="POST" id="form1" action="<?=site_url('weatherinfo')?>">
		  <br><select id="city" name="city" class="form-control input-sm" title="List of cities in germany"><?=$citylist?></select>
		  <button type="submit" class="btn btn-success" title="Click to search" style="background-color: #0c4d2c;">Search&nbsp;&nbsp;<i class="fa fa-search"></i></button>
		  <br><br><br>
		</form>
		<a href="<?=site_url('')?>" title="Home Page"><i class="fa fa-home"></i></a>
	  </div>
	</div>
	</center>
	
	<div class="row">
		<div class="col-sm-4 title">
		<div class="title">
			<h2 class="text-center threed">Current Weather</h2>
		</div>
		<div class="container-fluid px-1 px-md-4 py-5 mx-auto">
			<div class="row d-flex justify-content-center px-3">
				<div class="card" style='background-image: url("<?= $weather_img ?>");'><br>
					<h2 class="text-center threed" style="font-size:24px;"><?=$current_weather['name']?>, <?=$current_weather['sys']['country']?> | <?=date('d F Y', $current_weather['dt'])?></h2><br>
					<p class="ml-auto mr-4 mb-0 med-font"><?=$current_weather['weather'][0]['main']?></p>
					<h2 class="ml-auto mr-4 large-font text-center"><?=str_replace('.','',substr($current_weather['main']['temp'], 0, 2))?></strong>&deg; Celsius</h2>
					<p class="time-font mb-0 ml-4 mt-auto text-right"><?= date("h:i") ?> <span class="med-font"><?= date("A") ?></span></p>
				</div>
			</div>
		</div>
		</div>
			
		<div class="col-sm-8 title" style="padding: 0 0 0 25px">
			<div class="title">
				<h2 class="text-center threed">Forecast Weather</h2>
			</div>
			<div class="scrollable-list">
				<?php foreach($forecast_weather['list'] as $data) { ?>
				<div class="col-md-6" id="home-box">
					<div class="pricing_header"><h2><b><?=date('d F Y', $data['dt'])?></b></h2></div>
					<div class="col-md-6 cal1">
						<ul class="list-group">
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;<?=$data['weather'][0]['main']?>, <?=$data['weather'][0]['description']?></li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Humidity: <?=$data['humidity'] ?? '0'?>%</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Pressure: <?=$data['pressure'] ?? '0'?> hPa</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Cloudiness: <?=$data['clouds'] ?? '0'?>%</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Rain: <?=$data['rain'] ?? '0'?> mm</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Wind Speed: <?=$data['speed'] ?? '0'?> m/s</li>
						</ul>
					</div>
					<div class="col-md-6 cal1">
						<ul class="list-group">
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Day: <?=$data['temp']['day']?>&deg;</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Low: <?=$data['temp']['min']?>&deg;</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;High: <?=$data['temp']['max']?>&deg;</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Morning: <?=$data['temp']['morn']?>&deg;</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Evening: <?=$data['temp']['eve']?>&deg;</li>
							<li class="list-group-item"><span class="glyphicon glyphicon-ok"></span> &nbsp;Night: <?=$data['temp']['night']?>&deg;</li>
						</ul>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>
  
<script>
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
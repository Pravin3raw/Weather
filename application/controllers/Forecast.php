<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forecast extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_Forecast');
    }

	public function index()
	{
		$path = base_url()."assets/cities1.json";
		$json = file_get_contents($path);
		$obj  = json_decode($json,true);
		
		$cities="<option value='' disabled selected>Select Your City</option>";
		foreach($obj as $k){
			$cities.="<option value='".trim($k)."'>".trim($k)."</option>";
		}
		$data['title'] = "Home";
		$data['citylist'] = $cities;
		$this->load->view('forecast', $data);
	}

	public function forecasting()
	{
		if(!empty($_POST['city'])) {
			$data['current_weather'] = $this->M_Forecast->current_weather($_POST['city']);
			$data['forecast_weather'] = $this->M_Forecast->forecast_weather($_POST['city']);
		} else {
			$data['current_weather']=null;
			$data['forecast_weather']=null;
		}
		
		$path = base_url()."assets/cities1.json";
		$json = file_get_contents($path);
		$obj  = json_decode($json,true);
		
		$cities="<option value='' disabled selected>Select Your City</option>";
		foreach($obj as $k){
			$cities.="<option value='".trim($k)."'>".trim($k)."</option>";
		}
		$data['title'] = "Result";
		$data['citylist'] = $cities;
        $this->load->view('weatherinfo', $data);
	}
}
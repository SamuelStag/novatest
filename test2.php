<?PHP
class TrendDtector{
	public $number_box = array();

	function __construct($number_box){
		$this->$number_box = $number_box;
	}

	function detect_up_trend(){

		$array =();
	for ($i=0; $i <sizeof($this->number_box); $i++) { 
		if($> 2){
			$f = $this->number_box[$i-2];
			$s = $this->number_box[$i-1];
			$t = $this->number_box[$i];
			if($f > $s && $s > $t){
				array_push($array, "Uptrend-> ".$f);
			}
		}

	}


	for ($i=sizeof($this->number_box); $i >sizeof($this->number_box); $i--) { 
		if($< 2){
			$f = $this->number_box[$i+2];
			$s = $this->number_box[$i+1];
			$t = $this->number_box[$i];
			if($f > $s && $s > $t){
				array_push($array, "downtrend-> ".$f);
			}
		}

	}

return $array;
	}



}

?>
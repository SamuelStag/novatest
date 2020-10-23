<?PHP

 class Cipher{
 public $word ="";
 	 function  __construct($word){
 	 	$this->word =$word;
 	 }


 	 function encode(){

 	 	$result ="";
 	 	for($x=0; $x<strlen($this->word); $x++){
 	 		$tmp_char = strtolower($this->word[$x]);
 	 		if($tmp_char=='a'){
 	 			$tmp_char='e';
 	 		}elseif($tmp_char=='e'){
 	 			$tmp_char='a';
 	 		}
 	 		
 	 		if($tmp_char=='o'){
 	 			$tmp_char='u';
 	 		}elseif($tmp_char=='u'){
 	 			$tmp_char='o';
 	 		}

 	 		if($tmp_char=='p'){
 	 			$tmp_char='b';
 	 		}elseif($tmp_char=='b'){
 	 			$tmp_char='p';
 	 		}
 	 		if($tmp_char=='t'){
 	 			$tmp_char='d';
 	 		}elseif($tmp_char=='d'){
 	 			$tmp_char='t';
 	 		}
 	 		if($tmp_char=='s'){
 	 			$tmp_char='c';
 	 		}elseif($tmp_char=='c'){
 	 			$tmp_char='s';
 	 		}
 	 		if($tmp_char=='j'){
 	 			$tmp_char='g';
 	 		}elseif($tmp_char=='g'){
 	 			$tmp_char='j';
 	 		}
 	 		if($tmp_char=='m'){
 	 			$tmp_char='n';
 	 		}elseif($tmp_char=='n'){
 	 			$tmp_char='m';
 	 		}
 	 			if($x > 0 && $tmp_char==@$result[$x-1]){
 	 				$result = @substr($result, 0, -1);
 	 				$result.=strtoupper($tmp_char);
 	 			}else{

 	 				$result.=$tmp_char;
 	 			}
 	 		
 	 		
 	 	}



 	 	return $result;
 	 }



 	 function decode(){

 	 	$result ="";
 	 	for($x=0; $x<strlen($this->word); $x++){
 	 		$tmp_char =$this->word[$x];
 	 		if($tmp_char=='a'){
 	 			$tmp_char='e';
 	 		}elseif($tmp_char=='e'){
 	 			$tmp_char='a';
 	 		}
 	 		
 	 		if($tmp_char=='o'){
 	 			$tmp_char='u';
 	 		}elseif($tmp_char=='u'){
 	 			$tmp_char='o';
 	 		}

 	 		if($tmp_char=='p'){
 	 			$tmp_char='b';
 	 		}elseif($tmp_char=='b'){
 	 			$tmp_char='p';
 	 		}
 	 		if($tmp_char=='t'){
 	 			$tmp_char='d';
 	 		}elseif($tmp_char=='d'){
 	 			$tmp_char='t';
 	 		}
 	 		if($tmp_char=='s'){
 	 			$tmp_char='c';
 	 		}elseif($tmp_char=='c'){
 	 			$tmp_char='s';
 	 		}
 	 		if($tmp_char=='j'){
 	 			$tmp_char='g';
 	 		}elseif($tmp_char=='g'){
 	 			$tmp_char='j';
 	 		}
 	 		if($tmp_char=='m'){
 	 			$tmp_char='n';
 	 		}elseif($tmp_char=='n'){
 	 			$tmp_char='m';
 	 		}

 	 			if(ctype_upper($tmp_char)){

 	 				$tmp_char = strtolower($tmp_char.$tmp_char);
 	 				$result.=$tmp_char;
 	 			}else{

 	 				$result.=$tmp_char;
 	 			}
 	 		
 	 		
 	 	}



 	 	return $result;
 	 }

 }

 $app = new Cipher("haLu wurlt");
// echo$app->encode();
echo $app->decode();

?>

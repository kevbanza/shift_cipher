
<?php 
	mb_internal_encoding('UTF-8');
	//*******************encryption************************//

	//
	$alpha="abcdefghijklmnopqrstuvwxyz";
	$alphabet=$alpha.$alpha;
	
	
	
	

	//
	if(isset($_POST['cryptext'])){
		$mot=$_POST['cryptext'];
		$mot=mb_strtolower($mot);
		$taillemot=mb_strlen($mot);
		
		$step=$_POST['step'];
		
		
		//
		
		$taillemot=$taillemot+1;
		//
		$conteurfinal="";


		for($i=1; $i<$taillemot; $i++){
			
			
			$coup=mb_substr($mot,$i-1,1);
			if(mb_stristr($alpha, $coup) === FALSE){
				$conteurfinal=$conteurfinal.$coup;
			}
			else{
				$placedep= mb_strpos($alpha, $coup);
				$placefinal= $placedep+$step;
				$conteurtemp= mb_substr($alphabet, $placefinal, 1);
				$conteurfinal=$conteurfinal.$conteurtemp;
				
			}
			
		}
		header('Location: reponse.php?text='.mb_strtolower($mot).'&resul='.mb_strtoupper($conteurfinal));
		echo mb_strtoupper($conteurfinal);
		

	}
//*******************fin encryption************************//


	
//*******************strart decryption ********************//
	if(isset($_POST['decryptext'])){
			$mot=$_POST['decryptext'];
		$mot=mb_strtolower($mot);
		$taillemot=mb_strlen($mot);
		 
		$step=$_POST['step'];
		
		
		//
		
		$taillemot=$taillemot+1;
		//
		$conteurfinal="";


		for($i=1; $i<$taillemot; $i++){
			
			
			$coup=mb_substr($mot,$i-1,1);
			
			
			if(mb_stristr($alpha, $coup) === FALSE){
				$conteurfinal=$conteurfinal.$coup;
			}
			
			else{

				$placedep= mb_strpos($alpha, $coup);
				$placefinal= $placedep-$step;
				$conteurtemp= mb_substr($alphabet, $placefinal, 1);
				$conteurfinal=$conteurfinal.$conteurtemp;
				
			}
			
		}
			
			header('Location: reponse.php?text='.mb_strtoupper($mot).'&result='.mb_strtolower($conteurfinal));
			echo strtolower($conteurfinal);
	}
	//******************end decryption**********************//
?>
</body>
</html>
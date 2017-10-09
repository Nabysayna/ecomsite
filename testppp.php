<?php 

    header('Access-Control-Allow-Origin: *');

    require 'remoteDataAccess.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $daoInstance = new RemoteDataAccess();

    $result = $daoInstance->getPetitesAnnonces();
	$categorieImg = [] ;
	$i = 0 ;
	foreach ($result as $categorie) {
		$categorieImg[$i] = $categorie["img_link"] ;
		$i++ ;
		echo "Categorie ".$i." ".$categorie["img_link"]."<br />" ;
	}

	$rowNumber = 0 ;

	if( sizeof($categorieImg)%4==0 )
		$rowNumber = $rowNumber + (sizeof($categorieImg)/4) ;
	else
		$rowNumber = $rowNumber + (sizeof($categorieImg)/4) + 1 ;

	$k = 0 ;
	for($i=1 ; $i<=$rowNumber ; $i++){
		echo "-----------------------------------------------------"."<br />" ;
		for($j=$k ; $j<$k+4 ; $j++){
			if( isset($categorieImg[$j]) )
				echo "Categorie ".$j." ".$categorieImg[$j]."<br />" ;
		}
		echo "-----------------------------------------------------"."<br />" ;
		$k = $k+4 ;
	}

?>

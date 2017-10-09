<?php 


	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	class RemoteDataAccess{

		private $_servername = "localhost";
		private $_connexion ;

		public function __construct(){

			try {
				    $this->_connexion = new PDO("mysql:host=$this->_servername;dbname=dbmbirmi",'root','fasbir');
				    $this->_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    }
			catch(PDOException $e)
			    {
				    echo "Connection failed: " . $e->getMessage();
			    }
		}

		public function getCategories(){
			$sql = "SELECT * from categories" ;
			
			try{
				$result = $this->_connexion->query( $sql ) ;
				return $result ;
			}catch(PDOException $e)
			{
				echo $sql."<br>".$e->getMessage();
			}
		}

		public function getPetitesAnnonces(){
			$sql = "SELECT * from articles where categorie like '%\"type\":\"petiteannonce\"%' " ;
			
			try{
				$result = $this->_connexion->query( $sql ) ;
				return $result ;
			}catch(PDOException $e)
			{
				echo $sql."<br>".$e->getMessage();
			}
		}

		public function describeTable($tableName){
			$sql = "DESC ".$tableName ;
			try{
				$result = $this->_connexion->query( $sql ) ;
				//echo "Successfull!";
				return $result ;
			}catch(PDOException $e)
			{
				//echo $sql."<br>".$e->getMessage();
			}

		}

		public function getDistinctDate($tableName){
			$sql = "SELECT DISTINCT created_at from ".$tableName;
			
			try{
				$result = $this->_connexion->query( $sql ) ;
				$tabDate = [''];
				foreach ($result as $row) {
					array_push($tabDate, explode(" ",$row["created_at"])[0]) ;
				}
				$tabDate = array_unique($tabDate);
				//echo "Successfull!";
				return $tabDate ;
			}catch(PDOException $e)
			{
				//echo $sql."<br>".$e->getMessage();
			}			
		}

		public function createTable($tableName, $colNames, $colTypes){
			$sql = "CREATE TABLE ".$tableName." ( id INT auto_increment primary key";

			for ( $i = 0 ; $i  < count($colNames) ; $i++ ){
				$sql = $sql.", ".$colNames[$i]." ".$colTypes[$i] ;
			}
			$sql = $sql.")" ;

			try{
				$this->_connexion->exec( $sql ) ;
				//echo "Successfull!";
			}catch(PDOException $e)
			{
				//echo "Here we go";
				//echo $sql."<br>".$e->getMessage();
			}
		}

		public function insertData($tableName, $concernedColNames, $valuesToAdd){
			$sql = "INSERT INTO $tableName (".$concernedColNames[0];
			$sqlComplete = " VALUES ('$valuesToAdd[0]'";
			for ( $i = 1 ; $i  < count($concernedColNames) ; $i++ ){
				$sql = $sql.", ".$concernedColNames[$i];
				$sqlComplete = $sqlComplete.", '$valuesToAdd[$i]'";
			}
			$sql = $sql.") ".$sqlComplete.")";
			
			try{
				$this->_connexion->exec( $sql ) ;
				//echo "<br>"."Successfull Insertion!";
			}catch(PDOException $e)
			{
				//echo $sql."<br>".$e->getMessage();
			}
		}

		public function updateData($tableName, $colsToUpdateNames, $newValues, $referedColName, $conditionalValue){

			$sql = "UPDATE ".$tableName." SET ".$colsToUpdateNames[0]."='$newValues[0]'";
			$condition = $referedColName."='$conditionalValue'";
			for ( $i = 1 ; $i  < count($colsToUpdateNames) ; $i++ ){
				$sql = $sql.", ".$colsToUpdateNames[$i]."='$newValues[$i]'" ;
			}
			$sql = $sql." where ".$condition;
			
			try{
				$this->_connexion->exec( $sql ) ;
				//echo " Updated Successfully! ";
			}catch(PDOException $e)
			{
				//echo $sql."<br>".$e->getMessage();
			}
		}

		public function readOne($tableName, $colsToSelect, $referedColName, $conditionalValue){

			$sql = "SELECT ".$colsToSelect[0] ;
			$fromPart = " from ".$tableName ;
			$condition = " where ".$referedColName."='$conditionalValue'" ;
			for ( $i = 1 ; $i  < count($colsToSelect) ; $i++ ){
				$sql = $sql.", ".$colsToSelect[$i];
			}

			$sql = $sql.$fromPart.$condition ;
			
			try{
				$result = $this->_connexion->query( $sql ) ;
				//echo "Successfull Read! <br>";
				return $result ;
			}catch(PDOException $e)
			{
				//echo $sql."<br>".$e->getMessage();
			}

		}

		public function readAll($tableName){
			$sql = "SELECT * from ".$tableName;
			
			try{
				$result = $this->_connexion->query( $sql ) ;
				//echo "Successfull!";
				return $result ;
			}catch(PDOException $e)
			{
				//echo $sql."<br>".$e->getMessage();
			}

		}


		public function readByDate($tableName, $dateToFetchFor){
			$dateToFetchFor = $dateToFetchFor."%" ;
			$sql = "SELECT * from ".$tableName." where created_at LIKE '$dateToFetchFor'" ;
			
			try{
				$result = $this->_connexion->query( $sql ) ;
				//echo "Successfull!";
				return $result ;
			}catch(PDOException $e)
			{
				//echo $sql."<br>".$e->getMessage();
			}
		}

		public function canBeListed($tableName){
			$res = $this->readAll($tableName);
			foreach ($res as $row) {
				if ( !empty($row) and isset($row["created_at"]) ) 
					return true ;
			}
			return false ;
		}

		public function getRecordsCount($tabName){
			$result = $this->_connexion->query("select count(*) as total from ".$tabName) ;
			foreach ($result as $row)
				return $row['total'] ;
		}

		public function deleteRecord($tabName, $conditionalValue){
			$sql = "DELETE from ".$tabName." WHERE chipid='$conditionalValue'" ;
			$this->_connexion->exec($sql) ;
		}

		public function closeConnexion(){
			$this->_connexion->close();
		}

	}

?>
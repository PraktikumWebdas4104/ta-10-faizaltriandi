<?php
	class model{
		
		function __construct(){
			
		 $this ->conn = mysqli_connect('localhost','root','','ta10');	
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			
			$query="SELECT * FROM mahasiswa";
return $this->execute($query);
		}
		
		function selectMhs($nim){
			
			$query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $travelling ){
			
			
			$query=	"UPDATE mahasiswa SET nama= '$nama', angkatan= '$angkatan', fakultas = '$fakultas', prodi = '$prodi', film = '$film', travelling = '$travelling' WHERE nim = '$nim'";
return $this->execute($query);
		}
		
		function deleteMhs($nim){
			
			$query= "DELETE  FROM mahasiswa WHERE nim = '$nim'";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $travelling ){
			
			
			$query="INSERT INTO mahasiswa (nim, nama, angkatan, fakultas, prodi, film, travelling) VALUES ('$nim', '$nama', '$angkatan', '$fakultas', '$prodi', '$film', '$travelling' )";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		
		function __destruct(){
		}
	}
?>
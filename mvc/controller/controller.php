<?php
	//include class model
	include "model/model.php";
	
	class controller{
		//variabel public
		public $model;
		
		
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model

		}
		
		function index(){
			
			$data = $this->model->selectAll();
			include "view/view.php"; 
		}
		
		function viewEdit($nim){
			$data = $this->model->selectMHS($nim);
			
			
			$row = $this->model->fetch($data); 
			include "view/view_edit.php"; 
		}
		
		function viewInsert(){
			include "view/view_add.php"; 
		}
		
		
		function update(){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$angkatan = $_POST['angkatan'];
			$fakultas = $_POST['fakultas'];
			$prodi = $_POST['prodi'];
			$film = $_POST['film'];
			$travelling = $_POST['travelling'];

			$this->model->updateMhs($nim,$nama,$angkatan,$fakultas,$prodi, $film, $travelling );
			header("location:index.php");
		}
		
		function delete($nim){
			
			$this->model->deleteMhs($nim);
			header("location:index.php");
		}
		
		function insert(){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$angkatan = $_POST['angkatan'];
			$fakultas = $_POST['fakultas'];
			$prodi = $_POST['prodi'];
			$film = $_POST['film'];
			$travelling = $_POST['travelling'];
			
			
			
			$this->model->insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $travelling );
			header("location:index.php");
		}
		
		function __destruct(){
		}
	}
?>
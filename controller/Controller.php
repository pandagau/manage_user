<?php 
	include_once("C:/xampp/htdocs/workspaces/oop/manage_user/model/Model.php");  
	class Controller {  
	    var $user_model = '';   
	    function Controller(){    
	          $this->user_model = new Model();
	     } 
	     function conn(){
	     	$this->user_model->UserModel();
	     }
	     public function invoke(){  
	   
	        //===============START SAVE=================
	        if(isset($_POST) && $_POST){
	        	if(isset($_POST['btn_save'])){
	        		if($_FILES["avatar"]["error"]>0){    //echo "Error".$_FILES["avatar"]["error"]."<br/>";
	                } 
	                else {
	                    if (file_exists("folder/".$_FILES["avatar"]["tmp_name"])){//echo "File exists!!";
	                    } else {
	                            move_uploaded_file(($_FILES["avatar"]["tmp_name"]), "folder/".$_FILES["avatar"]["name"]);
	                    } 
	                }
	                $id = '';
		            $link = "folder/".$_FILES["avatar"]["name"];
		            $firstname = $_POST['first_name'];
		            $lastname = $_POST['last_name'];
		            $fullname = $_POST['full_name'];
		            $var = $_POST['bday'];
					$d = str_replace('/', '-', $var);
					$date = date('Y-m-d', strtotime($d));
		            $gender = $_POST['gender'];
		            $email = $_POST['email'];
	        		$this->user_model->addUser($id,$firstname, $lastname, $fullname, $date, $gender, $email, $link);
	        	} elseif (isset($_POST['btn_update'])) {
	        		if($_FILES && $_FILES["avatar"]["error"] == 0){
	        			if (file_exists("folder/".$_FILES["avatar"]["tmp_name"])){
	                        echo "File exists!!";
	                    } else {
	                            move_uploaded_file(($_FILES["avatar"]["tmp_name"]), "folder/".$_FILES["avatar"]["name"]);
	                            $_POST['avatar'] = "folder/".$_FILES["avatar"]["name"];

	                    } 
	        		}
	        		if(isset($_POST['bday'])){
	        			$var = $_POST['bday'];
			            $d = str_replace('/', '-', $var);
			            $date = date('Y-m-d', strtotime($d));
			            $_POST['bday'] = $date;
	        		}
	        		
		            // $id = $_POST['edit_id'];
		            // $firstname = $_POST['firstname'];
		            // $lastname = $_POST['lastname'];
		            // $fullname = $_POST['fullname'];
		            // $var = $_POST['bday'];
		            // $d = str_replace('/', '-', $var);
		            // $date = date('Y-m-d', strtotime($d));
		            // $gender = $_POST['gender'];
		            // $email = $_POST['email'];
		            // $link = "folder/".$_FILES["avatar"]["name"];
		            $this->user_model->editAnUser($_POST);
	        		/*exit();*/
	        	} else {

	        	}
		        	
	        }
	        if (isset($_GET['delete_id'])) {
        		$this->user_model->deleteAnUser($_GET['delete_id']);
        	}
	        $users = $this->user_model->listOfUsers(); 
           	include 'view/php/user_list.php';  
	    }  
	}  
 ?>
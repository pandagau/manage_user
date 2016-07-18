<?php 
include_once("C:/xampp/htdocs/workspaces/oop/manage_user/model/Database.php"); 
    class Model{ 
        var $dao = '';
        //khởi tạo kết nối csdl
        function Model(){
            $this->dao = new Database();
        }
        function UserModel(){
            $this->dao->con_database('localhost', 'root', '', 'demo');
        }
        //lấy tất cả các sản phẩm
        function listOfUsers(){
            $this->dao->setQuery("SELECT * FROM Users ORDER BY id DESC");
            $result = $this->dao->loadAllUser();
            return $result;
        }
        function addUser($id,$firstname, $lastname, $fullname,$date, $gender, $email, $avatar){
            $this->dao->setQuery("INSERT INTO Users (id, firstname, lastname, fullname,datet, gender, email, avatar) VALUES ('$id','$firstname', '$lastname', '$fullname','$date', '$gender', '$email', '$avatar')");
            $this->dao->query();
        }
        function editAnUser($data){
            $data['id'] = $data['edit_id'];
            $data['datet'] = $data['bday'];
            unset($data['edit_id']);
            unset($data['bday']);
            $sql = "";
            foreach ($data as $key => $value) {
                if($value){
                    $sql .= "$key = '$value',";
                }
            }
            $sql = trim($sql,','); 
            $sql = "UPDATE Users SET $sql WHERE id=".$data['id'];
            /*echo $sql;
            exit();*/
            $this->dao->setQuery($sql);
            $this->dao->query();
        }
        function deleteAnUser($id){
            $this->dao->setQuery("DELETE FROM Users WHERE id='$id'");
            $this->dao->query();
        } 
        //lấy sản phẩm dựa theo id
        function listAnUser($id){
            $this->dao->setQuery("SELECT * FROM Users WHERE id = '$id'");
            $result = $this->dao->loadAnUser();
            return $result;
        }    
    }  
    /*$a = new Model();
    $a->UserModel();
    $a->listOfUsers();*/
 ?>
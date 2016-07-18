<?php 
	class Database{
		// 1.khai báo
		var $_sql = '';
		var $_connection = '';
		var $_cursor = null;
		var $cur = '';
		// 2.phương thức khởi tạo lớp, kết nối tới CSDL 
		function con_database($server_name,$sql_name,$sql_pass,$db_name){
			$this->_connection = mysqli_connect($server_name,$sql_name,$sql_pass,$db_name);
			mysqli_set_charset( $this->_connection, 'utf8');
			if (!$this->_connection) {
			    die("Kết nối thất bại: " . mysqli_connect_error());
			}
			else{
				//echo "Kết nối thành công<br>";
			}
		}
		// 3.tạo và gán câu lệnh truy vấn
		function setQuery($sql){
			$this->_sql = $sql;
		}
		// 4. thực thi câu lệnh truy vấn
		function query(){
			$this->_cursor = mysqli_query($this->_connection, $this->_sql);
			return $this->_cursor;
		}
		// 5. lấy các dòng trong trong CSDL và gán vào cho mảng các đối tượng
		// dành cho danh sách chung và search
		function loadAllUser(){
			if (!$this->query()) {
				echo 'hscfise';
				//không truy vấn được
				return [];
			}else{
				$array = array();
				//echo "Truy vấn được";
				//số record
				if (mysqli_num_rows($this->_cursor) > 0){
			    // Sử dụng vòng lặp while để lặp kết quả
					while($row = mysqli_fetch_assoc($this->_cursor)) {
						/*echo '<pre>';
					    print_r($row);*/
					    $array[] = $row;
					}
					
				} /*
				echo '<pre>';
				print_r($array);*/
				return $array;
				/*while ($row = mysqli_fetch_row($this->query())) {
					printf($row)
				}*/
				//mysql_freeresult($this->cur);
				
			}
		}
		// 6. lấy một dòng thỏa điều kiện trong CSDL và gán cho đối tượng
		// dành cho edit và delete
		function loadAnUser(){
			if (!($cur == $this->query)) {
				//không truy vấn được
				return null;
			}
			$a = null;
			while ($user = mysql_fetch_object($cur)) {
				$a = $user;
			}
			mysql_freeresult($cur);
			return $a;
		}
		// 7. ngắt kết nối
		function disconnect(){
			mysqli_close($this->connection);
		}
		
	}
	/*$a = new Database();
	$a->con_database('localhost','root','','demo');
	$a->setQuery("SELECT firstname, lastname FROM Users ORDER BY id DESC");
	$a->loadAllUser();*/
 ?>
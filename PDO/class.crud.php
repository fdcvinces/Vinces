<?php

class crud
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}

	public function createUser($first_name, $middle_name, $last_name, $gender, $birthday, $created_date, $modified_date, $created_ip,$modified_ip)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO users(first_name, middle_name, last_name, gender, birthday, created_date, modified_date, created_ip, modified_ip) VALUES(:first_name, :middle_name, :last_name, :gender, :birthday, :created_date, :modified_date, :created_ip, :modified_ip)");

			$query->bindparam(":first_name",$first_name);
			$query->bindparam(":middle_name",$middle_name);
			$query->bindparam(":last_name",$last_name);
			$query->bindparam(":gender",$gender);
			$query->bindparam(":birthday",$birthday);
			$query->bindparam(":created_date",$created_date);
			$query->bindparam(":modified_date",$modified_date);
			$query->bindparam(":created_ip",$created_ip);
			$query->bindparam(":modified_ip",$modified_ip);

			$query->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}

	}

	public function createProduct($product_id, $name, $description, $type, $created_date, $modified_date, $created_ip, $modified_ip)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO products (product_id, name, description, type, created_date, modified_date, created_ip, modified_ip) VALUES(:product_id, :name, :description, :type, :created_date, :modified_date, :created_ip, :modified_ip)");

			$query->bindparam(":product_id",$product_id);
			$query->bindparam(":name",$name);
			$query->bindparam(":description",$description);
			$query->bindparam(":type",$type);
			$query->bindparam(":created_date",$created_date);
			$query->bindparam(":modified_date",$modified_date);
			$query->bindparam(":created_ip",$created_ip);
			$query->bindparam(":modified_ip",$modified_ip);

			$query->execute();
			return true;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}

	//get data into html fields
	public function getID($id)
	{
		$query = $this->db->prepare("SELECT * FROM users WHERE id=:id");
		$query->execute(array(":id"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	//get data into html fields
	public function getID1($id)
	{
		$query = $this->db->prepare("SELECT * FROM products WHERE id=:id");
		$query->execute(array(":id"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function updateUser($id,$first_name, $middle_name, $last_name, $gender, $birthday, $created_date, $modified_date, $created_ip,$modified_ip)
	{
		try
		{
			$query=$this->db->prepare("UPDATE users SET first_name=:first_name,
												middle_name=:middle_name,
												last_name=:last_name,
												gender=:gender,
												birthday=:birthday,
												created_date=:created_date,
												modified_date=:modified_date,
												created_ip=:created_ip,
												modified_ip=:modified_ip
												WHERE id=:id");
			
			
			$query->bindparam(":first_name",$first_name);
			$query->bindparam(":middle_name",$middle_name);
			$query->bindparam(":last_name",$last_name);
			$query->bindparam(":gender",$gender);
			$query->bindparam(":birthday",$birthday);
			$query->bindparam(":created_date",$created_date);
			$query->bindparam(":modified_date",$modified_date);
			$query->bindparam(":created_ip",$created_ip);
			$query->bindparam(":modified_ip",$modified_ip);

			$query->bindparam(":id",$id);

			$query->execute();
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function updateProduct($id,$product_id, $name, $description, $type, $created_date, $modified_date, $created_ip,$modified_ip)
	{
		try
		{
			$query=$this->db->prepare("UPDATE products SET product_id=:product_id,
												name=:name,
												description=:description,
												type=:type,
												created_date=:created_date,
												modified_date=:modified_date,
												created_ip=:created_ip,
												modified_ip=:modified_ip
												WHERE id=:id");
			
			
			$query->bindparam(":product_id",$product_id);
			$query->bindparam(":name",$name);
			$query->bindparam(":description",$description);
			$query->bindparam(":type",$type);
			$query->bindparam(":created_date",$created_date);
			$query->bindparam(":modified_date",$modified_date);
			$query->bindparam(":created_ip",$created_ip);
			$query->bindparam(":modified_ip",$modified_ip);

			$query->bindparam(":id",$id);

			$query->execute();
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function deleteUser($id)
	{
		$query = $this->db->prepare("DELETE FROM users WHERE id=:id");
		$query->bindparam(":id",$id);

		$query->execute();
		return true;

	}

	public function deleteProduct($id)
	{
		$query = $this->db->prepare("DELETE FROM products WHERE id=:id");
		$query->bindparam(":id",$id);

		$query->execute();
		return true;
	}
	//dapat string ipasa ngari
	// public function searchUser($queryString)
	// {
	// 	//$query = $this->db->prepare("SELECT * FROM users WHERE (first_name like :queryString or last_name like :queryString) ");
		
	// 	// $query = $this->db->prepare("SELECT * FROM users WHERE (first_name like :queryString)");
	// 	// $queryString = '%' . $queryString . '%';
	// 	// $query->bindparam(":queryString",$queryString);
	// 	// $query->execute();
	// 	// return true;
	// 	// }

 //    $query = "SELECT * FROM users WHERE first_name like :queryString or last_name like :queryString ";

 //    $sth = $this->prepare($query);
 //    // $queryString = $queryString;
 //    $sth->bindParam('queryString', $queryString, PDO::PARAM_STR);

 //    $sth->execute();

 //    $result = $sth->fetchAll(PDO::FETCH_OBJ);

 //    if(empty($result) or $result == false)
 //       return array();
 //    else
 //        return $result;
	// }


	public function dataviewInsertedUser($query)
	{
			
              
		$query = $this->db->prepare($query);
		$query->execute();
	
		if($query->rowCount()>0)
		{
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print($row['id']); ?></td>
                <td><?php print($row['first_name']); ?></td>
                <td><?php print($row['middle_name']); ?></td>
                <td><?php print($row['last_name']); ?></td>
                <td><?php print($row['gender']); ?></td>
                <td><?php print($row['birthday']); ?></td>
                <td><?php print($row['created_date']); ?></td>
                <td><?php print($row['modified_date']); ?></td>
                <td><?php print($row['created_ip']); ?></td>
                <td><?php print($row['modified_ip']); ?></td>
               
               
                <td align="center">
                <a href="../PDO/editUser.php?edit_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td> 
                <td align="center">
                <a href="../PDO/deleteUser.php?delete_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
               <!--   <td align="center">
                <a href="../Enroll/enrollStudent.php?enroll_id=<?php  print($row['EdpCode']); ?>"><i class="glyphicon glyphicon-plus"></i></a>
                </td> -->
                
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}

	public function dataviewInsertedProduct($query)
	{
			
              
		$query = $this->db->prepare($query);
		$query->execute();
	
		if($query->rowCount()>0)
		{
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print($row['id']); ?></td>
                <td><?php print($row['product_id']); ?></td>
                <td><?php print($row['name']); ?></td>
                <td><?php print($row['description']); ?></td>
                <td><?php print($row['type']); ?></td>
                <td><?php print($row['created_date']); ?></td>
                <td><?php print($row['modified_date']); ?></td>
                <td><?php print($row['created_ip']); ?></td>
                <td><?php print($row['modified_ip']); ?></td>
       
               
                <td align="center">
                <a href="../PDO/editProduct.php?edit_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td> 
                <td align="center">
                <a href="../PDO/deleteProduct.php?delete_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
               <!--   <td align="center">
                <a href="../Enroll/enrollStudent.php?enroll_id=<?php  print($row['EdpCode']); ?>"><i class="glyphicon glyphicon-plus"></i></a>
                </td> -->
                
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}



	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$query = $this->db->prepare($query);
		$query->execute();
		
		$total_no_of_records = $query->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	

}
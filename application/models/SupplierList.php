<?php 

class SupplierList extends CI_Model
{
	
	function __construct(){
		parent:: __construct();
	} 

	
	public function add($name1,$address1,$products1,$contactper1,$contactnumber1)
	{
		$query= "INSERT INTO tbl_supplier (Name,Address,Product,Contact_Person,Contact_Number) VALUES ('$name1','$address1','$products1','$contactper1','$contactnumber1')";
		return $this->db->query($query);
	}

	public function read(){
		$query= "SELECT * FROM tbl_supplier";
		return $this->db->query($query);
	}

	public function delete($id1){
		$query= "DELETE FROM tbl_supplier WHERE suppID ='$id1' ";
		return $this->db->query($query);
	}

	public function edit($editidd,$editnamee,$editaddresss,$editproductss,$editcontactperr,$editcontactnumm)
	{
		$query= "UPDATE tbl_supplier SET Name='$editnamee', Address='$editaddresss', Product='$editproductss', Contact_Person='$editcontactperr', Contact_Number='$editcontactnumm' WHERE suppID='$editidd' ";
		return $this->db->query($query);
	}
}
?>
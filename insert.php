<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("db_counselling",$con);


   if(isset($_POST['btnsave'])){
   	$district=$_POST['txtdistrict'];
	     
	

   	$ins="insert into tbl_district(district_name) values('".$district."')";
   	mysql_query($ins,$con);
   	header("Location:insert.php");
    echo "<script>alert('Inserted!!')</script>";
   
  }
?>




<!DOCTYPE html>
<html>
<head>
	<title>district</title>
	
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;

}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color:#f5f5f5;}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;

  box-sizing: border-box;
}
</style>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #7db880;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #ccc9c4}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#btnrow{

	text-align: right;

}
</style>

</head>
<body>
	
	<br>
	<br>
	
	<form method="post">
		<table cellpadding="10" border=1 align="center">
			<tr>
				<th>
					Add District
				</th>
				<td>
					<input type="text" name="txtdistrict" id="txtdistrict" value="<?php echo $distname; ?>" placeholder="Enter district name " pattern="[a-zA-Z]{4,20}" title="only alphabets can be entered" required="">
				</td>

			</tr>
			<tr>
				<td colspan="2" id="btnrow">
                    <input type="submit" class="button" name="btnsave" value="save"/>
				    
			    
			    	<input type="reset" class="button" name="btncancel" value="cancel"/>
			    	
</td>

		</table>
	</form>
	<br>
	<br>
	<br>
	<table border="2px solid" cellpadding="3px">
	<tr>
		<th>S no</th>
		<th>District name</th>
		<th colspan="2">Action</th>
		
		
	</tr>
	<?php
	  $sel="select * from tbl_district";
	  $data=mysql_query($sel,$con);
	  $i=0;
	  while($row=mysql_fetch_array($data)){
	  	$i=$i+1;
	?> 
	<tr>
		<td>
			<?php echo $i; ?>
		</td>
		<td>
			<?php echo $row["district_name"] ; ?>
		</td>
	
	</tr>
    <?php
	  }
	 ?>
</table>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<?php
include("Footer.php");
?>
</body>
</html>
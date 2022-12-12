<?php 
	  include '../controllers/UserController.php';
$id="";
	$err_id="";
    $username = "";
	$err_username="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
    $conpass="";
    $err_conpass="";
	
	$utype="";
	$err_utype="";
	
	
	$hasError=false;
	
	$utype = array("User","Admin");
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["username"])){
			$err_username="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["username"]) <=2){
			$err_username="Name Must be greater than ";
			$hasError = true;
		}
		else{
			$username=htmlspecialchars($_POST["username"]);
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}
		else{
			$email=$_POST["email"];
		}
        if(empty($_POST["id"])){
			$err_phone="Id Required";
			$hasError = true;
		}
		
		else{
			$phone=$_POST["phone"];
		}
       

		if(!isset($_POST["utype"])){
			$err_bloodgroup = "User type Required";
			$hasError = true;
		}
		else{
			$bloodgroup = $_POST["utype"];
		}

        if(empty($_POST["password"] || $_POST["conpass"])){

            $err_password="password Required";
            $err_password="confirm password Required";

            $hasError=true;

        }
        elseif($_POST["password"] === $_POST["conpass"]){
            $password=$_POST["password"];
            $conpass=$_POST["conpass"];

        }
        else{
            $err_conpass="Password did not match";
            $err_password="Password did not match";
			$hasError = true;
            
        }

		if(!$hasError){

			}
		}
		
		
?>
<html>
	<head></head>
	<body >
		
        <form id="form" class="box" method="POST" action="" enctype="">
				<table >
				<tr>
						<td><legend><b>ID: </b></legend></td>
						<td><input type="number" name="id" value="<?php echo $id;?>" placeholder="ID"></td>
                        <td><span><?php echo $err_id;?></span></td>
					</tr>

					<tr>
						<td><legend><b>Password: </b></legend></td>
						<td><input type="password" name="password" value="<?php echo $password;?>"placeholder="Password"></td>
                        <td><span><?php echo $err_password;?></span></td>
					</tr>
                    <tr>
						<td><legend><b>Confirm Password: </b></legend></td>
						<td><input type="password" name="conpass" value="<?php echo $conpass;?>" placeholder="Confirm Password"></td>
                        <td><span><?php echo $err_conpass;?></span></td>
					</tr>
					<tr>
						<td><legend><b>Name: </b></legend></td>
						<td><input type="text" name="username" value="<?php echo $username;?>" placeholder="Name"></td>
						<td><span><?php echo $err_username;?></span></td>
						
					</tr>
					<tr>
						<td><legend><b>Email: </b></legend></td>
						<td><input type="email" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>

					<tr>
						<td><legend><b>User Type: </b></legend> </td>
						<td>
							<select name="usertype"value="<?php echo $utype;?>">
								<option selected disabled>--Select--</option>
								<?php
									foreach($utype as $u){
										if($utype == $u)
											echo "<option selected>$u</option>";
										else
											echo "<option>$u</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_utype;?></span></td>
					</tr>
					
                    <tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
                                </tr>

					
				</table>
			</form>
		
	</body>
</html>

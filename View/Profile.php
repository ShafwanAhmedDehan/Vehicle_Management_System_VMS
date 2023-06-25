<?php
	session_start();
    require ('../Control/Profilecontrol.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../Design/design.css">
</head>
<body>
    <div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
        <div class="id100">
        <table>
            <tr>
                <td></td>
                <td> 
                    <center>
                        <fieldset style="width: 800px; padding: 10px;">
                            <legend><b>Profile Details :</b></legend>
                                <form>
                                    <table style="width:150%;">
                                        <tr>
                                            <td>
                                                <center><label for="fname"><b>First Name</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                            	<?php
                                            		echo "<b>".$row["fname"]."</b>";
                                            	?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label><b>Last Name</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <?php
                                            		echo "<b>".$row["lname"]."</b>";
                                            	?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label><b>Gender</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <?php
                                            		echo "<b>".$row["gender"]."</b>";
                                            	?>
                                            </td>                      
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label><center><b>Email/Phone no</b></center></label>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <?php
                                            		echo "<b>".$row["emailphn"]."</b>";
                                            	?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <center><label><b>NID</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <?php
                                            		echo "<b>".$row["nid"]."</b>";
                                            	?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label><b>User</b></label></center>
                                            </td>
                                        <td><center><b>:</b></center></td>
                                        <td>
                                            <?php
                                            		echo "<b>".$row["usertype"]."</b>";
                                            	?>
                                        </td>                      
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label><center><b>Present Address</b></center></label>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                            	<?php
                                            		echo "<b>".$row["address"]."</b>";
                                            	?>
                                            		
                                            	</td>
                                        </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </form>
                        </fieldset>
                    </center>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
        </div>
        <div class="id02">
        <?php
            if($_SESSION['login']==1)
            {
                echo "<a href=\"http://localhost/WebTechProject/Model/Users/Admin.php\">Back</a>";
            }
            elseif($_SESSION['login']==2)
            {
                echo "<a href=\"http://localhost/WebTechProject/Model/Users/Driver.php\">Back</a>";
            }
            else
            {
                echo "<a href=\"http://localhost/WebTechProject/Model/Users/General.php\">Back</a>";
            }
            
        ?>
        </div>
    </center>
    <div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>
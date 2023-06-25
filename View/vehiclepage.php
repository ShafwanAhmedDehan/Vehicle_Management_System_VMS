<?php
	session_start();
    require ('../Control/VehicleSearchResultAction.php');
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
                        <div class="id12"><fieldset>
                            <legend style="font-size: 20px;"><b>Profile Details :</b></legend>
                                <form>
                                    <table style="width:150%;">
                                        <tr>
                                            <td>
                                                <center><label for="fname"><b>First Name</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                            	<?php
                                            		echo "<b>".$row01["fname"]."</b>";
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
                                            		echo "<b>".$row01["lname"]."</b>";
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
                                                <center><label><b>Vehicle Number</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <?php
                                            		echo "<b>".$row["vnumber"]."</b>";
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
                                            		echo "<b>".$row01["emailphn"]."</b>";
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
                                            		echo "<b>".$row01["nid"]."</b>";
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
                                                <center><label><b>Vehicle Type</b></label></center>
                                            </td>
                                        <td><center><b>:</b></center></td>
                                        <td>
                                            <?php
                                            		echo "<b>".$row["type"]."</b>";
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
                        </div>
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
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Vehicle Selection </title>
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
                        <div class="id11"><fieldset>
                            <legend><b>Vehicle Selection :</b></legend>
                                <form method="POST" name="VehicleInput" onsubmit="return isInsert(this)"; action="http://localhost/WebTechProject/Control/VehicleInsertAction.php">
                                    <table >
                                        <tr><td><center><label for="vtype"><b>Vehicle Type</b></label></center></td>
                                            <td><center><b>:</b></center></td>
                                            <td><select name="vtype" id="vtype">
                                                <option value="">Select your vehicle type</option>
                                                <option value="motorcar">Motor Car</option>
                                                <option value="jeep">Jeep</option>
                                                <option value="taxi">Taxi</option>
                                                <option value="bus">Bus</option>
                                                <option value="minibus">Minibus</option>
                                                <option value="truck">Truck</option>
                                                <option value="autort">Auto-Rickshaw/Auto-Tempo</option>
                                                <option value="bike">Motor-Cycle</option>
                                                <option value="others">Others</option>
                                                </select>
                                            </td>                
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="v_type"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error51']))
                                                    {
                                                        echo "<b>".$_SESSION['error51']."</b>";
                                                        unset($_SESSION['error51']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td><center><label for="vnum"><b>Vehicle Number</b></label>        </center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td><center><input type="text" id="vnum" name="vnum">
                                            </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="v_num"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error52']))
                                                    {
                                                        echo "<b>".$_SESSION['error52']."</b>";
                                                        unset($_SESSION['error52']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Next"></td>
                                        </tr>
                                    </table>
                                </form>
                        </fieldset></div>
                    </center>
                </td>
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
    <script src="../JavaJS/VehicleInsert.js"></script>
    <div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>
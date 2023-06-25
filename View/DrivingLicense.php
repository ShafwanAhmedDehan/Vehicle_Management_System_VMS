<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Driving License </title>
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
                        <div class="id09"><fieldset>
                            <legend><b>License Information :</b></legend>
                                <form method="POST" name="LicenseInput" onsubmit="return isLCSInsert(this)"; action="http://localhost/WebTechProject/Control/DrivingLicenseAction.php">
                                    <table>
                                        <tr>
                                            <td>
                                                <center><label for="lino"><b>License No.</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>

                                                <input type="text" id="lino" name="lino" placeholder="Enter your license number   ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="L_no"></span></div>
                                                <div class="id07">
                                                <?php
                                                    if(isset($_SESSION['error201']))
                                                    {
                                                        echo "<b>".$_SESSION['error201']."</b>";
                                                        unset($_SESSION['error201']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="issue"><b>Issue Date</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="date" id="issue" name="issue" placeholder="Enter issue date   ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="D_issue"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error202']))
                                                    {
                                                        echo "<b>".$_SESSION['error202']."</b>";
                                                        unset($_SESSION['error202']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="expi"><b>Expiry Date</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="date" id="expi" name="expi" placeholder="Enter expiry date   ">
                                            </td>                      
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="D_expi"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error203']))
                                                    {
                                                        echo "<b>".$_SESSION['error203']."</b>";
                                                        unset($_SESSION['error203']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="p_day"><b>Per Day</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="number" id="p_day" name="p_day" placeholder="Enter Per day wages [BDT]   ">
                                            </td>                      
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="perday"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error204']))
                                                    {
                                                        echo "<b>".$_SESSION['error204']."</b>";
                                                        unset($_SESSION['error204']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="p_month"><b>Per Month</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="number" id="p_month" name="p_month" placeholder="Enter Per Month wages [BDT]   ">
                                            </td>                      
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="permonth"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error205']))
                                                    {
                                                        echo "<b>".$_SESSION['error205']."</b>";
                                                        unset($_SESSION['error205']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><a href=""><b></b></a>&nbsp&nbsp&nbsp<input type="submit" value="Save"></td>
                                        </tr>
                                    </table>
                                </form>
                        </fieldset>
                        </div>
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
    <script src="../JavaJS/LicenseInsert.js"></script>
    <div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>
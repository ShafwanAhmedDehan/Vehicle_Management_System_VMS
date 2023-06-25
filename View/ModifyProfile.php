<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Modification </title>
    <link rel="stylesheet" href="../Design/design.css">
</head>
<body>
    <div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
    <br><br><br><br><br><br><br><br>
    <center>
        <div class="id100">
        <table>
            <tr>
                <td></td>
                <td> 
                    <center>
                        <div class="id10"><fieldset>
                            <legend><b>Modify Your Profile :</b></legend>
                                <form method="POST" name="modifyform" onsubmit="return isModify(this)"; action="http://localhost/WebTechProject/Control/ProfileModifyAction.php">
                                    <table>
                                        <tr>
                                            <td>
                                                <center><label for="fname"><b>First Name</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>

                                                <input type="text" id="fname" name="fname" placeholder="Enter your first name   " value="<?php if (isset($_COOKIE["cookiefname1"])) {echo $_COOKIE["cookiefname1"];}?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="f_name"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error101']))
                                                    {
                                                        echo "<b>".$_SESSION['error101']."</b>";
                                                        unset($_SESSION['error101']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="lname"><b>Last Name</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="text" id="lname" name="lname" placeholder="Enter your last name   " value="<?php if (isset($_COOKIE["cookielname1"])) {echo $_COOKIE["cookielname1"];}?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="l_name"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error102']))
                                                    {
                                                        echo "<b>".$_SESSION['error102']."</b>";
                                                        unset($_SESSION['error102']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="pass"><b>Previous Password</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>

                                                <input type="Password" id="pass" name="pass" placeholder="Enter your previous password   ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="pass01"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error103']))
                                                    {
                                                        echo "<b>".$_SESSION['error103']."</b>";
                                                        unset($_SESSION['error103']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="newpass"><b>New Password</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>

                                                <input type="Password" id="newpass" name="newpass" placeholder="Enter your new password  ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="pass02"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error104']))
                                                    {
                                                        echo "<b>".$_SESSION['error104']."</b>";
                                                        unset($_SESSION['error104']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="email"><b>Email/Phone no</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="text" id="email" name="email" placeholder="Enter your email/phone no " value="<?php if (isset($_COOKIE["cookieid1"])) {echo $_COOKIE["cookieid1"];}?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="email01"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error105']))
                                                    {
                                                        echo "<b>".$_SESSION['error105']."</b>";
                                                        unset($_SESSION['error105']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="address"><b>Present Address</b></label>
                                                </center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td><textarea id="address" name="address"><?php if (isset($_COOKIE["cookieaddress1"])) {echo $_COOKIE["cookieaddress1"];} ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="addressregi"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error106']))
                                                    {
                                                        echo "<b>".$_SESSION['error106']."</b>";
                                                        unset($_SESSION['error106']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="sos"><b>Set emergency contact Number</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>

                                                <input type="text" id="sos" name="sos" placeholder="Enter your  emergency contact No.  " value="<?php if (isset($_COOKIE["cookiesos1"])) {echo $_COOKIE["cookiesos1"];} ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="sos01"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error107']))
                                                    {
                                                        echo "<b>".$_SESSION['error107']."</b>";
                                                        unset($_SESSION['error107']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><a href=""><b></b></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Save"></td>
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
    <script src="../JavaJS/ModifyProfile.js"></script>
    <div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>
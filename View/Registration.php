<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>VMS Registration </title>
    <link rel="stylesheet" href="../Design/design.css">
</head>
<body>
    <div class="id01"><header><?php include "../Top/Top.html" ?> </header></div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="id100">
    <center>
        <table>
            <tr>
                <td></td>
                <td> 
                    <center>
                        <fieldset>
                            <legend><b>Registration :</b></legend>
                                <form name="regiForm" onsubmit="return isRegi(this)"; method="POST" action="http://localhost/WebTechProject/Control/RegistrationAction.php">
                                    <table>
                                        <tr>
                                            <td>
                                                <center><label for="fname"><b>First Name</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="text" id="fname" name="fname" placeholder="Enter your first name   ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="f_name"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error100']))
                                                    {
                                                        echo "<b>".$_SESSION['error100']."</b>";
                                                        unset($_SESSION['error100']);
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
                                                <input type="text" id="lname" name="lname" placeholder="Enter your last name   ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="l_name"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error200']))
                                                    {
                                                        echo "<b>".$_SESSION['error200']."</b>";
                                                        unset($_SESSION['error200']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="Gender"><b>Gender</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="radio" id="html" name="Gender" value="Male"><label for="html">Male</label>
                                                <input type="radio" id="html" name="Gender" value="Female"><label for="html">Female</label>
                                                <input type="radio" id="html" name="Gender" value="Other"><label for="html">Other</label>
                                            </td>                      
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="genderjs"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error300']))
                                                    {
                                                        echo "<b>".$_SESSION['error300']."</b>";
                                                        unset($_SESSION['error300']);
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
                                                <input type="text" id="email" name="email" placeholder="Enter your email/phone no ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="email/phone"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error400']))
                                                    {
                                                        echo "<b>".$_SESSION['error400']."</b>";
                                                        unset($_SESSION['error400']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="pass"><b>Password</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="Password" id="pass" name="pass" placeholder="Enter your password ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="passregi"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error800']))
                                                    {
                                                        echo "<b>".$_SESSION['error800']."</b>";
                                                        unset($_SESSION['error800']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="nid"><b>NID</b></label></center>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td>
                                                <input type="text" id="nid" name="nid" placeholder="Enter your nid number ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="nidregi"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error500']))
                                                    {
                                                        echo "<b>".$_SESSION['error500']."</b>";
                                                        unset($_SESSION['error500']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center><label for="Gender"><b>User</b></label></center>
                                            </td>
                                        <td><center><b>:</b></center></td>
                                        <td>
                                            <center><input type="radio" id="html" name="User" value="General User"><label for="html">General User</label>
                                                <input type="radio" id="html" name="User" value="Driver"><label for="html">Driver</label>
                                                <input type="radio" id="html" name="User" value="Owner"><label for="html">Owner</label>
                                            </center>
                                        </td>                      
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="usertype"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error600']))
                                                    {
                                                        echo "<b>".$_SESSION['error600']."</b>";
                                                        unset($_SESSION['error600']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="address"><b>Present Address</b></label>
                                            </td>
                                            <td><center><b>:</b></center></td>
                                            <td><textarea id="address" name="address"></textarea></td>
                                        </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="idjs01"><span id="addressregi"></span></div>
                                                <div class="id07">
                                                <?php 
                                                    if(isset($_SESSION['error700']))
                                                    {
                                                        echo "<b>".$_SESSION['error700']."</b>";
                                                        unset($_SESSION['error700']);
                                                    }
                                                ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><a href=""><b></b></a>&nbsp&nbsp&nbsp<input type="submit" value="Register"></td>
                                        </tr>
                                    </table>
                                </form>
                        </fieldset>
                    </center>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><center><b>You have an account?</b> <a href="http://localhost/WebTechProject/View/Login.php"><div class="id04"><b>Login here.</b></div></a></center></td>
            </tr>
        </table>
    </center>
    </div>
    <script src="../JavaJS/RegiPage.js"></script>
    <div class="id01"><footer> <?php include "../Bottom/End.html" ?> </footer></div>
</body>
</html>
<?php
require_once("header.php");


?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                
            </div>

            <!-- ======================= Cards ================== -->
            <h1 align="center">Semester-I</h1>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-I";
                            $dept="CIVIL ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CIV-I</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-I";
                            $dept="COMPUTER SCIENCE AND ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CSE-I</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-I";
                            $dept="ELECTRONICS AND COMMUNICATION ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">ECE-I</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-I";
                            $dept="MECHANICAL ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">MECH-I</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>
            </div>
            <h1 align="center">Semester-III</h1>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-III";
                            $dept="CIVIL ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CIV-III</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-III";
                            $dept="COMPUTER SCIENCE AND ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CSE-III</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-III";
                            $dept="ELECTRONICS AND COMMUNICATION ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">ECE-III</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-III";
                            $dept="MECHANICAL ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">MECH-III</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>
            </div>
            <h1 align="center">Semester-V</h1>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-V";
                            $dept="CIVIL ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CIV-V</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-V";
                            $dept="COMPUTER SCIENCE AND ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CSE-V</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-V";
                            $dept="ELECTRONICS AND COMMUNICATION ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">ECE-V</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-V";
                            $dept="MECHANICAL ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">MECH-V</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>
            </div>
            <h1 align="center">Semester-VII</h1>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-VII";
                            $dept="CIVIL ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CIV-VII</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-VII";
                            $dept="COMPUTER SCIENCE AND ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CSE-VII</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-VII";
                            $dept="ELECTRONICS AND COMMUNICATION ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">ECE-VII</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-VII";
                            $dept="MECHANICAL ENGINEERING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">MECH-VII</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>
            </div>
            

            <!-- ================ Order Details List ================= -->

      

    <?php
    require_once("footer.php");
    ?>
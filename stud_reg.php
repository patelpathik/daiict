<?php
    include "top.php";
    if(isset($_REQUEST['add_s'])){
        $name=$_REQUEST['name'];
        $gender=$_REQUEST['gender'];
        $age=$_REQUEST['age'];
        $contact=$_REQUEST['contact'];
        $addr=$_REQUEST['addr'];
        $pincode=$_REQUEST['pincode'];
        $area=$_REQUEST['area'];
        $district=$_REQUEST['district'];
        $state=$_REQUEST['state'];
        $enrol=round(microtime(true));

        echo $q1="insert into candidate (name,enrol_id,gender,contact,age,addr,area,district,state,pincode) values ('$name','$enrol','$gender','$contact','$age','$addr','$area','$district','$state','$pincode')";

        $e1=$conn->query($q1);
        if($e1){
            echo "<script>alert('Student Data is saved, Generated Student id is: $enrol');</script>";
        }
        else{
            echo "<script>alert('Error Occured!');</script>";
        }
    }
?>
    <script type="text/javascript">
        function get_pdata(x){
                var pname="get_pdata.php";
                var temp=pname+"?req=area&pc="+x;
                // alert(temp);
                $.ajax({
                    method: "GET",
                    url: temp,
                    success: function(data){
                        // alert(data);
                        // $("#dep").html(data);
                        document.getElementById("area").value=data;
                        // $("#district").val(data);
                    }
                });
                var temp1=pname+"?req=district&pc="+x;
                $.ajax({
                    method: "GET",
                    url: temp1,
                    success: function(data){
                        document.getElementById("district").value=data;
                    }
                });
                var temp2=pname+"?req=state&pc="+x;
                $.ajax({
                    method: "GET",
                    url: temp2,
                    success: function(data){
                        document.getElementById("state").value=data;
                    }
                });
            }
    </script>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Student Registration</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Google Maps ##### -->
 
    <!-- ##### Contact Area Start ##### -->
    <br><br><br><br><br><br>
    <section class="contact-area mt-100 section-padding-100-70"">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-6 "></div>
                             <div class="col-12 "> 
                               
                                
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-6"><input type="text" class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <select  id="gender" name="gender" class="form-control" style="height: 55px;" required>
                                                    <option selected disabled="true">Gender</option>>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select  id="age" name="age" class="form-control" style="height: 55px;" placeholder="Select Age" required>
                                                    <option selected disabled="true">Select Age</option>>
                                                    <option value="3-5">3-5</option>
                                                    <option value="6-10">6-10</option>
                                                    <option value="11-15">11-15</option>
                                                    <option value="16-20">16-20</option>
                                                    <option value="21+">21+</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6"><input type="tel" name="contact" class="form-control" id="mob" placeholder="Mobie Number" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12"> <textarea class="form-control" name="addr" placeholder="Address" required></textarea>  
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"><input type="text" minlength="6" maxlength="6" class="form-control" name="pincode" placeholder="Pincode" onchange="get_pdata(this.value);" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="area" id="area" placeholder="Area" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="district" placeholder="City" required name="district">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="state" placeholder="State" required name="state">
                                            </div>
                                        </div>
                                        <br><br>
                                        
                                        <center><button class="btn academy-btn mt-10" type="submit" name="add_s">Save</button></center>
                                    </form> 
                                </div>
                                </div>
                                </div>
                            </div>
                            <?php
                                // echo round(microtime(true));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
<?php
    include "foot.php";
?>
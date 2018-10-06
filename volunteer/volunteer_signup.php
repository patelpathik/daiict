<?php
    include "top.php";
?>
    <script type="text/javascript">
        function get_pdata(x){
            var temp="get_pdata.php?pc="+x;
            $.ajax({
                method: GET,
                url: temp;
            });
        }
    </script>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Volunteer Signup</h2>
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
                                            <div class="col-sm-4"><input type="text" class="form-control" id="name" placeholder="Name" required>
                                            </div>
                                            <div class="col-sm-4"> <input type="text" class="form-control" style="ma" id="cont" placeholder="Contact" maxlength="10" minlength="10" required >
                                            </div>
                                            <div class="col-sm-4"> <input type="email" class="form-control" id="email" placeholder="Email" required>    </div> 
                                        </div>
                                         <div class="row"> 
                                               
                                            <div class="col-sm-6"><input type="password" class="form-control" id="pass" placeholder="Password" required>
                                            </div>
                                            <div class="col-sm-6"> <input type="password" class="form-control" id="cpass" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div class="col-12"> <textarea class="form-control" id="add" placeholder="Address" required></textarea>    
                                            </div> 
                                        <div class="row">
                                            <div class="col-sm-4"><input type="text" minlength="6" maxlength="6" class="form-control" id="pin" placeholder="Pincode" required onchange="get_pdata(this.value);">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="city" placeholder="City" required></div>
                                               <div class="col-sm-4"> <input type="text" class="form-control" id="state" placeholder="State" required></div>
                                            </div>

                                            
                                        </div>
                                        <div class="row">                                  
                                           
                                        </div>
                                       
                                        <br><br>
                                        
                                        <center><button class="btn academy-btn mt-30" type="submit">Signup</button></center>
                                    </form> 
                                </div>
                                </div>
                                </div>
                            </div>
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
    <?php
    include "top.php";
?>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Donation</h2>
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
                            <div class="col-12 col-lg-3 "></div>
                            <div class="col-12 col-lg-6 ">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <form action="#" method="post">
                                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                                        <input type="text" class="form-control" maxlength="10" minlength="10" id="cont" placeholder="Contact" required>
                                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                                        <select class="form-control"  id="ddl" style="height: 55px;" required >
                                            <option selected disabled="true">Select Donation Type</option>>
                                            <option>Donate Money</option>
                                            <option>Donate Resources</option>

                                        </select>
                                        <input type="text" class="form-control" id="amo" placeholder="Amount" required>
                                        <textarea class="form-control" id="dic" placeholder="Discription (Mention which resource and how much quantity)" rows="2" cols="2"></textarea>                                       
                                    
                                        <center><button class="btn academy-btn mt-30" type="submit">PAY</button></center>
                                        <center><button class="btn academy-btn mt-30" type="submit">Submit</button></center>

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
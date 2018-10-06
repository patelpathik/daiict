<?php
	include 'top.php';
?>
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Request-Class</h2>
        </div>
    </div>
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
                                            <div class="col-sm-6"><input type="date" class="form-control" name="date" placeholder="Date" required>
                                        	</div>
                                            <div class="col-sm-6">
                                                <select  id="age" class="form-control" style="height: 55px;" placeholder="Select Age" required>
                                                <option selected disabled="true">Select Age</option>>
                                                <option value="3-5">3-5</option>
                                                <option value="6-10">6-10</option>
                                                <option value="11-15">11-15</option>
                                                <option value="16-20">16-20</option>
                                                <option value="21+">21+</option>
                                                </select>     
                                            </div>
                                        </div>
                                        <div>
                                            <textarea class="form-control" name="dis" placeholder="Description" required></textarea>
                                        </div>
                                        <br><br>
                                        
                                        <center><button class="btn academy-btn mt-30" name="sub" type="submit">Submit</button></center>
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
<?php
	include 'foot.php';
?>
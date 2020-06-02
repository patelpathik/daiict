<?php 
	include "top.php";
?>
<div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Class Schedule</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Google Maps ##### -->
 
    <!-- ##### Contact Area Start ##### -->
    <br><br><br><br><br><br>
    <section class="contact-area mt-100 section-padding-100-70"">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-3 "></div>
                                <div class="col-12">
                                    <!-- <div class="contact-form-area wow fadeInUp" data-wow-delay="600ms">
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="search" class="form-control" name="search" placeholder="Search area...">
                                                </div>
                                            </div>
                                            <center>
                                                <button class="btn academy-btn mt-30 btn-round" type="submit" name="sub">Search</button>
                                            </center>
                                        </form> 
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 "></div>
                                <div class="">
                                    <div class="contact-form-area wow fadeInUp" data-wow-delay="600ms">
                                        <table class="table table-borderless" align="center" border="1" cellspacing="1" cellpadding="1" id="stud_tbody" style="font-size: 15px;">
                                            <thead><tr><th colspan="9"><h4 style="color: green"><center>Time Table</h4></th></tr></thead>
                                            <thead class="thead-light">
                                                <tr>
                                                  <th>Id</th>
                                                  <th>Date</th>
                                                  <th>Time</th>
                                                  <th>Venue</th>
                                                  <th>Description</th>
                                                  <th>Volunteer</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                // $q1="select * from adv_notice";
                                                $q1="select * from adv_notice a, volunteer v where a.vo_id=v.vo_id";
                                                $e1=$conn->query($q1);
                                                if($e1->num_rows == 0){
                                            ?>
                                                <tr><td colspan="20" align="center"><i>No Records Found</i></td></tr>
                                                <?php
                                                    }
                                                    $i=0;
                                                    while($data=$e1->fetch_object()){
                                                    $i++;
                                                ?>
                                                <tr>
                                                  <td style="vertical-align: baseline;"><?php echo $i; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->dt; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->start_time; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->venue; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->des; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->name; ?></td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                        </table> 
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
	include "foot.php";
?>
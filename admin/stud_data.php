<?php 
	include "top.php";
?>
<div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Student Data</h2>
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
                            <div class="col-12 col-lg-3 "></div>
	                            <div class="col-12">
	                                <div class="contact-form-area wow fadeInUp" data-wow-delay="600ms">
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
	                                </div>
	                            </div>
                        	</div>
                        	<br><br><br>
                        	<div class="col-12 col-lg-3 "></div>
	                            <div class="">
	                                <div class="contact-form-area wow fadeInUp" data-wow-delay="600ms">
	                                    <table class="table table-borderless" align="center" border="1" cellspacing="1" cellpadding="1" id="stud_tbody" style="font-size: 15px;">
	                                    	<thead><tr><th colspan="9"><h4 style="color: green"><center>Student Data</h4></th></tr></thead>
											<thead class="thead-light">
												<tr>
												  <th>Id</th>
												  <th>Student Name</th>
												  <th>Enroll ID</th>
												  <th>Gender</th>
												  <th>Contact</th>
												  <th>Age</th>
												  <th>Address</th>
												  <th>Area</th>
												  <th>District</th>
												  <th>State</th>
												  <th>Pincode</th>
												</tr>
											</thead>
											<?php
                                            if (isset($_POST['sub'])) {
                                                $s = $_POST['search'];
                                                //$q1="select * from candidate where pincode = '$search'";
                                                $q1 = "select * from volunteer where name='$s' or enrol_id='$s' or gender='$s' or contact='$s' or age='$s' or addr='$s' or area='$s' or district='$s' or state='$s' or pincode='$s'";
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
                                                  <td style="vertical-align: baseline;"><?php echo $data->name; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->enrol_id; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->gender; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->contact; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->age; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->addr; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->area; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->district; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->state; ?></td>
                                                  <td style="vertical-align: baseline;"><?php echo $data->pincode; ?></td>
                                                </tr>
                                                <?php
                                                    }
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
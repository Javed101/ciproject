               <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
               
                                <a href="#" class="logo-name text-lg text-center">Edit Your Profile</a>
                                
                                   <form class="m-t-md" action="<?=(base_url().'User/do_editprofile')?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $h[0]->username; ?>" minlength="3"  maxlength="30"  title="minimum 3 maximum 30 charecter only" required="required">
                                    </div>
									<div class="form-group">
                                        <input type="number" class="form-control" placeholder="Mobile" name="mobile" value="<?php echo $h[0]->mobile_no; ?>" pattern="\d{10}" title="Please enter the valid ten digit number" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $h[0]->Address; ?>" minlength="3"  maxlength="30"  title="minimum 3 maximum 30 charecter only" required="required">
                                    </div>
									<button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>

                                    
                                
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div><!-- Row -->



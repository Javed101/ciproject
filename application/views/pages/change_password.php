
<div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Change Password</a>
                                 <form class="m-t-md" action="<?=(base_url().'User/do_change_password')?>" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="old_password" placeholder="Old Password" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="new_password" placeholder="New Password" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm_Password" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    
                                </form>
                                <p class="text-center m-t-xs text-sm">2015 &copy; Modern by Steelcoders.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->

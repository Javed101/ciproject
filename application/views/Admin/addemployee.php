
<div class="progress progress-sm m-t-sm">
                                            
                                        </div>
            
                    <form id="wizardForm"  action="<?=(base_url().'admin/addemployee')?>" method="post" enctype="multipart/form-data">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="exampleInputName">Name</label>
                                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                                                                </div>
                                                                <div class="form-group  col-md-6">
                                                                    <label for="exampleInputName2">Mobile</label>
                                                                    <input type="text" class="form-control col-md-6" name="mobile" id="mobile" placeholder="Mobile">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">Email address</label>
                                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Password</label>
                                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Confirm Password</label>
                                                                    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Address</label>
                                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Gender</label> <br/>
                                                                    <input type="radio" class="form-control" name="gender" value="Male">Male
                                                                    <input type="radio" class="form-control" name="gender" value="Female">Female

                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                    <label for="exampleInputName">Upload Dacument 1</label>
                                                                    <input type="file" class="form-control" name="file_1" >
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="exampleInputName">Upload Dacument 2</label>
                                                                    <input type="file" class="form-control" name="file_2" >
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="exampleInputName">Upload Dacument 3</label>
                                                                    <input type="file" class="form-control" name="file_3" >
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="exampleInputName">Upload Dacument 4</label>
                                                                    <input type="file" class="form-control" name="file_4" >
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="exampleInputName">Upload Dacument 5</label>
                                                                    <input type="file" class="form-control" name="file_5" >
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </form>


	
<div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Upload Your Document</a></br></br>
                                
                                 <form class="m-t-md" action="<?=(base_url().'User/do_upload_document')?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
									<div class="form-group has-success">
                                            <label for="input-success" class="col-sm-2 control-label">Doc 1</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="file_1" class="form-control">
                                            </div></br></br>
                                        </div>
										<div class="form-group has-success">
                                            <label for="input-success" class="col-sm-2 control-label">Doc 2</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="file_2" class="form-control">
                                            </div></br></br>
                                        </div>
										<div class="form-group has-success">
                                            <label for="input-success" class="col-sm-2 control-label">Doc 3</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="file_3" class="form-control">
                                            </div></br></br>
                                        </div>
										<div class="form-group has-success">
                                            <label for="input-success" class="col-sm-2 control-label">Doc 4</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="file_4" class="form-control">
                                            </div></br></br>
                                        </div>
										<div class="form-group has-success">
                                            <label for="input-success" class="col-sm-2 control-label">Doc 5</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="file_5">
                                            </div></br></br>
                                        </div>
									</div>
									
                                                <button type="submit" class="btn btn-primary btn-block" >Upload</button>
                                            </div>
                                    
                                                                        
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div><!-- Row -->
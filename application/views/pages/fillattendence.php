

<div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="#" class="logo-name text-lg text-center">Please Fill your Attendence</a>
                                
                                <form class="m-t-md" name="myform" action="<?=(base_url().'User/do_attendance')?>" method="post" onSubmit="return checkvalid(this)" >
                                    <div class="form-group">
									<label>Date</label>
                                        <input type="text" class="form-control" id="datepicker" name="date" placeholder="yyyy-mm-dd" value="" required="" >
                                    </div>
                                    <div class="form-group">
									<label>Attendence</label>
                                        <select class="form-control" name="attendance">
										<option value="">Select</option>
										<option value="Apsent">Apsent</option>
										<option value="prsent">Present</option>
										<option value="Leave">Leave</option>
										<option value="Holiday">Holiday</option>
										</select>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Submin</button>
                                    </form>
                            </div>
                        </div>
                    </div><!-- Row -->

                    <script>
                    function checkvalid(obj)
                    {
                        var today = new Date();     //Mon Nov 25 2013 14:13:55 GMT+0530 (IST) 
                        var d = new Date(obj.date.value);     //Mon Nov 25 2013 00:00:00 GMT+0530 (IST) 
                        var todayDateOnly = new Date(today.getFullYear(),today.getMonth(),today.getDate()); //This will write a Date with time set to 00:00:00 so you kind of have date only
                        var dDateOnly = new Date(d.getFullYear(),d.getMonth(),d.getDate());
                        var chkdate= todayDateOnly
                        var chkdate= new Date(todayDateOnly-((24*60*60)*7000));
                       // alert(chkdate);
                        if(!(todayDateOnly>=dDateOnly && dDateOnly>=chkdate)){               
                            alert("date must less than or equal to curren date and not older than 7 days ");
                            obj.date.focus();
                            return false
                        }

                        if(obj.attendance.value=='')
                        {
                            alert("select your attendance");
                            obj.attendance.focus();
                            return false;
                        }
                        
                    return true;

                    }

                    </script>,
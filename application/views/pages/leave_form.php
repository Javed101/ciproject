
<center>
<div class="col-md-12">
                            <div class="panel panel-white">
                            
                                <center><label><h2>Apply Form For Leave</h2></label></center>
                                <div class="panel-body">
                                    <form class="form-inline" action="<?=(base_url().'User/do_leave')?>" method="post" onSubmit="return checkvalid(this)">
                                        <div class="form-group">
                                            <label class="sr-only" for="stattingdate">Starting date</label>
                                            <input type="text" class="form-control" id="stattingdate" name="date1" placeholder="Enter Your Starting">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Ending Date</label>
                                            <input type="text" class="form-control" name="date2" placeholder="Enter Your Ending date">
                                        </div></br>
                                        </br>
                                        <center>
                                            <label class="sr-only" for="exampleInputPassword2">Reason for leave</label>
                                        <textarea class="form-control" style="margin: 0px; width: 441px; height: 150px;" name="reason" required > 
                                        </textarea> 
                                        
                                        </center></br></br>
                                        <button type="submit" class="btn btn-success btn-block" >Submit</button>    
                                        </div>
                                        
    
                                    </form>
                                    <script type="text/javascript">
                                 $('input[name~=date1],input[name~=date2]').each(function(){
                                        $(this).datepicker({dateFormat:'yy-mm-dd'});
                                    });</script>
                                    
                                </div>
                            </div>
                        </div></center>





                        <script type="text/javascript">
                        function checkvalid(obj)
                        {
                             var today = new Date();     //Mon Nov 25 2013 14:13:55 GMT+0530 (IST) 
                             var d1 = new Date(obj.date1.value);     //Mon Nov 25 2013 00:00:00 GMT+0530 (IST) 
                             var d2 = new Date(obj.date2.value); 
                             var todayDate = new Date(today.getFullYear(),today.getMonth(),today.getDate()); //This will write a Date with time set to 00:00:00 so you kind of have date only
                             var d1Date = new Date(d1.getFullYear(),d1.getMonth(),d1.getDate());
                             var d2Date = new Date(d2.getFullYear(),d2.getMonth(),d2.getDate());
                             if(obj.date1.value=='')
                               { 
                                    alert("date can not left blank");
                                    obj.date1.focus();
                                    return false;
                                }
                                if(obj.date2.value=='')
                                {
                                    alert("date can not left blank");
                                    obj.date2.focus();
                                    return false;   
                                }
                                if(d1Date>d2Date)
                                {
                                    alert("starting date not greater than end date");
                                    obj.date1.focus();
                                    return false;
                                }
                                if(d1Date<todayDate)
                                {
                                    alert("leave date must greater than today date");
                                    obj.date1.focus();
                                    return false;
                                }
                                if(obj.reason.value=='')
                                {
                                    alert("provide reason for leave");
                                    obj.reason.focus();
                                    return false;
                                }
                            return true;
                        }

                        </script>
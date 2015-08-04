
<script type="text/javascript">
          function checkstatus(type){
                $.ajax({
                    'url' : "<?php echo base_url().'admin/verify'; ?>",
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'type' : type},
                    'success' : function(data){
                     //probably this request will return anything, it'll be put in var "data"
                     if(data){
                     $(btn).value="Varified";
                    $(btn).attr("disabled", "disabled");

                     }
                    }
                    });                }
</script>

<div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No</th>
                                                    <th>User Name</th>
													<th><b>Date</b></td>
													<th>Attendance</th>
													<th>Action</th>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Search</td><td colspan="3">
                                                    <form action="<?=(base_url().'admin/searchattendance')?>" method="post">
                                                    From
                                                    <input type="text" name="startdate" id="datefrom" class="datepick">
                                                    To
                                                    <input type="text" name="enddate" id="dateto" class="datepick"> 
                                                    <input type="submit" name="submit" value="search">
                                                    </form>
                                                </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0;
												foreach ($h->result() as $row)  
         										{  $i++;
            									?><tr>  
            										<td><?php echo $i;?></td>
            										<td><?php echo $row->user_name;?></td>  
            										<td><?php echo $row->Date;?></td>
            										<td><?php echo $row->attendance;?></td>
                                                    <td><?php echo $row->id;?></td>
                                                    <td> 
                                                        <?php/*
                                                         if($row->status!='')
                                                            {
                                                             echo $row->status; 
                                                            }else
                                                             {*/
                                                          ?> 
                             <button name="btun" id="btun" onclick="checkstatus(<?php echo $row->id;?>)"> Verify </button> 
     
                                                    </td>
                                                                   
           											 </tr>  
         										<?php } ?> 

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                   <script type="text/javascript">
                                 $('.datepick').each(function(){
    									$(this).datepicker({dateFormat:'yy-mm-dd'});
									});</script>

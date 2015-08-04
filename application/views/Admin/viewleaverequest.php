<div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No</th>
                                                    <th>Name</th>
                                                    <th>Start Date</th>
													<th>End Date</td>
													<th>Reason</th>
													<th>Status</th>
                                                </tr>                                        
                                            </thead>
                                            <tbody>
                                                <?php $i=0;
												foreach ($h->result() as $row)  
         										{  $i++;
            									?><tr>  
            										<td><?php echo $i;?></td>
                                                    <td><?php echo $row->name;?></td>
            										<td><?php echo $row->startdate;?></td>  
            										<td><?php echo $row->enddate;?></td>
            										<td><?php echo $row->reason;?></td> 
            										<td><?php if($row->status=='Pending'){ ?> <a href="<?php echo base_url().'admin/leaveapproove/'.$row->id; ?>">Approove</a><?php } else{ echo $row->status; } ?></td> 
           											 </tr>  
         										<?php } ?> 

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

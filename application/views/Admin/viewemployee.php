
<script type="text/javascript">
/*$(document).ready(function() {
    $('#example').dataTable();
} ); */</script>


<div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">List of Employee</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
            <tr>
                                                    <th>Sr. No</th>
                                                    <th>Name</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                    <th>Address</th> 
                                                    <th>Joining Date</th>
                                                    <th>Sallery</th>
                                                    <th>Document 1</th>
                                                    <th>Document 2</th>
                                                    <th>Document 3</th>
                                                    <th>Document 4</th>
                                                    <th>Document 5</th>

                                                    
                                                </tr>
        </thead>
 
        <tfoot>
           <tr>
                                                    <th>Sr. No</th>
                                                    <th>Name</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                    <th>Address</th> 
                                                    <th>Joining Date</th>
                                                    <th>Sallery</th>
                                                    <th>Document 1</th>
                                                    <th>Document 2</th>
                                                    <th>Document 3</th>
                                                    <th>Document 4</th>
                                                    <th>Document 5</th>

                                                    
                                                </tr>
        </tfoot>
 
        <tbody>
            <?php $i=0;
                                                foreach ($h->result() as $row)  
                                                 {  
                                                    $i++;
                                                 ?>  <tr>
                                                 <td><?php echo $i; ?></td>
                                                 <td><?php echo $row->username;?></td>
                                                <td><?php echo $row->mobile_no;?></td>  
                                                 <td><?php echo $row->email;?></td> 
                                                 <td><?php echo $row->Address;?><td> 
                                                 <td><?php echo $row->joining_date;?></td>
                                                <td><a href="<?php echo $row->document_1;?>">Download</a></td>
                                                <td><a href="<?php echo $row->document_2;?>">Download</a></td> 
                                                 <td><a href="<?php echo $row->document_3;?>">Download</a></td>
                                                 <td><a href="<?php echo $row->document_4;?>">Download</a></td>
                                                <td><a href="<?php echo $row->document_5;?>">Download</a></td>  
                                             </tr>
                                             <?php } ?>
                                                          
                                                
             </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>

        <script src="<?php echo base_url().'assets\plugins\jquery\jquery-2.1.3.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\jquery-ui\jquery-ui.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\pace-master\pace.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\jquery-blockui\jquery.blockui.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\bootstrap\js\bootstrap.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\jquery-slimscroll\jquery.slimscroll.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\switchery\switchery.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\uniform\jquery.uniform.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\classie\classie.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\waves\waves.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\3d-bold-navigation\js\main.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\jquery-mockjax-master\jquery.mockjax.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\moment\moment.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\datatables\js\jquery.datatables.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\x-editable\bootstrap3-editable\js\bootstrap-editable.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\bootstrap-datepicker\js\bootstrap-datepicker.js';?>"></script>
        <script src="<?php echo base_url().'assets\js\modern.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\js\pages\table-data.js';?>"></script>



                                    </div>
                                </div>







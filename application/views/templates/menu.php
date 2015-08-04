<div class="page-sidebar sidebar  horizontal-bar">
                <div class="page-sidebar-inner">
                    <ul class="menu accordion-menu">
                        <li class="nav-heading"><span>Navigation</span></li>
                        <li class="active"><a href="<?php echo base_url().'User/login'; ?>"><span class="menu-icon icon-speedometer"></span><p>Dashboard</p></a></li>
                        
                        <?php foreach($menu as $link_text=>$link_url):?>

                         <li class="active"><a href="<?php echo $link_url?>"><span></span><p><?php echo $link_text ?></p><span class="arrow"></span></a></li>

                        <?php endforeach; ?>
                        

                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            

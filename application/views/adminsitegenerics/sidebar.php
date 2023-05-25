<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="<?php echo base_url() . 'assets/images/logo-icon.png'; ?>" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h6 class="logo-text"><?php echo 'Agape Intl.'; ?></h6>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
                </div>
                <div class="menu-title">Main</div>
            </a>
            <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-cog bx-spin"></i>Operations</a>
                    <ul>
                        <?php
                            if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_category == "Admin"){?>     

                                <li> <a class="has-arrow" href="javascript:;"><i class="lni lni-book"></i>Student</a>
                            
                                
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/applicants'; ?>"><i class="bx bx-calendar-check"></i>Applicant(s)</a>
                                        </li>
                                    </ul>
        <!-- 
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/accountingyear'; ?>"><i class="bx bx-calendar-check"></i>Set Session</a>
                                        </li>
                                    </ul>
                            
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/marketlocation'; ?>"><i class="fadeIn animated bx bx-location-plus"></i>Set Class</a>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/marketlocation'; ?>"><i class="fadeIn animated bx bx-location-plus"></i>Set Subject</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/allocateusertomarket'; ?>"><i class="fadeIn animated bx bx-user-pin"></i>Registration</a>
                                        </li>
                                    </ul>                                    
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/loancategories'; ?>"><i class="lni lni-agenda"></i>Compute Scores</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/loancategories'; ?>"><i class="lni lni-agenda"></i>Process Result</a>
                                        </li>
                                    </ul> -->
                                    
                                </li>
                        <?php } ?>
        
                        <li> <a class="has-arrow" href="javascript:;"><i class="fadeIn animated bx bx-task"></i>Inboxes</a>
                            <?php 
                                if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_category == "Admin"){?>     
                        
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/eventprospects'; ?>"><i class="lni lni-dollar"></i>Events propsects</a>
                                        </li>   
                                    </ul>                                    
                            <?php } ?>

                            <ul>
                                <li> <a href="<?php echo base_url().'admin/messages'; ?>"><i class="lni lni-dollar"></i>Contact Us</a>
                                </li>
                            </ul>                            

                        </li>                            
                        <?php 
                            if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_category == "Admin"){?>                        
                                <li> <a class="has-arrow" href="javascript:;"><i class="fadeIn animated bx bx-task"></i>Staff</a>
                                    <ul>
                                        <li> <a href="#"><i class="lni lni-dollar"></i>Create/Update Account</a>
                                        </li>   
                                    </ul>                                    
                                    <!-- <ul>
                                        <li> <a href="<?php echo base_url().'admin/dailycontributionbyinspector'; ?>"><i class="lni lni-dollar"></i>Renumeration</a>
                                        </li>
                                    </ul> -->
                                </li>                            
                        <?php } ?>
                                        
                        <!-- <li> <a class="has-arrow" href="javascript:;"><i class="fadeIn animated bx bx-task"></i>Monetaries</a>
                            <ul>
                                <li> <a href="<?php echo base_url().'admin/loanweeklyrepaymentbyinspector'; ?>"><i class="lni lni-dollar"></i>Setup Fee</a>
                                </li>   
                            </ul>                                    
                            <ul>
                                <li> <a href="<?php echo base_url().'admin/dailycontributionbyinspector'; ?>"><i class="lni lni-dollar"></i>Debit/Credit by Class</a>
                                </li>
                            </ul>
                            <ul>
                                <li> <a href="<?php echo base_url().'admin/dailycontributionbyinspector'; ?>"><i class="lni lni-dollar"></i>Debit/Credit by Student</a>
                                </li>
                            </ul>
                            <ul>
                                <li> <a href="<?php echo base_url().'admin/dailycontributionbyinspector'; ?>"><i class="lni lni-dollar"></i>Setup/Manage Expenses</a>
                                </li>
                            </ul>
                        </li>                             -->
                

                        <li> 
                            <a class="has-arrow" href="javascript:;"><i class="fadeIn animated bx bx-user"></i>Utilities</a>
                            <ul>
                                <li> <a href="<?php echo base_url(). 'admin/userprofile'; ?>"><i class="bx bx-user-circle"></i>Edit Profile</a>
                                </li>
                            </ul>
                            <ul>
                                <li> <a href="<?php echo base_url().'admin/logout'; ?>"><i class="bx bx-power-off"></i>Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-label">Others</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="lni lni-plus"></i>
                </div>
                <div class="menu-title">Addendum</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>----</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>----</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
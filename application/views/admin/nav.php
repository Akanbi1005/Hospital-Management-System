<div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?= base_url("assets/assets/img/avatar-1.jpg")?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Medical</h1>
              <p>GGH</p>
            </div>
          </div>
          
          <?php   
          if(empty($this->user_data['fname']&&$this->user_data['pnumber'])) { ?>
            <!-- Sidebar Navidation Menus-->
            <span class="heading">Main</span>
            <ul class="list-unstyled">
              <li class="active"><a href="<?=site_url('Admin/index')?>"> <i class="fa fa-user-md"></i>Home </a></li>
              <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-stethoscope"></i>Patient Log</a>
                
                <ul id="chartsDropdown" class="collapse list-unstyled ">
                  <li><a href="<?=site_url("Admin/new-patient-side")?>"><i class="fa fa-user"></i>Carding</a></li>
                  <li><a href="<?=site_url("Admin/viewpatientside")?>"><i class="fa fa-ticket"></i>View Card Info</a></li>
                  <li><a href="<?=site_url("Admin/book")?>"><i class="fa fa-fire"></i>Book Appointment</a></li>
                  <li><a href="<?=site_url("Admin/com")?>"><i class="fa fa-comments-o"></i>Complains</a></li>
                  <li><a href="<?=site_url("Admin/view-complain")?>"><i class="fa fa-crosshairs"></i>Veiw Complains</a></li>
                </ul>
              </li>
              <li><a href="<?=site_url("Login/logout")?>"> <i class="fa fa-sign-out"></i>Log Out</a></li>
            </ul>
            <?php
          }else { ?>
            <!-- Sidebar Navidation Menus-->
            <span class="heading">Main</span>
            <ul class="list-unstyled">
              <li class="active"><a href="<?=site_url('Admin/index')?>"> <i class="fa fa-user-md"></i>Home </a></li>
                <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-stethoscope"></i>Patient Log</a>
                  
                  <ul id="chartsDropdown" class="collapse list-unstyled ">  
                  <li><a href="<?=site_url("Admin/viewpatientside")?>"><i class="fa fa-ticket"></i>View Card Info</a></li>
                  <li><a href="<?=site_url("Admin/book")?>"><i class="fa fa-fire"></i>Book Appointment</a></li>
                  <li><a href="<?=site_url("Admin/com")?>"><i class="fa fa-comments-o"></i>Complains</a></li>
                  <li><a href="<?=site_url("Admin/view-complain")?>"><i class="fa fa-crosshairs"></i>Veiw Complains</a></li>
                </ul>
              </li>
              <li><a href="<?=site_url("Login/logout")?>"> <i class="fa fa-sign-out"></i>Log Out</a></li>
            </ul>
            <?php 
          } ?>    
      </nav>
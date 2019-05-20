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
          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="<?=site_url("Admin/")?>"> <i class="fa fa-deviantart"></i>Home </a></li>
                    
                    <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-stethoscope"></i>Carding Section</a>
                      <ul id="chartsDropdown" class="collapse list-unstyled ">
                        <li><a href="<?=site_url("Admin/new-patient")?>"><i class="fa fa-american-sign-language-interpreting"></i>New Patient</a></li>
                        <li><a href="<?=site_url("Admin/doctors-diag")?>"><i class="fa fa-fire"></i>Doctor Diagnosis</a></li>
                      </ul>
                    </li>
                    <li><a href="<?=site_url("Admin/view-patient")?>"><i class="fa fa-book"></i>Patients Record</a></li>
                    <li><a href="<?=site_url("Admin/docside-complain")?>"><i class="fa fa-eye-slash "></i>Patients Complaint</a></li>
                    <li><a href="<?=site_url("Admin/")?> docapp.php"><i class="fa fa-meetup"></i>Appointments</a></li>
                    <li><a href="<?=site_url("Login/logout")?>"> <i class=" fa fa-sign-out"></i>Log Out</a></li>
          </ul>
        </nav>
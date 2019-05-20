<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Forms</h2>
        </div>
    
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active"> Medical Record </li>
        
        </ul>
    </div>
    <!-- Forms Section-->
    
    <section >
        <div class="container-fluid">
            <div class="container">
                <?php
                if (empty($this->user_data['fname'])) {
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">No Card Information to Display</div>';
                }else{?>
                <div class="col-xg-6">
                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <section>
                            <div class="card-body">
                                <div class="container col-xg-6">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Patient ID:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['idcard'];?></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Full Name:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['fname'];?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Sex:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['sex'];?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Phone Number:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['pnumber'];?></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Email Address:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['email'];?></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Home Address:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['ad'];?></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Blood Group:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['blood'];?></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Geno Type:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['geno'];?></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Age:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['age'];?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Mother Name:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['mname'];?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Height:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['height'];?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Weight:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_data['weight'];?></p>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </section>
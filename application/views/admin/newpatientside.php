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
            <li class="breadcrumb-item"><a href="<?=site_url("Admin/")?>">Home</a></li>
            <li class="breadcrumb-item active">Forms            </li>
        </ul>
    
    
    </div>
    <!-- Forms Section-->
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    KIndly Fill in the Right Information
                </div>
                
                <!-- Form Elements -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="h4">New Patient Fill </h3>
                        
                        </div>
                        <div class="card-body">
                            <?=form_open('Admin/process', array('class' => 'form-horizontal'))?>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Full Name:</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Akanbi Horlamilekan Ibrahim" name="fname" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Phone Number:</label>
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="+234 8109832786" name="pnumber" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email:</label>
                                    <div class="col-sm-6">
                                        <input type="email" placeholder="General@Hospitalist.com" name="email" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Home Address</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Home Address" name="ad" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Age</label>
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="16 Years" name="age" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Next of Kin</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Next of King" name="kin" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label"></label>
                                    <div class="col-sm-3">
                                        <input type="hidden"  name="patientid" value="<?=$this->user_data['idcard']?>">
                                    </div>
                                </div>
                                
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Mother Name</label>
                                    <div class="col-sm-3">
                                        <input type="text" placeholder="Mother" name="mname" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Height</label>
                                    <div class="col-sm-3">
                                        <input type="number" placeholder="162" name="height" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Weight</label>
                                    <div class="col-sm-3">
                                        <input type="number" placeholder="38" name="weight" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="line"></div>
                                <div class="form-group row" id="formRight">
                                    <label class="col-sm-3 form-control-label" id="formRight">Sex</label>
                                    <div class="col-sm-3">
                                        <select name="sex" class="form-control">
                                            <option>-----</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    
                                    <div class="line"></div>
                                    <div class="form-group row" id="formRight">
                                        <label class="col-lg-6 form-control-label">Blood Group</label>
                                        <div class="col-sm-6">
                                            <select name="blood" class="form-control">
                                                <option>-----</option>
                                                <option>O+</option>
                                                <option>O-</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="line"></div>
                                    <div class="container-fluid form-group row" id="formRight">
                                        <label class="col-sm-3 form-control-label">GenoType</label>
                                        <div class="col-sm-3">
                                            <select name="geno" class="form-control">
                                                <option>----</option>
                                                <option>AA</option>
                                                <option>AS</option>
                                                <option>SS</option>
                                                <option>AC(Uncommon)</option>
                                            </select>
                                        </div>
                                        <div class="line"></div>
                                         
                                        <button type="submit" name="submit" class="btn btn-info pull-right">Register Patient</button>
                                    </div>
                                <?=form_close()?>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
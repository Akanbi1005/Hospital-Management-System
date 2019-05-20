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
            <li class="breadcrumb-item"><a href="<?=site_url("admin/doc-side-view")?>">Home</a></li>
            <li class="breadcrumb-item active"><?php echo $record['fname']?> Medical Record </li>
        </ul>
    </div>
    <!-- Forms Section-->
    
    <section >
        <div class="container-fluid">
            <div class="container">
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
                                        <?=form_open('', array('class' => 'form-horizontal'))?>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Patient ID:</label>
                                                <div class="col-sm-9">
                                                    <p><?php echo $record['idcard'];?></p>
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo $record['id'];?>">
                                                    <input type="hidden" class="form-control" name="idcard" value="<?php echo $record['idcard'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Full Name:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="fname" value="<?php echo $record['fname'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Phone Number:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="pnumber" value="<?php echo $record['pnumber'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Email Address:</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email" value="<?php echo $record['email'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Home Address:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="ad" value="<?php echo $record['ad'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Age:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="age" value="<?php echo $record['age'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Next of Kin:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="kin" value="<?php echo $record['kin'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Mother Name:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="mname" value="<?php echo $record['mname'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Height:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="height" value="<?php echo $record['height'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Weight:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="weight" value="<?php echo $record['weight'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Gender:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="sex" value="<?php echo $record['sex'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Blood Group:</label>
                                                <div class="col-sm-9">
                                                    <?php $msg= $record['blood'];?>
                                                    <input type="text" class="form-control" name="blood" value="<?php echo $msg;?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Geno Type:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="geno" value="<?php echo $record['geno'];?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="submit" value="submit" class="btn btn-primary pull-right">
                                            </div>
                                        <?=form_close()?>
                                        
                                        
                                        <div class="form-group row">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </section>
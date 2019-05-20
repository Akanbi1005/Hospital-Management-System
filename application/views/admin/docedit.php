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
            <li class="breadcrumb-item"><a href="<?=site_url("Admin/docside")?>">Home</a></li>
            <li class="breadcrumb-item active">
             Medical Record </li>
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
                                                    <input type="text" class="form-control" name="idcard" value="<?php echo $record['idcard'];?>">
<!--                                                    <input type="hidden" class="form-control" name="id" value="--><?php //echo $record['id'];?><!--">-->
                                                
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Doctor's Review:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="review" value="<?php echo $record['docreview'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Doctor's Prescription:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="pre" value="<?php echo $record['docpre'];?>">
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
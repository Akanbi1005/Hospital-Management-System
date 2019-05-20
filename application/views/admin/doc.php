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
            <li class="breadcrumb-item active">Forms            </li>
        </ul>
    </div>
    <!-- Forms Section-->
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    
                    
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
                                <h3 class="h4">Doctor's Diagnosis</h3>
                                <!-- <p class="h4"><?=date('h:i:sa')?></p> -->
                            </div>
                            <div class="card-body">
                                <?=form_open('', array('class' => 'form-horizontal'))?>
                                <?=$msg?>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Patient id:</label>
                                        <div class="col-sm-3">
                                            <input type="number" placeholder="PA-XXX-XXXX" value="<?=$this->input->post('idcard')?>" name="idcard" class="form-control">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Doctor Diagnosis:</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="text" name="docreview"><?=$this->input->post('docreview')?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Doctor Prescription:</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="docpre"><?=$this->input->post('docpre')?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Next Date of Appointment:</label>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="" value="<?=date('Y-m-d', strtotime('+1 week'));?>" name="date" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary pull-left">Submit</button>
                                <?=form_close()?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

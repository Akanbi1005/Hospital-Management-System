<?php
if (empty($this->user_info)) {?>
    <section >
        <div class="container-fluid">
            <div class="container">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    No complain From this User
                </div>
            </div>
        </div>
    </section>
<?php }else{?>
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
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active"> <?=$this->user_info["name"]?> Complain View</li>
        </ul>
    </div>
    <!-- Forms Section-->

    <section >
        <div class="container-fluid">
            <div class="container">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    Note: You are unable to log another complain until your previous complain is resolve
                </div>
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
                                <!-- <div class="alert alert-info alert-dismissible fade show" role="alert">
                                  You are unable to log another complain until your previous complain is resolve
                                </div> -->
                                <div class="container col-xg-6">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Patient ID:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_info["idcard"];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Email Address:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo $this->user_info["email"];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Your Complain:</label>
                                            <div class="col-sm-9">
                                                <p><?php echo wordwrap($this->user_info["complain"], 30, "\n", true);?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </section>

    <?php }?>



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
            <li class="breadcrumb-item active"><?php echo $name['name']?> Complain</li>
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
                                    
                                    <?php
                                    if(empty($name)){
                                        echo '<div class="alert alert-danger">This patient has no doctors record</div>';
                                        echo '<a href="doc.php" class="btn btn-info pull-right"><i class="fa fa-thermometer-0"></i> See the Doctor</a>';
                                    }else{ ?>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Patient ID:</label>
                                                <div class="col-sm-9">
                                                    <p><?php echo $name['idcard'];?></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Full Name:</label>
                                                <div class="col-sm-9">
                                                    <p><?php echo $name['name'];?></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Email Address:</label>
                                                <div class="col-sm-9">
                                                    <p><?php echo $name['email'];?></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label">Complain:</label>
                                                <div class="col-sm-9">
                                                    <p><?php echo $name['complain'];?></p>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <?php
                                    }
                                    
                                    ?>
                                
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </section>


<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">View Patient Complain</h2>
        </div>
    </header>
    <!-- Dashboard Counts Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="container">
                <div class="col-xg-12">
                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Patient Table</h3>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Patient Id</th>
                                        <th>Full Name</th>
                                        <th>Email address</th>
                                    
                                    </tr>
                                    </thead>
                                    <?php
                                    
                                    $id = 1;
                                    foreach ($pcomplain as $patient )
                                    {
                                    ?>
                                    <tbody>
                                    <tr>
                                        
                                        <th scope="row">
                                            <?php echo $id++?></th>
                                        <td><?php echo $patient['idcard'];?></td>
                                        <td><?php echo $patient['name'];?></td>
                                        <td><?php echo $patient['email'];?></td>
                                        <td>
                                            
                                            <a class="" href="<?=site_url("Admin/doc-complain-view/".$patient['idcard'])?> ">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>View</strong></span>
                                            </a>
                                        </td>
                                        
                                        <td >
                                            
                                            <a class="" onclick="return confirm('Are You Sure to Delete?')" href="<?=site_url("Admin/doctors-com-delete/".$patient['idcard']) ?> ">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>Delete</strong></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="card">
    
    </div>
    </section>

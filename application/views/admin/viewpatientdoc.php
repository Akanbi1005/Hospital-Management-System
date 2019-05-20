
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
            <li class="breadcrumb-item active">Records</li>
        </ul>
    </div>
    <!-- Forms Section-->
    
    <section >
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
                                        <th>Phone Number</th>
                                        <th>Blood Group</th>
                                    
                                    </tr>
                                    </thead>
                                    <?php
                                    
                                    $id = 1;
                                    foreach ($precords as $patient)
                                    {
                                    ?>
                                    <tbody>
                                    <tr>
                                        
                                        <th scope="row">
                                            <?php echo $id++?></th>
                                        <td><?php echo $patient['idcard'];?></td>
                                        <td><?php echo $patient['fname'];?></td>
                                        <td><?php echo $patient['pnumber'];?></td>
                                        <td><?php echo $patient['blood'];?></td>
                                        
                                        <td >
                                            <a class="" href="<?=site_url("Admin/veiwrecord/".$patient['idcard'])?> ">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>View</strong></span>
                                            </a>
                                        </td>
                                        
                                        <td >
                                            
                                            <a class="" href="<?=site_url("Admin/record-edit/".$patient['idcard'])?>">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>Edit</strong></span>
                                            </a>
                                        </td>
                                        
                                        <td >
                                            
                                            <a class="" onclick="return confirm('Are You Sure to Delete?')" href="<?=site_url("Admin/deleterecord/".$patient['idcard'])?> ">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>Delete</strong></span>
                                            </a>
                                        </td>
                                        
                                        <td >
                                            <a class="" href="<?=site_url("Admin/doc-details/".$patient['idcard'])?>">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>Detailed</strong></span>
                                            </a>
                                        
                                        </td>
                                    
                                    </tr>
                                    
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <a href="<?=site_url("admin/docside")?>" class="btn btn-info pull-right"><i class="fa fa-thermometer-0"></i></a>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>


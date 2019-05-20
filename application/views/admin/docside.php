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
            <li class="breadcrumb-item"><a href="<?=site_url("Admin/view-patient")?>">Home</a></li>
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
                            <h3 class="h4">Registered Patient</h3>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Patient Id</th>
                                        <th>Doctor's Review</th>
                                        <th>Doctor's Prescription</th>
                                    
                                    </tr>
                                    </thead>
                                    <?php
                                    
                                    $id = 1;
                                    foreach ($records as $patient )
                                    {
                                    ?>
                                    <tbody>
                                    <tr>
                                        
                                        <th scope="row">
                                            <?php echo $id++?></th>
                                        <td><?php echo $patient['idcard'];?></td>
                                        <td><?php echo $patient['docreview'];?></td>
                                        <td><?php echo $patient['docpre'];?></td>
                                        <td >
                                            
                                            <a class="" href="<?=site_url("admin/doc-side-view/".$patient['idcard'])?> ">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>View</strong></span>
                                            </a>
                                        </td>
                                        
                                        <td >
                                            
                                            <a class="" href="<?=site_url("admin/docedit/".$patient['idcard'])?> ">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>Edit</strong></span>
                                            </a>
                                        </td>
                                        
                                        <td >
                                            
                                            <a class="" onclick="return confirm('Are You Sure to Delete?')" href="<?=site_url("admin/doc-delete/".$patient['idcard'])?> ">
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
    
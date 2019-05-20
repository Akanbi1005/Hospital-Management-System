<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Dashboard</h2>
        </div>
    </header>
    <!-- Dashboard Counts Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="row bg-white has-shadow">
                <!-- Item -->

                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-violet"><i class="fa fa-stethoscope"></i></div>
                        <div class="title"><span>New<br>Patient</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                            </div>
                        </div>
                        <div class="number"><strong><?php echo rand(3,20);?></strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-red"><i class="fa fa-user-md"></i></div>
                        <div class="title"><span>Active<br>Doctors</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                            </div>
                        </div>
                        <div class="number"><strong><?php echo rand(37,100);?></strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-green"><i class="icon-bill"></i></div>
                        <div class="title"><span>New<br>Invoices</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                        <div class="number"><strong><?php echo rand(50,149);?></strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-orange"><i class="icon-padnote"></i></div>
                        <div class="title"><span>Open<br>Treatment</span>
                            <div class="progress">
                                <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                            </div>
                        </div>
                        <div class="number"><strong><?php echo rand(20,90);?></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="card">

    </div>
    <!-- Client Section-->
    <section class="client no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Work Amount  -->
                <div class="col-lg-4">
                    <div class="work-amount card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Work Hours</h3><small>Gbagada General Hospital Work Hour Starts 8:00am - 10:00pm</small>
                            <div class="chart text-center">
                                <div class="text"><strong>15</strong><br><span>Hours</span></div>
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Profile -->
                <div class="col-lg-4">
                    <div class="client card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="client-avatar"><img src="<?=base_url("assets/assets/img/avatar-".substr(str_shuffle('1234'),0, 1).".jpg")?>" alt="..." class="img-fluid rounded-circle">
                                <div class="status bg-green"></div>
                            </div>


                            <div class="client-title">
                                <h3>Jason Doe</h3><span>Sugeon</span><a href="#"></a>
                            </div>

                            <div class="client-social d-flex justify-content-between"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a><a href="#" target="_blank"><i class="fa fa-twitter"></i></a><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank"><i class="fa fa-instagram"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                    </div>
                </div>
                <!-- Total Overdue             -->
                <div class="col-lg-4">
                    <div class="overdue card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Total Overdue</h3><small>Amount to be Paided.</small>
                            <div class="number text-center"><?php
                                $rand = rand(5000,30000); echo "$rand"." Naria"; ?></div>
                            <div class="chart">
                                <canvas id="lineChart1">                               </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feeds Section-->
    <section class="feeds no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-6">
                    <div class="daily-feeds card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard7" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="h4">Daily Feeds</h3>
                        </div>
                        <div class="card-body no-padding">
                            <!-- Item-->
                            <div class="item">
                                <div class="feed d-flex justify-content-between">
                                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="<?=base_url("assets/assets/img/avatar-2.jpg")?>" alt="person" class="img-fluid rounded-circle"></a>
                                        <div class="content">
                                            <h5>Aria Smith</h5><span>Posted a new Medical Article</span>
                                            <div class="full-date"><small>Today 5:60 pm - 12.06.2018</small></div>
                                        </div>
                                    </div>
                                    <div class="date text-right"><small>Hours ago</small></div>
                                </div>
                            </div>
                            <!-- Item-->
                            <div class="item">
                                <div class="feed d-flex justify-content-between">
                                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="<?=base_url("assets/assets/img/s.jpg")?>" alt="person" class="img-fluid rounded-circle"></a>
                                        <div class="content">
                                            <h5>Frank Williams</h5><span>Posted a News</span>
                                            <div class="full-date"><small>Today 5:60 pm - 12.08.2018</small></div>
                                            <div class="CTAs"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-thumbs-up"> </i>Like</a><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-heart"> </i>Love    </a></div>
                                        </div>
                                    </div>
                                    <div class="date text-right"><small>Hours ago</small></div>
                                </div>
                            </div>
                            <!-- Item-->
                            <div class="item clearfix">
                                <div class="feed d-flex justify-content-between">
                                    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="<?=base_url("assets/assets/img/avatar-3.jpg")?>" alt="person" class="img-fluid rounded-circle"></a>
                                        <div class="content">
                                            <h5>Ashley Wood</h5><span>Posted a new Medical Article</span>
                                            <div class="full-date"><small>Today 5:60 pm - 12.08.2018</small></div>
                                        </div>
                                    </div>
                                    <div class="date text-right"><small>hours ago</small></div>
                                </div>
                                <div class="quote has-shadow"> <small>.</small></div>
                                <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-thumbs-up"> </i>Like</a></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Check List -->
                <div class="col-lg-6">
                    <div class="checklist card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h3">To Do List </h2>
                        </div>
                        <div class="card-body no-padding">
                            <div class="item d-flex">
                                <input type="checkbox" id="input-1" name="input-1" class="checkbox-template">
                                <label for="input-1">Rounds the Ward Check 8:00 - 10:00am .</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-2" name="input-2" class="checkbox-template">
                                <label for="input-2">Rounds Check on the Nurses</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-3" name="input-3" class="checkbox-template">
                                <label for="input-3">Departmental reviews, Patient Addministration 0f Drugs.</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-4" name="input-4" class="checkbox-template">
                                <label for="input-4">Patients Files reviews.</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-5" name="input-5" class="checkbox-template">
                                <label for="input-5">Discharge of Patient for the Day .</label>
                            </div>
                            <div class="item d-flex">
                                <input type="checkbox" id="input-6" name="input-6" class="checkbox-template">
                                <label for="input-6">Closing Hour check on Patient.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Complaint Section</h2>
        </div>
    </header>
    <!-- Dashboard Counts Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <?=form_open('admin/process-complain', array('class' => 'form-validate'))?>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Full Name:</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" value="<?=$this->user_data['FullName'];?>" name="fname" class="form-control">
                    </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" placeholder="General@Hospitalist.com" name="email" value="<?=$this->user_data['Email'];?>" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                </div>
                <div class="col-sm-6">
                    <input type="hidden"  name="idcard" value="<?=$this->user_data['idcard'];?>" class="form-control">
                </div>
        </div>
        <div class="line"></div>
        <div class="line"></div>
        
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Complains Area</label>
            <textarea type="textarea" class="form-control" name="complain" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="line"></div>
        <div class="form-group ">
            <button type="submit" name="submit" class="btn btn-outline-primary pull-right">Submit Complain</button>
        </div>
    
        <?=form_close()?>
    </section>
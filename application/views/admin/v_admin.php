<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header text-center">
                        <h4 class="title">Data Kebudayaan</h4>
                    </div>
                    <hr>
                    <div class="content text-center row">
                        <a href="<?php echo base_url('admin/in_kebudayaan'); ?>" class="btn btn-primary btn-lg">
                            <i class="pe-7s-plus"> Add</i>
                        </a>
                        <a href="<?php echo base_url('admin/data_kebudayaan'); ?>" class="btn btn-warning btn-lg">
                            <i class="pe-7s-refresh"> Update</i>
                        </a>
                        <a href="<?php echo base_url('admin/data_kebudayaan'); ?>" class="btn btn-danger btn-lg">
                            <i class="pe-7s-less"> Delete</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="header text-center">
                        <h4 class="title">Data Berita</h4>
                    </div>
                    <hr>
                    <div class="content text-center row">
                        <a href="<?php echo base_url('admin/in_berita'); ?>" class="btn btn-primary btn-lg">
                            <i class="pe-7s-plus"> Add</i>
                        </a>
                        <a href="<?php echo base_url('admin/data_berita'); ?>" class="btn btn-warning btn-lg">
                            <i class="pe-7s-refresh"> Update</i>
                        </a>
                        <a href="<?php echo base_url('admin/data_berita'); ?>" class="btn btn-danger btn-lg">
                            <i class="pe-7s-less"> Delete</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Users Behavior</h4>
                        <p class="category">24 Hours performance</p>
                    </div>
                    <div class="content">
                        <div id="chartHours" class="ct-chart"></div>
                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Click
                                <i class="fa fa-circle text-warning"></i> Click Second Time
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="height: auto; background-color: #c5e5ec;" class="main-page">
        <div style="background-color: #c5e5ec" ;>
            <div class="container">
                <?php
                foreach ($kuliner->result() as $key) { ?>
                <div class="col-md-3">
                    <!--Card-->
                    <div class="card card-cascade wider">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="<?php echo base_url()?>assets/uploads/<? echo $key->gambar;?>" class="img-fluid">
                            <a href="">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/Card image-->
                        <!--Card content-->
                        <div class="card-block text-xs-center">
                            <!--Title-->
                            <h4 class="card-title"><?php echo $key->nama ?></h4>
                            <?php echo anchor('kebudayaan/up/'.$key->id, '<div class="btn btn-sm btn-primary">detail</div>');?>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card-->
                </div>
                <?php }?>
            </div>
        </div>
    </div>

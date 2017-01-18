<div style="height: auto; background-color: #c5e5ec;" class="main-page">
        <div style="background-color: #c5e5ec" ;>
            <div class="container">
                <!--Jumbotron-->
                <div class="jumbotron">
                    <div class="container">

                        <div class="col-md-6 col-md-offset-3">
                            <!--Card-->
                            <div class="card card-cascade wider">
                                <!--Card image-->
                                <div class="view overlay hm-white-slight flex-center">
                                    <img src="<?php echo base_url()?>assets/uploads/<?php echo $query['gambar'];?>" class="img-fluid">
                                    <a href="#!">
                                        <div class="mask"></div>
                                    </a>
                                </div>
                                <!--/Card image-->
                            </div>
                            <!--/.Card-->
                        </div>
                        <div class="col-md-12">
                            <!--Card content-->
                            <div class="card-blockr">
                                <!--Title-->
                                <div class="text-xs-center konten-title">
                                    <h3 class="card-title"><strong><?php echo $query['nama'];?></strong></h3>
                                </div>
                                <p class="card-text">
                                <?php echo $query['isi'];?></p>
                            </div>
                            <!--/.Card content-->
                        </div>
                    </div>
                </div>
                <!--/.Jumbotron-->
            </div>
        </div>
    </div>

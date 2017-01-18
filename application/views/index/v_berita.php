<div style="height: auto; background-color: #c5e5ec;;" class="main-page">
    <div style="background-color: #c5e5ec;" ;>
        <div class="container">
            <!--Jumbotron-->
            <div class="jumbotron">
                <div class="container">
                    <!--Section: Comments list-->
                    <section>
                        <!--Main wrapper-->
                        <div class="comments-list">
                            <div class="section-heading">
                                <h1>Berita</h1>
                                <hr>
                            </div>
                            <?php
                                foreach ($query as $key) { ?>
                            <!--First row-->
                            <div class="row container">
                                <!--Image column-->
                                <!--/.Image column-->
                                <!--Content column-->
                                <div class="col-sm-12 col-xs-12 berita-title">
                                    <a>
                                        <h3 class="user-name">
                                            <?php echo $key->judul ?>
                                        </h3>
                                    </a>
                                    <div class="card-data">
                                        <ul>
                                            <li class="comment-date"><i class="glyphicon glyphicon-time"></i>
                                                <?php echo $key->create_at ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="comment-text">
                                        <?php echo $key->artikel ?>
                                    </p>
                                </div>
                                <!--/.Content column-->
                            </div>
                            <!--/.First row-->
                            <hr>
                            <?php } ?>
                        </div>
                        <!--/.Main wrapper-->
                    </section>
                    <!--/Section: Comments list-->
                </div>
            </div>
        </div>
    </div>
</div>
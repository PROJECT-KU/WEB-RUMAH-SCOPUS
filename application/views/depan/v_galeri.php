<!--============================= Gallery =============================-->

<section class="service-wrapper py-3">
        <div class="service-tag py-5 bg-secondary">
            <div class="col-md-12">
                <?php foreach ($alb->result() as $row) : ?>
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".<?php echo $row->album_id;?>"><?php echo $row->album_nama;?></a>
                    </li>
                </ul>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <!--<section class="container overflow-hidden py-5">
    <?php foreach ($alb->result() as $row) : ?>
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 <?php echo $row->album_id;?>">
        <?php endforeach;?>
            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <?php foreach ($all_galeri->result() as $row) : ?>
                    <img class="service card-img" src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"><?php echo $row->galeri_judul;?></span>
                            <p class="card-text"><?php echo $row->galeri_album_nama;?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </a>
            </div>

           

        </div>
    </section>-->
    <!-- End Service -->







<div class="gallery-wrap">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <h3 class="gallery-style">Gallery Photo</h3>
            </div>
        </div><br>
        <div class="row"> 
            <?php foreach ($alb->result() as $row) : ?>
            <div class="col-md-12 <?php echo $row->album_id;?>">
            <?php endforeach;?>
                <div id="gallery">
                    <div id="gallery-content">
                        <div id="gallery-content-center">
                            <?php foreach ($all_galeri->result() as $row) : ?>
                                <a href="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                                    <img src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" class="img-fluid mb-2" alt="black sample"/>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================= END =============================-->
<!--============================= FILTER ALBUM =============================-->
<div class="gallery-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="gallery-style">Gallery Photo</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8" style="position: relative; margin:10px;">
                <center>
                    <?php foreach ($alb->result() as $row) : ?>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">  <?= anchor('Galeri/album/' . $row->album_id, '<div class="filter-btn nav-link btn btn-outline-inforounded-pill text-light px-4">'.$row->album_nama.'</div>')  ?></a>
                            </li>
                        </ul>
                    <?php endforeach;?>
                </center>
            </div>
        </div>
    </div>
</div>
<!--============================= END =============================-->


<!--============================= GALLERY FOTO BERDASAR ALBUM =============================-->
<div class="gallery-wrap" style="margin-top:-100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--<h3 class="gallery-style">Gallery Photo</h3>-->
            </div>
        </div>
        <div class="row"> 
            
                <?php foreach ($data->result() as $row) : ?>
                <?php endforeach;?>
                <div class="col-md-12">
                <div id="gallery">
                    <div id="gallery-content">
                        <div id="gallery-content-center">
                            <?php foreach ($data->result() as $row) : ?>
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
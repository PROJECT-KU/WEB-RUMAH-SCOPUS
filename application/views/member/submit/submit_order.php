<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-D5bhbIKoHpoTznUD"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

     

      <!-- Right navbar links -->
      
    </nav>
    <!-- /.navbar -->




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Konfirmasi Order Submit & Publish</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('member/dasboard') ?>">Member</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('member/order') ?>">Order</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('member/order/bengkel_detail') ?>">Submit & Publish</a></li>
                <li class="breadcrumb-item active">Konfirmasi Order</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- Timelime example  -->
          <div class="row">
            <div class="col-md-12">
              <!-- The time line -->
              <div class="row">
                <table class="table">
                  <form action="<?= base_url('member/order/bengkel_order_now') ?>" method="POST">

                    <?php
                    $id_webinar = $this->uri->segment(4);
                    $webinar = $this->db->get_where('tbl_webinar', ['id' => $id_webinar])->row_array();
                    ?>
                    <tbody>
                      <tr>
                        <td>Order Code</td>
                        <td colspan="3">: <?= $kode_order = random_string('alnum', 5) ?></td>
                        <input type="hidden" name="kode" value="<?php echo $kode_order ?>">
                      </tr>
                      <tr>
                        <td>Order Date</td>
                        <td colspan="3">: <?= date('d F Y'); ?></td>
                        <input type="hidden" name="tgl" value="<?php echo date('d F Y'); ?>">
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td colspan="3">: <?= $user['nama'] ?></td>
                        <input type="hidden" name="nama" value="<?php echo $user['nama'] ?>">
                      </tr>
                      <tr>
                        <td>E-mail</td>
                        <td colspan="2">: <?= $user['email'] ?></td>
                        <input type="hidden" name="email" value="<?php echo  $user['email'] ?>">
                      </tr>
<tr>
                        <td>Category</td>
                        <td colspan="2">: Submit & Publish </td>
                        <input type="hidden" name="kategori" value="Submit & Publish ">
                      </tr>

                      <tr>
                        <td>Price</td>
                        <td colspan="2">: Rp.3.000.000,-</td>
                        <input type="hidden" name="harga" value="3000000">
                    </tbody>


                </table>
                <input class="btn btn-primary" type="submit" value="Order Now!">
                <!--<button class="btn btn-primary" id="pay-button" ">Pay!</button>-->
                </form>

               
      </section> <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</body>

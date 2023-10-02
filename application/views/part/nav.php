<header class="pb-6 mb-4 border-bottom">
<nav class="navbar bg-success navbar-expand-lg fixed-top "  data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kembali </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($active=="prodi"){
            echo "active";
          } ?>" aria-current="page" href="<?php echo base_url();?>prodi">Program Studi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php  if($active=="grupwa"){
            echo "active";
          } ?>" href="<?php echo base_url();?>grup">Group Wa</a>
        </li>
          <li class="nav-item">
          <a class="nav-link <?php  if($active=="setbiaya"){
            echo "active";
          } ?>" href="<?php echo base_url();?>biaya">Set Biaya Registrasi</a>
        </li>
           <li class="nav-item">
          <a class="nav-link <?php  if($active=="rekap1"){
            echo "active";
          } ?>" href="<?php echo base_url();?>rekapitulasi1">Rekapitulasi Pendaftaran</a>
        </li>
          <li class="nav-item">
          <a class="nav-link <?php  if($active=="rekap2"){
            echo "active";
          } ?>" href="<?php echo base_url();?>rekapitulasi2">Rekapitulasi Registrasi</a>
        </li>
          <li class="nav-item">
          <a class="nav-link <?php  if($active=="list1"){
            echo "active";
          } ?>" href="<?php echo base_url();?>list_pendaftaran">List Pembayaran Pendaftaran</a>
        </li>
            <li class="nav-item">
          <a class="nav-link <?php  if($active=="list2"){
            echo "active";
          } ?>" href="<?php echo base_url();?>list_regis">List Pembayaran Registrasi</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
      <span class="navbar-text">
       <?php echo date("d-m-Y");?>
      </span>
    </div>
  </div>
</nav>
<::after></::after>
    </header>
     
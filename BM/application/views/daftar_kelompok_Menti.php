<h3>Daftar Kelompok</h3><br>
	<h4><?php echo $this->session->flashdata('daftar_kelompok');?></h4>
  <?php if($status == true){ ?>
      <h4>Nama Kelompok : <?php echo $nama_kelompok; ?></h4>
      <table class="table">
        <tr>
          <td colspan="7"><b>DATA DIRI MENTOR</b></td>
        </tr>
        <tr>
          <td>NIM</td>
          <td>Nama</td>
          <td>Fakultas</td>
          <td>Prodi</td>
          <td>Angkatan</td>
          <td>HP</td>
          <td>Foto</td>
        </tr>
        <tr>
          <td><?php echo $mentor->nim; ?></td>
          <td><?php echo $mentor->nama; ?></td>
          <td><?php echo $mentor->fakultas; ?></td>
          <td><?php echo $mentor->prodi; ?></td>
          <td><?php echo $mentor->tahun_masuk; ?></td>
          <td><?php echo $mentor->hp; ?></td>
          <td><img src="<?php echo base_url().'assets/img/profile_pictures/'.$mentor->foto ?>" class="img-thumbnail"></td>
        </tr>
        <tr>
          <td colspan="7"><b>DATA TEMAN KELOMPOK</b></td>
        </tr>
        <?php 
        for($i = 1;$i <= (count($menti)/7);$i++){ ?>
          <tr>
            <td><?php echo $menti[$i.'_nim']; ?></td>
            <td><?php echo $menti[$i.'_nama']; ?></td>
            <td><?php echo $menti[$i.'_fakultas']; ?></td>
            <td><?php echo $menti[$i.'_prodi']; ?></td>
            <td><?php echo $menti[$i.'_angkatan']; ?></td>
            <td><?php echo $menti[$i.'_hp']; ?></td>
            <td><img src="<?php echo base_url().'assets/img/profile_pictures/'.$menti[$i.'_foto'] ?>" class="img-thumbnail"></td>
          </tr>
        <?php } ?>
      </table>
    <?php }else{
      echo '<h4>Kelompok belum ditemukan.</h4>';
      } ?>
      
	<h3>Edit Profile <?php echo $row->nama ?></h3>
	<h4 style="color:red"><?php echo $this->session->flashdata('edit_profile');?></h4>
      <div class="col-lg-3">
            <img alt="<?php echo $row->nama ?>" src="<?php echo base_url()."assets/img/profile_pictures/$row->foto" ?>" class="img-thumbnail" />
      </div>
      <div class="col-lg-9 col-md-12">
            <form action="<?php echo base_url() ?>index.php/dashboard/do_edit_profile/<?php echo $this->session->userdata('nim'); ?>" method="post" enctype="multipart/form-data">
                <div class="col-lg-6 col-md-12">
                  <div class="form-group has-feedback">
              <label>NIM</label>
              <input type="text" class="form-control" placeholder="NIM" name="nim" value="<?php echo $row->nim ?>" required>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $row->nama ?>" required>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row->email ?>" required>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <label>Password Baru</label>
              <input type="password" class="form-control" placeholder="Password Baru" name="new_pass" pattern=".{8,}" title="8 characters minimum">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <label>Password Lama</label>
              <input type="password" class="form-control" placeholder="Password Lama" name="old_pass" pattern=".{8,}"   required title="8 characters minimum" required>
              <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <label>Jenis Kelamin : </label>
              <?php 
                  if($row->jk == "Laki-Laki"){
                        ?>
                        <input type="radio" name="jk" value="Laki-Laki" checked="true"> Laki - Laki
                        <input type="radio" name="jk" value="Perempuan"> Perempuan
                        <?php
                  }else{
                        ?>
                        <input type="radio" name="jk" value="Laki-Laki"> Laki - Laki
                        <input type="radio" name="jk" value="Perempuan" checked="true"> Perempuan
                        <?php
                  }
              ?>
            </div>
            <div class="form-group has-feedback">
            <label>Tanggal Lahir</label>
            <div class="input-group">
              <span class="input-group-addon">
                <span class="icon icon-calendar"></span>
              </span>
              <input type="text" name="ttl" class="form-control" data-provide="datepicker" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd" value="<?php echo $row->tgl_lahir ?>" required>
            </div>
            </div>
                </div>
            <div class="col-lg-6">
              <div class="form-group has-feedback">
              <label>Fakultas  </label>
              <select name="fakultas" class="form-control">
                <option value="FRI" <?php if($row->fakultas == 'FRI'){echo 'selected';} ?>>FRI</option>
                <option value="FIF" <?php if($row->fakultas == 'FIF'){echo 'selected';} ?>>FIF</option>
              </select><br>
              <label>Prodi  </label>
              <select name="prodi"  class="form-control">
                <option value="S1 Sistem Informasi" <?php if($row->fakultas == 'S1 Sistem Informasi'){echo 'selected';} ?>>S1 Sistem Informasi</option>
                <option value="S1 Teknik Industri" <?php if($row->fakultas == 'S1 Teknik Industri'){echo 'selected';} ?>>S1 Teknik Industri</option>
              </select><br>
              <label>Tahun Masuk  </label>
              <select name="tahun_masuk"  class="form-control">
                <option value="2012" <?php if($row->tahun_masuk == '2012'){echo 'selected';} ?>>2012</option>
                <option value="2013" <?php if($row->tahun_masuk == '2013'){echo 'selected';} ?>>2013</option>
              </select>
            </div>
            <div class="form-group has-feedback">
              <label>Nomor Handphone</label>
              <input type="text" class="form-control" placeholder="Nomor Handphone" name="hp" value="<?php echo $row->hp ?>" required>
              <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
            <div class="form-group">
                        <label for="exampleInputFile">Foto</label>
                        <input type="file" id="exampleInputFile" name="foto">
                      </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <button type="submit" class="btn btn-warning">Simpan</button>
              </div>
            </form>
      </div>
	
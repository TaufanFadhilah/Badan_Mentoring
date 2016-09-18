<h3>Daftar Kelompok</h3>
	<h4><?php echo $this->session->flashdata('daftar_kelompok');?></h4>
      <?php if(isset($status) == false){ ?>
            <form action="<?php echo base_url().'index.php/dashboard/save_kelompok/'.$this->session->userdata('nim') ?>" method="POST">
            <div class="row">
                  <div class="col-lg-12">
                        <div class="form-group">
                              <label>Nama Kelompok</label>
                              <input type="text" name="nama_kelompok" class="form-control"
                        </div>
                        <div class="form-group">
                              <label>Daftar Anggota</label>
                              <table class="table" id="myTable">
                                    <tr>
                                          <td>
                                                <input type="text" name="anggota_1" class="form-control" placeholder="Masukkan NIM">
                                          </td>
                                    </tr>
                              </table>
                              <button onclick="myFunction()" class="btn btn-default" type="button">Tambah Anggota</button>
                              <button onclick="myDeleteFunction()" class="btn btn-default" type="button">Hapus Anggota</button>
                        </div>
                  </div> 
            </div>
            <div class="row">
                  <div class="col-lg-6 .col-md-12">
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                  </div>
            </div>
            </form>
          <?php  }else{ ?>
                  <table class="table">
                        <thead>
                              <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                    <th>HP</th>
                                    <th>Foto</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php for($i = 1;$i <= (count($data)/5);$i++){ ?>
                                    <tr>
                                          <td><?php echo $i; ?></td>
                                          <td><?php echo $data['menti_'.$i.'_nim']; ?></td>
                                          <td><?php echo $data['menti_'.$i.'_nama']; ?></td>
                                          <td><?php echo $data['menti_'.$i.'_prodi']; ?></td>
                                          <td><?php echo $data['menti_'.$i.'_hp']; ?></td>
                                          <td>
                                                <img src="<?php echo base_url().'assets/img/profile_pictures/'.$data['menti_'.$i.'_foto'] ?>" alt="<?php echo $data['menti_'.$i.'_nim']." - ".$data['menti_'.$i.'_nama'] ?>" class="img-thumbnail">
                                          </td>
                                    </tr>
                              <?php } ?>
                        </tbody>
                  </table>
            <?php } ?>
      <script type="text/javascript">
            var i=2; 
            function myFunction() {
                var table = document.getElementById("myTable");
                var row = table.insertRow((table.rows.length));
                var cell1 = row.insertCell(0);
                cell1.innerHTML = '<input type="text" name="anggota_'+i+'" class="form-control" placeholder="Masukkan NIM">';
                i++;
            }
            function myDeleteFunction() {
                document.getElementById("myTable").deleteRow(-1);
            }
      </script>
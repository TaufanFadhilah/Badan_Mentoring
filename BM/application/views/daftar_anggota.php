	<h3>Daftar Anggota</h3>
	<h4><?php echo $this->session->flashdata('daftar_anggota');?></h4>
      <table class="display" id="daftar_anggota">
      	<thead>
      	<tr>
      		<th>No.</th>
      		<th>NIM</th>
      		<th>Nama</th>
      		<th>Fakultas</th>
      		<th>Prodi</th>
      		<th>Angkatan</th>
      		<th>No. HP</th>
      		<th>Action</th>
      	</tr>
      	</thead>
      	<tbody>
      	<?php $no = 1;foreach($data as $row){ ?>
      		<tr>
      			<td><?php echo $no ?></td>
      			<td><?php echo $row['nim'] ?></td>
      			<td><?php echo $row['nama'] ?></td>
      			<td><?php echo $row['fakultas'] ?></td>
      			<td><?php echo $row['prodi'] ?></td>
      			<td><?php echo $row['tahun_masuk'] ?></td>
      			<td><?php echo $row['hp'] ?></td>
      			<td>
      				<div class="col-lg-4">
      					<a href="<?php echo base_url() ?>index.php/dashboard/setMentoring/<?php echo $row['nim'] ?>"><button class="btn btn-success" alt="Hapus"><span class="icon icon-add-user"></span></button></a>
      				</div>
      				<div class="col-lg-4">
      					<a href="<?php echo base_url() ?>index.php/dashboard/reset_pass/<?php echo $row['nim'] ?>"><button class="btn btn-warning" alt="Hapus"><span class="icon icon-cycle"></span></button></a>
      				</div>
      				<div class="col-lg-4">
      					<a href="<?php echo base_url() ?>index.php/dashboard/delete/<?php echo $row['nim'] ?>"><button class="btn btn-danger" alt="Hapus"><span class="icon icon-trash"></span></button></a>
      				</div>
      			</td>
      		</tr>
      	<?php $no++;} ?>
      	</tbody>
      </table>
    
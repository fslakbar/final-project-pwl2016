<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Your Task</h4>
                    <p class="category">  Berisi daftar order yang diambil  </p>
                </div>
                
				<div class="content table-responsive ">
                    <table class="table table-hover table-striped table-bordered data">
                        <thead>
							<th>ID Pemesanan</th>
							<th>ID Cust.</th>
							<th>ID Hewan</th>
							<th>Nama</th>
							<th>Nama Hewan</th>
							<th>Tgl. booking</th>
							<th>Jenis Service</th>
                            <th>Tipe Service</th>
                            <th>No. Telp</th>
							<th>ID Pegawai bertugas</th>
                        </thead>
                                    <tbody>
										<?php foreach($data['order'] as $s):?>
                                        <tr>
                                        	<td><?php echo $s['id_pemesanan']?></td>
                                        	<td><?php echo $s['id_member']?></td>
                                        	<td><?php echo $s['id_hewan']?></td>
                                        	<td><?php echo $s['nama']?></td>
                                        	<td><?php echo $s['nama_hewan']?></td>
                                        	<td><?php echo $s['tanggal']?></td>
                                        	<td><?php echo $s['jenis_servis']?></td>
                                        	<td><?php echo $s['tipe_servis']?></td>
                                        	<td><?php echo $s['no_hp']?></td>
                                        	<td><?php echo $s['pegawai']?></td>
                                        </tr>
										<?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
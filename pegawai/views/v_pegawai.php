<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Pegawai</h4>
                                <p class="category">     </p>
                            </div>
                            <div class="content table-responsive ">
                                <table class="table table-hover table-striped table-bordered data">
                                    <thead>
										<th>NO</th>
                                        <th>ID</th>
                                    	<th>Nama</th>
										<th>Username</th>
										<th>Keahlian</th>
                                    	<th>Jenis Kelamin</th>
                                    	<th>Status</th>
                                    	<th>Alamat</th>
                                    </thead>
                                    <tbody>
										<?php $no=1;?>
										<?php foreach($data['pegawai'] as $s):?>
                                        <tr>
											<td><?php echo $no?></td>
                                        	<td><?php echo $s['id_pegawai']?></td>
                                        	<td><?php echo $s['nama']?></td>
											<td><?php echo $s['username']?></td>
											<td><?php echo $s['keahlian']?></td>
                                        	<td><?php echo $s['jk']?></td>
                                        	<td><?php echo $s['status']?></td>
                                        	<td><?php echo $s['alamat']?></td>
                                        </tr>
										<?php $no++?>
										<?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
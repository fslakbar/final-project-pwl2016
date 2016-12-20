<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Task</h4>
                                <p class="category">Paket yang telah dipesan oleh member</p>
                            </div>
                            <div class="content table-responsive">
                                <table class="table table-hover table-striped table-bordered data">
                                    <thead>
                                        <th>NO</th>
										<th>ID Pemesanan</th>
										<th>Jns. Hewan</th>
										<th>Nama Hewan</th>
										<th>Nama Pelanggan</th>
										<th>Tgl booking</th>
										<th>Jns. Service</th>
                                    	<th>Tipe Service</th>
                                    	<th>No. Telp</th>
                                    </thead>
                                    <tbody>
										<?php $no=1;?>
										<?php foreach($data['order'] as $s):?>
                                        <tr>
											<td><?php echo $no?>.</td>
                                        	<td align="center"><?php echo $s['id_pemesanan']?></td>
                                        	<td align="center"><?php echo $s['jenis_hewan']?></td>
                                        	<td align="center"><?php echo $s['nama_hewan']?></td>
                                        	<td align="center"><?php echo $s['nama_pelanggan']?></td>
                                        	<td align="center"><?php echo $s['tanggal']?></td>
                                        	<td align="center"><?php echo $s['jenis_servis']?></td>
                                        	<td align="center"><?php echo $s['tipe_servis']?></td>
                                        	<td align="center"><?php echo $s['no_hp']?></td>
                                        </tr>
										<?php $no++?>
										<?php endforeach?>
                                    </tbody> 
                                </table><!--
								<button type="submit" class="btn btn-info btn-fill pull-right"><a href="#">OK</a></button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
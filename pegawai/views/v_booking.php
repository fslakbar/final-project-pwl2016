<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Booking</h4>
                                <p class="category">Paket yang telah dipesan oleh member</p>
                            </div>
                            <div class="content table-responsive ">
                                <table class="table table-hover table-striped table-bordered data">
                                    <thead>
                                        <th>NO</th>
										<th>ID Cust.</th>
										<th>ID Hewan</th>
										<th>Tanggal booking</th>
										<th>Jenis Service</th>
                                    	<th>Tipe Service</th>
                                    	<th>No. Telp</th>
										<th>Terima</th>
                                    </thead>
                                    <tbody>
										<?php $no=1;?>
										<?php foreach($data['booking'] as $s):?>
                                        <tr>
											<td><?php echo $no?></td>
                                        	<td><?php echo $s['id_member']?></td>
                                        	<td><?php echo $s['id_hewan']?></td>
                                        	<td><?php echo $s['tanggal']?></td>
                                        	<td><?php echo $s['jenis_servis']?></td>
                                        	<td><?php echo $s['tipe_servis']?></td>
                                        	<td><?php echo $s['no_hp']?></td>
											<td><label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox">
                                                    </label></td>
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
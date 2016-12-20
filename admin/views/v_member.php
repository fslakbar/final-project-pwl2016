<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Anggota Member</h4>
                                <p class="category">   </p>
                            </div>
                            <div class="content table-responsive ">
                                <table class="table table-hover table-striped table-bordered data">
                                    <thead>
										<th>NO</th>
                                        <th>ID</th>
                                    	<th>Nama</th>
										<th>Username</th>
										<th>E-mail</th>
                                    	<th>Jenis Kelamin</th>
                                    	<th>Alamat</th>
										<th>No. Telp</th>
										<th>Action</th>
                                    </thead>
                                    <tbody>
										<?php $no=1;?>
										<?php foreach($data['member'] as $s):?>
                                        <tr>
											<td><?php echo $no?></td>
                                        	<td><?php echo $s['id_member']?></td>
                                        	<td><?php echo $s['nama']?></td>
											<td><?php echo $s['username']?></td>
											<td><?php echo $s['email']?></td>
                                        	<td><?php echo $s['jk']?></td>
                                        	<td><?php echo $s['alamat']?></td>
											<td><?php echo $s['no_hp']?></td>
											<td align=center>
												<a href="edit_member.php?id=<?php echo $s['id_member']?>">
												<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
													<i class="fa fa-edit"></i>
                                                </button></a>
												
												<a href="del_member.php?id=<?php echo $s['id_member']?>">
												<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                </button></a></td>
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
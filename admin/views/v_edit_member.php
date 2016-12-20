<div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ID Member</label>
                                                <input type="text" class="form-control" disabled value="<?php echo $data['st']['id_member']?>" name="input_id">
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" value="<?php echo $data['st']['username']?>" name="input_username">
                                            </div>
                                        </div> 
									</div>
									
                                    <div class="row">                                   
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" value="<?php echo $data['st']['nama']?>" name="input_nama">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" value="<?php echo $data['st']['email']?>" name="input_email">
                                            </div>
                                        </div> 
                                    </div>                                    
									
									<div class="row">                                   
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" value="<?php echo $data['st']['jk']?>" name="input_jk">
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control"  value="<?php echo $data['st']['password']?>" name="input_pass">
                                            </div>
                                        </div>	
                                    </div>

									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No. Telp</label>
                                                <input type="text" class="form-control"  value="<?php echo $data['st']['no_hp']?>" name="input_no_hp">
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control"  value="<?php echo $data['st']['alamat']?>" name="input_alamat">
                                            </div>
                                        </div>
                                    </div>	
									
									
									<button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
<div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ID Karyawan</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="<?php echo $id_peg ?>">
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" disabled value="<?php echo $username?>">
                                            </div>
                                        </div> 
									</div>
									
                                    <div class="row">                                   
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" disabled value="<?php echo $login_session?>">
                                            </div>
                                        </div>
                                    </div>                                    
									
									<div class="row">                                   
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" placeholder="" disabled value="<?php echo $jk?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Keahlian</label>
                                                <input type="text" class="form-control" placeholder="" disabled value="<?php echo $keahlian?>">
                                            </div>
                                        </div> 
                                    </div>
									
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" disabled value="<?php echo $alamat?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">I'm sorry, I cant afford a ferrari, but that don't mean I cant get you there. Cause he's an xbox and I'm more like atari.</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-left"><a href="edit_user.php">Edit Profile</a></button>               
									
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="../assets/img/faces/face-0.jpg" alt="..."/>

                                      <h4 class="title"><?php echo $login_session?><br />
                                         <small><?php echo $username?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "I.m sorry, I cant afford a ferrari, but that don't mean I cant get you there. Cause he's an xbox and I'm more like atari"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
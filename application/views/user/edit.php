            <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Edit User</h1>
                          </header>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                          <div class=" form">
                                <?php foreach($user as $t){ ?>
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url(). 'user/update'; ?>">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Username *</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="username" name="username" minlength="2" type="text" value="<?php echo $t->username ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="nama" name="nama" minlength="2" type="text" value="<?php echo $t->nama ?>"required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="password" name="password" minlength="2" type="password" value="<?php echo $t->password ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Level</label>
                                          <div class="col-lg-10">
                                              <select class="form-control m-bot15" name="level">
                                                  <option value ="1" >Administrator</option>
                                                  <option value ="2" >Operator</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <?php echo anchor('user/index','<button class="btn btn-default" type="button">Cancel</button>'); ?>
                                          </div>
                                      </div>
                                  </form>
                                <?php } ?>
                          </div>
                      </section>
                  </div>
              </div>
              
          </section>

          <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/form-validation-script.js"></script>
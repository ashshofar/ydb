            <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Edit Organization</h1>
                          </header>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                          <div class=" form">
                                <?php foreach($organization as $t){ ?>
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url(). 'organization/update'; ?>">
                                      <input type="hidden" name="id" value="<?php echo $t->id_organization ?>">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Name *</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="name" name="name" minlength="2" type="text" value="<?php echo $t->nameo ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Programme</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="programme" name="programme" minlength="2" type="text" value="<?php echo $t->programme ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Topic *</label>
                                          <div class="col-lg-10">
                                              <select class="form-control m-bot15" name="topicid">
                                                  <?php
                                                      foreach ($topic as $row) {
                                                        echo '<option value="'.$row->id_topic.'">'.$row->topic.'</option>';
                                                      }

                                                  ?>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Address</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="address" minlength="2" type="text" value="<?php echo $t->programme ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Phone</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="phone" name="phone" minlength="2" type="text" value="<?php echo $t->phoneo ?>"/>
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="email" name="email" minlength="2" type="text" value="<?php echo $t->emailo ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Website</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="website" name="website" minlength="2" type="text" value="<?php echo $t->website ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Facebook</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="facebook" name="facebook" minlength="2" type="text" value="<?php echo $t->facebook ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Twitter</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="twitter" name="twitter" minlength="2" type="text" value="<?php echo $t->twitter ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Instagram</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="instagram" name="instagram" minlength="2" type="text" value="<?php echo $t->instagram ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <?php echo anchor('organization/index','<button class="btn btn-default" type="button">Cancel</button>'); ?>
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
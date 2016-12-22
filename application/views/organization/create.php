            <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Add Organization</h1>
                          </header>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                          <div class=" form">
                                  <form class="cmxform form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'organization/save'; ?>">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Name *</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="name" name="name" minlength="2" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Programme</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="programme" name="programme" ></textarea>
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
                                              <textarea class="form-control " id="address" name="address" ></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Phone</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="phone" name="phone" minlength="2" type="text" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="email" name="email" minlength="2" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Website</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="website" name="website" minlength="2" type="text"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Facebook</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="facebook" name="facebook" minlength="2" type="text"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Twitter</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="twitter" name="twitter" minlength="2" type="text"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Instagram</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="instagram" name="instagram" minlength="2" type="text"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Logo</label>
                                          <div class="col-lg-10">
                                              <input type="file" name="logo" class="form-control" />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <?php echo anchor('organization/index','<button class="btn btn-default" type="button">Cancel</button>'); ?>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                            </div>    
                      </section>
                  </div>
              </div>
          </section>

          <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/form-validation-script.js"></script>
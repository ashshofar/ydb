            <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Add Contact Person</h1>
                          </header>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                          <div class=" form">
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url(). 'cp/save'; ?>">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Name *</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="name" name="name" minlength="2" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Phone</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="phone" name="phone" minlength="2" type="text"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="email" name="email" minlength="2" type="text"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Organization *</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="organizationid" name="organizationid" minlength="1" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <?php echo anchor('cp/index','<button class="btn btn-default" type="button">Cancel</button>'); ?>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                                
                      </section>
                  </div>
              </div>
              
          </section>

          <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/form-validation-script.js"></script>
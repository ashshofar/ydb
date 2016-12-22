            <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Change Logo</h1>
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
                                  <form class="cmxform form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'organization/changelogosave'; ?>">
                                      <input type="hidden" name="id" value="<?php echo $t->id_organization ?>">
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
                                  <?php } ?>
                              </div>
                            </div>    
                      </section>
                  </div>
              </div>
          </section>

          <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/form-validation-script.js"></script>
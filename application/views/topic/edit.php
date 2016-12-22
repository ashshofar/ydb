            <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Edit Topic</h1>
                          </header>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                          <div class=" form">
                                <?php foreach($topic as $t){ ?>
                                  <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url(). 'topic/update'; ?>">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Topic *</label>
                                          <input type="hidden" name="id" value="<?php echo $t->id_topic ?>">
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="topic" name="topic" minlength="2" type="text" value="<?php echo $t->topic ?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Detail</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="detail" name="detail" minlength="2" type="text" value="<?php echo $t->detail ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <?php echo anchor('topic/index','<button class="btn btn-default" type="button">Cancel</button>'); ?>
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
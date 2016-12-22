            <section class="wrapper">
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="icon-book"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                              <?php foreach($topic as $t){ 
                                  echo $t;
                                }
                              ?>
                                 
                              </h1>
                              <p>Topics</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="icon-group"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                              <?php foreach($organization as $t){ 
                                  echo $t;
                                }
                              ?>
                              </h1>
                              <p>Organizations</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="icon-user"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                <?php foreach($cp as $t){ 
                                  echo $t;
                                }
                              ?>
                              </h1>
                              <p>Contact Person</p>
                          </div>
                      </section>
                  </div>

              </div>
              <!--state overview end-->

            </section>

            <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
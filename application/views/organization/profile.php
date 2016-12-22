          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                      <?php foreach($organization as $t){ ?>
                          <div class="user-heading round">
                              <a href="#">
                                <?php if($t->logo == ""){
                                    echo "<img src=".base_url()."assets/img/profile-avatar.jpg>";
                                    }else{
                                    echo "<img src=".base_url()."uploads/".$t->logo.">";
                                    }

                                  ?>
                              </a>
                              <h1><?php echo $t->nameo ?></h1>
                              <p><?php echo $t->emailo ?></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <?php echo anchor('organization/profile/'.$t->id_organization,'<li><i class="icon-user"></i> Profile</a></li>'); ?>
                              <?php echo anchor('organization/contact/'.$t->id_organization,'<li><i class="icon-calendar"></i> Contact Person</a></li>'); ?>
                              <?php echo anchor('organization/changelogo/'.$t->id_organization,'<li><i class="icon-pencil"></i> Change Logo</a></li>'); ?>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="bio-graph-heading">
                              PROFILE
                          </div>
                          <div class="panel-body bio-graph-info">
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Name </span>: <?php echo $t->nameo ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Programme </span>: <?php echo $t->programme ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Topic </span>: <?php echo $t->topicid ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Address </span>: <?php echo $t->address ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Phone </span>: <?php echo $t->phoneo ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Email </span>: <?php echo $t->emailo ?></p>
                                  </div>
                              </div>
                              <br/>
                              <h1>Social Media</h1>
                              <div class="row">
                                  <div class="bio-row">
                                        <p><span>Website </span>: <?php echo $t->website ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Facebook </span>: <?php echo $t->facebook ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Twitter </span>: <?php echo $t->twitter ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Instagram </span>: <?php echo $t->instagram ?></p>
                                    </div>
                              </div>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="bio-graph-heading">
                              PROGRAMME
                          </div>
                          <div class="panel-body bio-graph-info">
                              <div class="row">
                                  <div class="bio-row">
                                      <p><?php echo $t->programme ?></p>
                                  </div>
                                 <?php } ?> 
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      
  </section>

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    

      //knob
      $(".knob").knob();

  </script>

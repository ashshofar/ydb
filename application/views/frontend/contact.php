    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
          
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
                              <?php echo anchor('frontend/profile/'.$t->id_organization,'<li><i class="icon-user"></i> Profile</a></li>'); ?>
                              <?php echo anchor('frontend/contact/'.$t->id_organization,'<li><i class="icon-calendar"></i> Contact Person</a></li>'); ?>
                          </ul>
                      <?php } ?>
                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="bio-graph-heading">
                              Contact Person
                          </div>
                          <div class="panel-body bio-graph-info">
                             <div class="adv-table">
                                    <table  class="display table table-hover table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                          foreach($cp as $c){ 
                                          ?>
                                          <tr>
                                            <td><?php echo $c->name ?></td>
                                            <td><?php echo $c->phone ?></td>
                                            <td><?php echo $c->email ?></td>
                                          </tr>
                                      <?php } ?>
                                      </tbody>
                                  </table>
                                </div>
                          </div>
                          
                      </section>
                      </aside>
              </div>

              <!-- page end-->
          </section>
      <!--main content end-->
      
  </section>

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  
  <script>  

      //knob
      $(".knob").knob();

  </script>

   <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.js"></script>
      <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>

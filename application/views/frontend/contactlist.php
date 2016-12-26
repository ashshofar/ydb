    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />

              <div class="row">
              <div class="col-lg-4">
                      <section class="panel">
                          <header class="panel-heading">
                              <h2>Filter by Organization</h2>
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(). 'frontend/filtercontactlist'; ?>">
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Organization</label>
                                      <div class="col-lg-10">
                                              <select class="form-control m-bot15" name="organizationid">
                                                  <?php

                                                      foreach ($organization as $row) {
                                                        echo '<option value="'.$row->id_organization.'">'.$row->nameo.'</option>';
                                                      }

                                                  ?>
                                              </select>
                                          </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">Search</button>
                                          <?php echo anchor('frontend/','<button class="btn btn-default" type="button">Cancel Filter</button>'); ?>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>

                  </div>
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h2>Contact Person List</h2>
                          </header>
                          <div class="panel-body">
                              <div class="adv-table">
                                    <table  class="display table table-hover table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                          <th>Organization</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                          foreach($cp as $t){ 
                                          ?>
                                          <tr>
                                            <td><?php echo $t->name ?></td>
                                            <td><?php echo $t->phone ?></td>
                                            <td><?php echo $t->email ?></td>
                                            <td><?php echo $t->nameo ?></td>
                                          </tr>
                                      <?php } ?>
                                      </tbody>
                                  </table>
                                </div>
                          </div>
                      </section>

                  </div>
              </div>
      
      <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.js"></script>
      <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
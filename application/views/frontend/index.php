    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />

              <div class="row">
              <div class="col-lg-4">
                      <section class="panel">
                          <header class="panel-heading">
                              <h2>Filter</h2>
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Topic</label>
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
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">Search</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>

                  </div>
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h2>Organizations List</h2>
                          </header>
                          <div class="panel-body">
                              <div class="adv-table">
                                    <table  class="display table table-hover table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Topic</th>
                                          <th>Programme</th>
                                          <th>Address</th>
                                          <th style="width:300px;">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                          foreach($organization as $t){ 
                                          ?>
                                          <tr>
                                            <td><?php echo $t->nameo ?></td>
                                            <td><?php echo $t->topic ?></td>
                                            <td><?php echo $t->programme ?></td>
                                            <td><?php echo $t->address ?></td>
                                            <td>
                                                  <?php echo anchor('organization/profile/'.$t->id_organization,'<button class="btn btn-info btn-xs"><i class="icon-eye-open"> Profile </i></button>'); ?>
                                                  <?php echo anchor('organization/contact/'.$t->id_organization,'<button class="btn btn-danger btn-xs"><i class="icon-group"></i> View Contact </button>'); ?>
                                                  </td>
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
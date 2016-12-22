    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />

          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Contact Person</h1>
                          </header>
                          <div class="panel-body">
                              <?php echo anchor('cp/create','<button class="btn btn-shadow btn-primary" type="button"><i class="icon-plus"></i> Add Contact Person</button>'); ?>
                          </div>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-hover table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                          <th>Organization</th>
                                          <th>Action</th>
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
                                            <td>
                                                  <?php echo anchor('cp/edit/'.$t->id_cp,'<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>'); ?>
                                                  <?php 
                                                  if ($level == 1){
                                                    echo anchor('cp/delete/'.$t->id_cp,'<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>'); 
                                                  } 
                                                 ?>
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
              
          </section>

           
      <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.js"></script>
      <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />

          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Topic</h1>
                          </header>
                          <div class="panel-body">
                              <?php echo anchor('topic/create','<button class="btn btn-shadow btn-primary" type="button"><i class="icon-plus"></i> Add Topic</button>'); ?>
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
                                          <th>Topic</th>
                                          <th>Detail</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                          foreach($topic as $t){ 
                                          ?>
                                          <tr>
                                            <td><?php echo $t->topic ?></td>
                                            <td><?php echo $t->detail ?></td>
                                            <td>
                                                  <?php echo anchor('topic/edit/'.$t->id_topic,'<button class="btn btn-primary btn-xs"><i class="icon-pencil"> Edit</i></button>'); ?>
                                                  <?php 
                                                      if ($pengguna->level == 1){
                                                        echo anchor('topic/delete/'.$t->id_topic,'<button class="btn btn-danger btn-xs"><i class="icon-trash "> Delete</i></button>');  
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
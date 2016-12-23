    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />

          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>User</h1>
                          </header>
                          <div class="panel-body">
                              <?php echo anchor('user/create','<button class="btn btn-shadow btn-primary" type="button"><i class="icon-plus"></i> Add User</button>'); ?>
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
                                          <th>Username</th>
                                          <th>Nama</th>
                                          <th>Level</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                          foreach($user as $t){ 
                                          ?>
                                          <tr>
                                            <td><?php echo $t->username ?></td>
                                            <td><?php echo $t->nama ?></td>
                                            <td>
                                            <?php 
                                                  if($t->level == 1){
                                                    echo "Administrator";
                                                  }else{
                                                    echo "Operator";
                                                  } 
                                                ?>
                                            </td>
                                            <td>
                                            <?php 
                                                  if($t->status == 1){
                                                    echo "Active";
                                                  }else{
                                                    echo "Not Active";
                                                  } 
                                                ?>
                                            </td>
                                            <td>
                                                  <?php echo anchor('user/edit/'.$t->username,'<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>'); ?>
                                                  <?php 
                                                      if ($pengguna->level == 1){
                                                        echo anchor('user/delete/'.$t->username,'<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>');  
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
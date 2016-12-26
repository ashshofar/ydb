    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />

          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>Organization</h1>
                          </header>
                          <div class="panel-body">
                              <?php echo anchor('organization/create','<button class="btn btn-shadow btn-primary" type="button"><i class="icon-plus"></i> Add Organization</button>'); ?>
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
                                          <th>Topic</th>
                                          <th>Programme</th>
                                          <th>Address</th>
                                          <th>Contact Person</th>
                                          <th>Action</th>
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
                                                  <?php echo anchor('organization/contact/'.$t->id_organization,'<button class="btn btn-primary btn-xs"><i class="icon-group"></i> View </button>'); ?>
                                                  <?php echo anchor('organization/createcontact/'.$t->id_organization,'<button class="btn btn-info btn-xs"><i class="icon-plus"></i> Add Contact </button>'); ?>
                                            </td>
                                            <td>
                                                  <?php echo anchor('organization/profile/'.$t->id_organization,'<button class="btn btn-info btn-xs"><i class="icon-eye-open"> Profile </i></button>'); ?>
                                                  <?php echo anchor('organization/edit/'.$t->id_organization,'<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i> Edit </button>'); ?>
                                                  <?php 
                                                    if ($pengguna->level == 1){
                                                      echo anchor('organization/delete/'.$t->id_organization,'<button class="btn btn-danger btn-xs"><i class="icon-trash "></i> Delete </button>'); 
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
<html>
<div class="container">
 <div class="card">
	 <div class="card-header bg-primary text-white">
		 <h3>IMPORT DATA PEGAWAI</h3>
	 </div>
	 <div class="card-body ">
        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-20 connectedSortable">

              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  </div>
                </div>
									<!DOCTYPE html>

		<html>

		<head>

		  <title>Import Excel</title>

		  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		</head>

		<body>

		 <div class="container">

		  <h3 align="center">Import Excel</h3>

		  <form method="post" id="Excel_import" enctype="multipart/form-data">

		     <p><label>Pilih File Excel</label>

		     <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>

		     <br />

		     <input type="submit" id="import" name="import" value="Import" class="btn btn-info" />

		  </form>

		  <br />

		  <div class="table-responsive" id="customer_data">

		  </div>

		 </div>

		</body>

		</html>



		<script>

		$(document).ready(function(){

		  function load_data(){

		    $.ajax({

		      url:"Excel_import.php",

		      method:"POST",

		      success:function(data){

		        $('#customer_data').html(data);

		        console.log(data);

		      }

		    })

		  }

		  load_data();



		  $('#import_form').on('submit', function(event){

		    event.preventDefault();

		    $.ajax({

		      url:"Excel_import.php",

		      method:"POST",

		      data:new FormData(this),

		      contentType:false,

		      cache:false,

		      processData:false,

		      success:function(data){

		        $('#file').val('');

		        load_data();

		      }

		    })

		  });

		});

		</script>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
			<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->


</html>

<!DOCTYPE html>
<html lang="en">

<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
	<!-- /.content-wrapper -->
		
		   <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-0 mx-auto ">
                <h1 class="h2">Toko Sembako Maju</h1>
                <p class="lead">Jl.Pemuda No.02 Tahunan Jepara</p>
            </div>
        </div>
        <div class="card-body">
        	<div class="row">
            <div class="col-12 col-md-5 mx-auto ">
						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group row">
								<label for="name" class="col-sm-4 col-form-label">Nama</label>						<div class="col-sm-6">
									<input class="form-control"
								 type="text" name="name" placeholder="Nama Product" />
								 	</div>
								<div class="invalid-feedback">
									<?php echo ('name') ?>
								</div>
							</div>
				  
				  <div class="form-group row">
				    <label for="Id" class="col-sm-4 col-form-label">Harga</label>
				    <div class="col-sm-6">
				      <input type="email" class="form-control" id="Id">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="Id" class="col-sm-4 col-form-label">Quantity</label>
				    <div class="col-sm-6">
				      <input type="email" class="form-control" id="Id">
				    </div>
				  </div>
				  <div class="form-group row">
				    <div class="col-sm-4 ">
			      		<button type="button" class="btn btn-primary" 
			      		id="tambah" onclick="addbarang()">
			      		  <i class="fa fa-cart-plus"></i> Bayar</button>
			    	</div>
				    <div class="col-sm-6">
				      <input type="email" class="form-control" id="Id">
				    </div>
				  </div>
				  

			    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>

<script type="text/javascript">
	function Total(qty)
	{

		var harga = $('#harga_barang').val().replace(".", "").replace(".", "");

		$('#sub_total').val(convertToRupiah(harga*qty));
	}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<ol class="breadcrumb">
	    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Top</a></li>
	    <li class="active">Dashboard</li>
	</ol>

	<!-- Main content -->
	<section class="content">
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6">
	<!-- Content Header (Page header) -->

		<h2>Dashboard</h2>

			<!-- Your Page Content Here -->
			<p>
			To begin, use the <em>SR Lookup</em> box to the left.<br />
			<?php
				if (isset($_GET['sr'])) {
					$sr = $_GET['sr'];
					echo "You're looking for Service Record: $sr";
				} else {} ?>
			</p>
		    <p>Write login from scratch. Reusing old code isn't working. Not easily adaptable. get rid of includes; move everything to modules.</p>
			<p><a href="updates/">Download Desktop Application</a></p>
		</div>
		<div class="col-lg-6 col-md-6">
		</div>
	</div></div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
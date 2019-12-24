<?php $this->load->view('design/company/components/header'); ?>
<!-- Datatables -->

<link href="vendor/template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="vendor/template/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="vendor/template/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="vendor/template/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="vendor/template/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<?php $this->load->view('design/company/components/sidebar'); ?>
<?php $this->load->view('design/company/components/topbar'); ?>
<!-- page content -->
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box table-responsive">
								<h1 class='text-center mb-5'>Histori Lowongan</h1>
								<table id="datatable" class="table table-striped table-bordered text-center" style="width:100%">
									<thead>
										<tr>
                                            <th>No</th>
											<th>Judul lowongan</th>
											<th>Perusahaan</th>
											<th>Tanggal terbit</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Kosultan Design</td>
											<td>PT. Vortex jaya</td>
											<td>24 Desember 2019</td>
											<td style="width:125px;">
                                                <button class="btn btn-info btn-sm">Lihat</button>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
<?php $this->load->view('design/company/components/footer'); ?>
<!-- Datatables -->
<script src="vendor/template/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendor/template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="vendor/template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendor/template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendor/template/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="vendor/template/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendor/template/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendor/template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="vendor/template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendor/template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendor/template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="vendor/template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="vendor/template/vendors/jszip/dist/jszip.min.js"></script>
<script src="vendor/template/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="vendor/template/vendors/pdfmake/build/vfs_fonts.js"></script>
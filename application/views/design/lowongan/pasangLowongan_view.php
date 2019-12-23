<html lang="en">
<?php $this->load->view("components/head"); ?>

<body>
	<?php $this->load->view("components/nav"); ?>
	<div class="container-fluit p-5 bg-light">
		<div class="row">
			<div class="container-fluid text-center p-3">
				<h3 class="text-dark">Recruit better with FindJob</h3>
				<h5 class="text-dark">More talent discovery, conversations that deliver.</h5>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-lg-6  bg-white p-5 rounded">
				<h3 class="text-secondary text-center mb-5">Lowongan Pekerjaan</h3>
				<form>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="nama_pekerjaan">Nama pekerjaan</label>
							<input type="text" class="form-control" id="nama_pekerjaan" name="nama_pekerjaan"
								placeholder="Cth : Web Developer Senior/Drafter/IT Supports/dll">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="mingaji">Minimal gaji</label>
							<input type="number" class="form-control" id="mingaji" name="mingaji" placeholder="2000000">
						</div>
						<div class="form-group col-md-6">
							<label for="maxgaji">Maksimal gaji</label>
							<input type="number" class="form-control" id="maxgaji" name="maxgaji" placeholder="5000000">
						</div>
					</div>
					<div class="form-group">
						<label for="deskripsi_pekerjaan">Deskripsi pekerjaan</label>
						<textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan" ></textarea>
					</div>
					<div class="form-group">
						<label for="lokasi_kerja">Lokasi pekerjaan</label>
						<select class="custom-select" name="lokasi_kerja" id="lokasi_kerja">
							<option selected>Pilih lokasi</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
					<div class="form-group">
						<label for="tanggal_kadaluarsa">Batas akhir melamar</label>
						<input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" placeholder="5000000">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="tipe_pekerjaan">Tipe pekerjaan</label>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="tipe_pekerjaan">
								<label class="custom-control-label" for="customCheck1">Full time</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="tipe_pekerjaan">
								<label class="custom-control-label" for="customCheck1">Part time</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="tipe_pekerjaan">
								<label class="custom-control-label" for="customCheck1">Remote</label>
							</div>
						</div>					
						<div class="form-group col-md-6">
							<label for="tipe_pekerjaan">Target pelamar</label>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="tipe_pekerjaan">
								<label class="custom-control-label" for="customCheck1">Fresh graduate</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="tipe_pekerjaan">
								<label class="custom-control-label" for="customCheck1">Experienced</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="tipe_pekerjaan">
								<label class="custom-control-label" for="customCheck1">Expert</label>
							</div>
						</div>					
					</div>
					<button type="submit" class="btn btn-success float-right mx-0">Selesai</button>
				</form>
			</div>
		</div>
	</div>
	<?php $this->load->view('components/footer'); ?>
	<?php $this->load->view('components/script'); ?>
	<script src="vendor/ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('deskripsi_pekerjaan', {
      // Define the toolbar groups as it is a more accessible solution.
      toolbarGroups: [{
          "name": "basicstyles",
          "groups": ["basicstyles"]
        },
        {
          "name": "links",
          "groups": ["links"]
        },
        {
          "name": "align",
          "groups": ["align"]
        },
        {
          "name": "paragraph",
          "groups": ["list", "blocks"]
        },
        {
          "name": "styles",
          "groups": ["styles"]
        }
      ],
      // Remove the redundant buttons from toolbar groups defined above.
      removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
    });
	</script>
</body>

</html>
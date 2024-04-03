<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_head') ?>
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">
	<?php $this->load->view('components/_common_css') ?>
	<title><?= $page['title'] ?></title>
</head>

<body>
	<?php $this->load->view('components/_common_nav') ?>
	<main>
		<section>
			<div class="container py-4">
				<table id="example" class="display table" style="width:100%">
					<thead>
						<tr>
							<th>Sr. No</th>
							<?php foreach ($leads[0] as $key => $value) : ?>
								<th><?= $key ?></th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($leads as $lead) : ?>
							<tr>
								<td><?= $i ?></td>
								<?php foreach ($lead as $key => $value) : ?>
									<td><?php print_r($lead[$key]) ?></td>
								<?php endforeach ?>
							</tr>
						<?php
							$i++;
						endforeach ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Sr. No</th>
							<?php foreach ($leads[0] as $key => $value) : ?>
								<th><?= $key ?></th>
							<?php endforeach ?>
						</tr>
					</tfoot>
				</table>
				<script>
					$(document).ready(function() {
						var table = $('#example').DataTable({
							dom: "Bfrtip",
							"paging": false,
							buttons: ['copy', 'excel', 'pdf']
						});

						table.buttons().container()
							.appendTo('#example_wrapper .col-md-6:eq(0)');
					});
				</script>
			</div>
		</section>
	</main>
	<?php $this->load->view('components/_common_footer') ?>
	<?php $this->load->view('components/_common_js') ?>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
</body>

</html>

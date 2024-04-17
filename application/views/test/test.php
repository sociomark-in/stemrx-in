<script>
	$.ajax({
		url: "<?= base_url() ?>/api/leads/check-duplicate",
		method:'POST'
		data: {
			'column': "email",
			'value': "test@test.com",
		},
		success: (response)=>{
			console.log(response);
		},
		error: (error)=>{
			console.error(error);
		}
	})
</script>

jQuery(document).ready(function() {
	function send($data) {
		$.ajax({
			type: 'POST',
			data: {
				id: $data,
				_token: $("input[name='_token']").attr('value')
			},
			url: '/user-list',
			success: function($data) {
				console.log($data);
				return true;
			},
			error: function($data) {
				console.log($data);
				return false;
			}
		});
	}


	$('.add-contact').on('click', function() {
		//console.log($(this).data('id'));
		send($(this).data('id'));
	});
});
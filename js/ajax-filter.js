jQuery(function($){
	var filterForm = $('.gc-filter_form');

	filterForm.on('change', function(){

		var formData = filterForm.serialize(),

			ajaxData = {
				action: 'gcfilter',
				formData: formData
			};

		$.ajax({
			url: ajaxUrl,
			data:ajaxData, //form data and WP action name
			type:filterForm.attr('method'), //POST
			beforeSend:function(xhr){
				filterForm.find('.gc-button-filter').text('Processing...'); // changing the button label
			},
			success:function(data){
				filterForm.find('.gc-button-filter').text('Apply filter'); // changing the button label back
				$('.filter-content').html(data); //insert data
				$(".ajax-load-more-wrap").ajaxloadmore();
			}
		});
		return false;
	});
});

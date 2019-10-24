<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>

<script src="../admin-dek/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script src="../admin-dek/files/bower_components/popper.js/js/popper.min.js"></script>
<script src="../admin-dek/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../admin-dek/files/assets/pages/waves/js/waves.min.js"></script>

<script src="../admin-dek/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="../admin-dek/files/assets/pages/chart/float/jquery.flot.js"></script>
<script src="../admin-dek/files/assets/pages/chart/float/jquery.flot.categories.js"></script>
<script src="../admin-dek/files/assets/pages/chart/float/curvedLines.js"></script>
<script src="../admin-dek/files/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>

<script src="../admin-dek/files/bower_components/chartist/js/chartist.js"></script>

<script src="../admin-dek/files/assets/pages/widget/amchart/amcharts.js"></script>
<script src="../admin-dek/files/assets/pages/widget/amchart/serial.js"></script>
<script src="../admin-dek/files/assets/pages/widget/amchart/light.js"></script>

<script src="../admin-dek/files/assets/js/pcoded.min.js"></script>
<script src="../admin-dek/files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../admin-dek/files/assets/pages/dashboard/custom-dashboard.min.js"></script>
<script src="../admin-dek/files/assets/js/script.min.js"></script>
<script src="../admin-dek/files/assets/js/rocket-loader.min.js"></script>

<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}

	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');

</script>
<script>
	$(function() {

		$('body').on('click', '.list-group .list-group-item', function() {
			$(this).toggleClass('active');
		});
		$('.list-arrows button').click(function() {
			var $button = $(this),
				actives = '';
			if ($button.hasClass('move-left')) {
				actives = $('.list-right ul li.active');
				actives.clone().appendTo('.list-left ul');
				actives.remove();
			} else if ($button.hasClass('move-right')) {
				actives = $('.list-left ul li.active');
				actives.clone().appendTo('.list-right ul');
				actives.remove();
			}
		});
		$('.dual-list .selector').click(function() {
			var $checkBox = $(this);
			if (!$checkBox.hasClass('selected')) {
				$checkBox.addClass('selected').closest('.well').find('ul li:not(.active)').addClass('active');
				$checkBox.children('i').removeClass('glyphicon-unchecked').addClass('glyphicon-check');
			} else {
				$checkBox.removeClass('selected').closest('.well').find('ul li.active').removeClass('active');
				$checkBox.children('i').removeClass('glyphicon-check').addClass('glyphicon-unchecked');
			}
		});
		$('[name="SearchDualList"]').keyup(function(e) {
			var code = e.keyCode || e.which;
			if (code == '9') return;
			if (code == '27') $(this).val(null);
			var $rows = $(this).closest('.dual-list').find('.list-group li');
			var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
			$rows.show().filter(function() {
				var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
				return !~text.indexOf(val);
			}).hide();
		});

	});
</script>

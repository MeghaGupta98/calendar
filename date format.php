/******************************************/
add_action('woocommerce_before_add_to_cart_button', 'dateFormat', 10);
		function dateFormat()
		{

			echo " <h1>Calendar</h1>
			From:<input type='text' id='from_date' placeholder='From'>
             To:
             <input type='text' id='to_date' placeholder='To''>";
		?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
			<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
			<script type="text/javascript">
				$(document).ready(function() {
					$(function() {
						var date = new Date();
						console.log(date, "jdhs");
						$("#from_date").datepicker({
							numberOfMonths: 1,
							dateFormat: 'mm/dd/yy',
							minDate: date,
							onSelect: function(selected) {
								var dt = new Date(selected);
								//dt.setDate(dt.getDate() + 1);
								dt.setDate(dt.getDate());
								$("#to_date").datepicker("option", "minDate", dt);
							}
						});
						$("#to_date").datepicker({
							numberOfMonths: 1,
							dateFormat: 'mm/dd/yy',
							minDate: date,
							onSelect: function(selected) {
								var dt = new Date(selected);
								//dt.setDate(dt.getDate() - 1);
								dt.setDate(dt.getDate());
								$("#from_date").datepicker("option", "maxDate", dt);
							}
						});
					});
				});
			</script>


		<?php
		}

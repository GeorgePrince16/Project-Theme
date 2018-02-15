/* Functionality on Statistics page to select different tables */
		jQuery(document).ready(function(){
			$(".bowling").hide();
			$("#bowling-title").hide();
			$('#batting-button').prop('disabled', true) /* Batting table loads first by default */

			$("#bowling-button").click(function(){
				$("#bowling-title").show(300); /* Show Bowling Title */
				$("#batting-title").hide(300); /* Hide Batting Title */
				$(".batting").hide(300);
				$(".bowling").show(300);
				$('#bowling-button').prop('disabled', true) /* disable button when clicked */
				$('#batting-button').prop('disabled', false) /* enable button when clicked */
			});

			$("#batting-button").click(function(){
				$("#batting-title").show(300); /* Show Batting Title */
				$("#bowling-title").hide(300); /* Hide Bowling Title */
				$(".bowling").hide(300);
				$(".batting").show(300);
				$('#batting-button').prop('disabled', true) /* disable button when clicked */
				$('#bowling-button').prop('disabled', false) /* enable button when clicked */
			});
		})
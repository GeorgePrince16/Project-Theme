/* Functionality on Statistics page to select different tables */
		jQuery(document).ready(function(){
			$(".bowling").hide();
			$("#bowling-button").click(function(){
				$(".batting").hide(300);
				$(".bowling").show(300);
			});

			$("#batting-button").click(function(){
				$(".bowling").hide(300);
				$(".batting").show(300);
			});
		})
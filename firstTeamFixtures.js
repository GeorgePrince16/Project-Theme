/*Functionality to read in the top headlines for General category in the tabs*/
$(document).ready(function() 
		{
		updateNews();
		function updateNews(type)
		/*AJAX call*/
		{  
			$.ajax(
			{
				type: "GET",
				dataType: "json",
				cache: false,
				url: "http://localhost/bcc-project/wp-json/wp/v2/posts/366",
				success: readData,
				error: displayError
			})
		}

		function readData(data)
	    {
			/*Loop through url obtaining data from url, title & description*/
		    for (var i = 0; i < 10; i++)
		    {
				/*Append to relevant tab*/
				$("#first-team-league").append("<p>" + posts.Data[i].content.rendered + "</p>");
			}
		    console.log(data);
	    }
		
		/*Error Handling*/
		function displayError(request, status, error) 
			{
				alert(request.responseText);
			}
		});
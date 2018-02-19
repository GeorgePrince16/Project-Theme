/*Functionality to read in the top headlines for General category in the tabs*/
jQuery(document).ready(function() 
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
				url: "https://newsapi.org/v2/top-headlines?category=general&language=en&apiKey=7acb6660d6c841f38dfdaebe1c70c10f",
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
				$("#test").append("<a target='_blank' href=" + data.articles[i].url + "><h3>" + data.articles[i].title + "</h3>");
				$("#test").append("<p>" + data.articles[i].description + "</p>");
			}
		    console.log(data);
	    }
		
		/*Error Handling*/
		function displayError(request, status, error) 
			{
				alert(request.responseText);
			}
		});
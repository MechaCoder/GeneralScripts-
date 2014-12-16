	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- this script is to use the CDN when useing bootstrap. -->
	<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.3.2.min.js"></script>
	<script>
		Parse.initialize("APPLICATION_ID", "JAVASCRIPT_KEY"); // you get this from your quickstart guide, pls makesure that you are you the JarvaScript documenttion

		var table = Parse.Object.extend("[your parse 'class' name here]");
			var q = new Parse.Query(table); 
	</script>
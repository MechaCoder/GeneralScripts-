<head>
	<!-- jquery input -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- CSS import -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css\style.css"> <!-- this is where a devoper can can coustom css and call inderpently -->
	<!-- JarvaScript import -->
	<script type="text/javascript" src="js\bootstrap.js"></script>
	<script type="text/javascript" src="js\bootstrap.min.js"></script>
	<script type="text/javascript" src="js\npm.js"></script>
	<!-- LOCAL import parse-->
	<script type="text/javascript" src="js\parse-1.3.2.min.js"></script>
	<script>
		Parse.initialize("APPLICATION_ID", "JAVASCRIPT_KEY");
		function ParseTest() {
			var TestObject = Parse.Object.extend("TestObject");
			var testObject = new TestObject();
			testObject.save({foo: "bar"}).then(function(object) {
  			alert("yay! it worked");
			});};
	</script>
	<!-- Orgnial Devoper  -->
	<!-- used by [yourname] -->
</head>

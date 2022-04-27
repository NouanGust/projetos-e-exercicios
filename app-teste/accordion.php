<html>

	<head>
		<meta charset="utf-8" />
		<title>Jquery Accordion</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/vader/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	</head>
	
	<body>
	
		<div id="accordionGroup">
		
			<h1>Primeiro Item</h1>
			<div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
			</div>
			
			<h2>Segundo Item</h2>
			<div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
			
			<h3>Ultimo Item</h3>
			<div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
		</div>
	
	</body>


	<script>
	
		$("#accordionGroup").accordion({
			"animate": true,
			"collapsible": true,
			"event":"mouseover"
		});
	</script>
</html>
<?php
	$titles_text = "majo";

	if (isset($_GET["page"])) {

      $title_page = $_GET["page"];

          switch ($title_page) {
	        case 'product':
	            $titles_text ="Product";
	            break;
	        case 'purchase':
	            $titles_text ="Purchase";
	            break;
	       }
	}  
?>

<head>
	<title><?php echo $titles_text; ?></title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="css/main.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
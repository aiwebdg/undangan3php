<html>
<head>
	<title>Form Custom Link</title>
	<style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 120px;
			cursor: pointer;
		}
		label {
			width: 120px;
			display: block;
			float: left;
		}
		.checkbox, .radio {
			float:none;
			width: auto;
		}
		.row::after {
			content: "";
			display: block;
			clear:both;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
		.options {
			float:left;
		}
	</style>
</head>
<body>
	<h1>Form Custom Link</h1>
	<form action="" method="post">
		<div class="row">
			<label>Nama</label>
			<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
		</div>
		
		
	
		
		
		</div>
		<div class="row">
			<input type="submit" name="submit" value="Simpan"/>
		</div>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		
		 $link=' http://www.undangan/' . $_POST['nama'] ;
  
		echo '<a href=' . $link . ';>' . $link . '</a>';
		
	
	}?>
</body>
</html>
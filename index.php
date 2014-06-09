<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<meta name="title" content="Facts by Open Data" /> 
	<meta name="description" content="Facts by Open Data" /> 
	<meta name="viewport" content="user-scalable=1, initial-scale=1.0" />


	<title>Facts by Open Data</title> 



	<script type="text/javascript"> 
	var totalCount = 19;

	function ChangeIt() {
		var num =  Math.ceil( Math.random() * totalCount );
		document.body.background = 'images/'+num+'.gif';
		document.body.style.backgroundRepeat = "no-repeat";
		document.body.style.backgroundSize = "cover";
		document.body.style.backgroundPosition="center center";

	}
	</script> 





	<style>

	*, *:before, *:after {
	  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
	}

	h1
	{
		font-size:36px;
		font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		text-shadow:1px 5px 10px black;
		text-align:center;
		-webkit-font-smoothing: antialiased !important;
	}
	html{
		height: 100%;
	}

	body
	{
		background-color:#000;
		overflow-x: hidden; 
		overflow-y: hidden;
		margin: 0px auto 0px auto;
		min-height: 100%; 

	}

	#content
	{
		position: relative;
		max-width: 600px;
		margin: auto;
		margin-top: 8em;
		color:#fff;
		padding: 0 1em;
	}

	#button
	{
		position: relative;
		width: 100px;
		color:#fff;
		margin: auto;
	}
	.newfact {
		-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
		-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
		box-shadow:inset 0px 1px 0px 0px #ffffff;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9) );
		background:-moz-linear-gradient( center top, #f9f9f9 5%, #e9e9e9 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9');
		background-color:#f9f9f9;
		-webkit-border-top-left-radius:0px;
		-moz-border-radius-topleft:0px;
		border-top-left-radius:0px;
		-webkit-border-top-right-radius:0px;
		-moz-border-radius-topright:0px;
		border-top-right-radius:0px;
		-webkit-border-bottom-right-radius:0px;
		-moz-border-radius-bottomright:0px;
		border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius:0px;
		-moz-border-radius-bottomleft:0px;
		border-bottom-left-radius:0px;
		text-indent:0px;
		display:inline-block;
		color:#000000;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:40px;
		line-height:40px;
		width:100px;
		text-decoration:none;
		text-align:center;
	}
	.newfact:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9) );
		background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
		background-color:#e9e9e9;
		}.newfact:active {
			position:relative;
			top:1px;
		}


		footer {
			font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
			font-size: .65em;
			color: white;
			text-shadow:1px 5px 10px black;
			-webkit-font-smoothing: antialiased !important;
			position: absolute;
			min-width: 100%;
			bottom: 1em;
			padding: 0 1em;
			text-align: center;
			color:#fff;
		}

		footer a {
			color: #fff;
			text-decoration: none;
		}

		footer a:hover {
			border-bottom: 1px solid #fff;
		}

		</style>
	</head> 





	<body> 

		<div id="content" >

			<?php 

			include 'config.php';

			$result = mysql_query('SELECT * FROM Questions ORDER BY RAND() LIMIT 1');
			if (!$result) {
				die('Invalid query: ' . mysql_error());
			}


			while ($row = mysql_fetch_array($result)) {
				echo "<h1>" . $row['fact'] . "</h1>";
			}

			?>

		</div>

		<div id="button" >

			<a href="javascript:document.location.reload();" class="newfact">New Fact</a>

		</div>

		<footer>
			<p>
				<a href="mailto:submitanopendatafactcha@gmail.com?Subject=Fact%20Suggestion&Body=Delete%20this%20text%2C%20and%20then%20include%20the%20fact%20you%27d%20like%20to%20submit%21%20Please%20also%20include%20a%20link%20to%20the%20dataset%20the%20fact%20was%20drawn%20from%20as%20well.%0A%0A">Submit a Fact</a> - Made by Jake Brown - <a href="/insert.php">Source on Github</a> - <a href="https://github.com/jake-sl/DidChaKnow/">Data from Chattanooga Open Data</a>
			</p>
		</footer>

		<script type="text/javascript"> 
		ChangeIt();
		</script> 


	</body> 
	</html> 
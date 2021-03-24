<html>
<header>
	<meta  http-equiv="content-type" content="text/html; charset=utf-8">
</header>
<body style="background-color:#222222"> <h1 align="center" style="margin-top:50px; color: white">SHIFT CIPHER</h1>
	<div align='center'>
		
		<div id="encryption" align="center" style="margin-top:50px; background-color:#dedede; width:500px; height:350px" >
			<h3 align="center">THE RESULT OF YOUR REQUEST IS</h3>
			
			
			<?php if(isset($_GET['resul'])){ ?>
				<b>The Cipher-text is : </b><br><br>
				<?php echo $_GET['resul']; ?>
			<?php }?>
			
			
			<?php if(isset($_GET['result'])){ ?>
				<b>The Plain-text is : </b><br><br> 
				<?php echo $_GET['result']; ?>
			<?php }?>
			
			<br><br><br>
			<b>for another operation</b>
			<a href="index.php">
			<button type="button" href="index.php" style=" width:100px; height:35px; border-radius:10px; background-color:#f79b3f">click here</button>
			 </a>
			
		</div>
		 
		
	</div>
	
</body>
</html>






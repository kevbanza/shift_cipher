<html>
<header>
<!--<meta  http-equiv="content-type" content="text/html; charset=utf-8">-->
</header>
<body style="background-color:#222222"> <h1 align="center" style="margin-top:50px; color: white">SHIFT CIPHER </h1>
	<div>
		
		<div id="encryption" align="left" style="margin-top:50px; background-color:#dedede; width:500px; margin-left:150px;padding-left: 20px" >
			<h3 align="center">ENCRYPTION</h3>
			<form action="encryption.php" method="post">
				  Shift number	<input type="number" name="step"><br><br>
				  Plain-text: <textarea name="cryptext" style='width:300px; height:150px;'></textarea><br>
			  <button type="submit" style="margin-left:190px; width:100px; height:35px; border-radius:10px; background-color:#f79b3f">Crypt</button>

			</form>
		</div>
		 
		 <div id="decryption" align="left" style="margin-top:50px; background-color:#dedede; width:500px; ; margin-left:10px; margin-right:50px; padding-left: 20px" >
			<h3 align="center">Update Customer<h3>
			<form action="encryption.php" method="post">
				  Shift number <input type="number" name="step"><br><br>
				  Cipher-text : <textarea name="decryptext" style='width:300px; height:150px;'></textarea><br>
			  <button type="submit" style="margin-left:190px; width:100px; height:35px; border-radius:10px; background-color:#f79b3f">Decrypt</button>

			</form>
		</div>
	</div>
	
	<style>
		
		#encryption{
			display: inline-block;
			border-radius:20px
			
		}
		#decryption{
			display: inline-block;
			border-radius:20px
			
		}
	
	
	
	</style>
</body>
</html>
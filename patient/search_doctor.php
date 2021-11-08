<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<!-- <?php include('function.php'); ?> -->



	<!-- this is for donor registraton-->
	 <div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search Here</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_result.php" method="post" class="form-group">
					<label>
						Search By:<select name="address" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Delhi</option>
												<option>Mumbai</option>
												<option>Bengaluru</option>
												<option>Kolkata</option>
												<option>Chennai</option>
												
											</select>

					</label><br><br>
					

					<label>
						 Category:<select name="expertise" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Cardiologist</option>
												<option>Radiologist</option>
												<option>Neurologist</option>
												<option>Nephrologist</option>
												<option>General physician</option>
												<option>Urologist</option>
												<option>Dermatologist</option>
												<option>Othologist</option>
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div> 
	</div>

	<!-- <h1>Work Under Progress</h1> -->


	


	




	<script src="js/bootstrap.min.js"></script>




</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style type="text/css">
	.hov{

	}
	.hov:hover{
		color: #ffb921
	}
	
</style>
<body class=" pb-5 " style="background-color: #e0e0e0">
	<div class="col-12   d-flex border-bottom border-dark pb-2" style="background-color: #f2f2f2"> 
		<div class="col-4">
			
		</div>
		<div class="d-flex col-5  ml-5">
			<div class="col-6  py-2" >
				<a href=""><img src="logo.png" class="w-100 shadow ml-5 rounded " style="height: 130px"></a>
			</div>
			<div class="col-5 ml-auto  text-center pt-5  " >
				<button class="rounded bg-dark text-center"><a href="admin.php" class="text-white"> Добавить товар</a></button>
			</div>
		</div>
		
	</div>
	<div class="col-10 mx-auto  my-2 d-flex " >
		<div class="col-7 mr-2  pt-5" >
			<h2 class="font-weight-bold font-italic text-center ">Новый крупный интернет-магазин с низкими ценами, и тысячами различных товаров</h2>
		</div>
		<div class="col-5 	 " style="height: 250px; background-image: url(index1.svg); background-size: 100% 100%">
			
		</div>
	</div>
	<div class="border border-secondary col-10 mx-auto" style="background-color: #f2f2f2">
		
	
	<div class="col-11 mx-auto pt-4 d-flex px-0 " >
		<div class="col-3 border border-secondary ml-5 py-3 shadow-lg p-3 mb-5 bg-white rounded hov ">
			<?php 
				$connect= mysqli_connect("127.0.0.1","root","","store");
					//вывод из БД
				$text_query =  'SELECT * FROM shops';
				$query = mysqli_query($connect, $text_query);
					
				
				$result = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result['img'] . "  ' class='w-100 rounded border-bottom'></a>";
				echo "<h4 class=' text-center font-italic '>" . $result['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic '>" . $result['price'] . "</p>";
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";	                   
			?>
		</div>
		<div class="col-1">
			
		</div>
		<div class="col-3 border border-secondary ml-2 py-3 shadow-lg p-3 mb-5 bg-white rounded hov" >
			<?php 
				
				

				$result1 = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result1['img'] . "  ' class='w-100 rounded border-bottom'></a>";
				echo "<h4 class=' text-center font-italic'>" . $result1['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result1['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic'>" . $result1['price'] . "</p>";	
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";	                   
			?>

		</div>
		<div class="col-1">
			
		</div>
		<div class="col-3 border border-secondary ml-2 py-3 shadow-lg p-3 mb-5 bg-white rounded hov" >
			<?php 
				
					

				$result2 = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result2['img'] . "  ' class='w-100 rounded border-bottom'></a>";
				echo "<h4 class=' text-center font-italic'>" . $result2['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result2['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic'>" . $result2['price'] . "</p>";
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";		                   
			?>
		</div>
		
		

	</div>
	<div class="col-11 mx-auto pt-4 d-flex px-0" >
		<div class="col-3 border border-secondary ml-5 py-3 shadow-lg p-3 mb-5 bg-white rounded hov">
			<?php 
				
					

				$result3 = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result3['img'] . "  ' class='w-100 rounded border-bottom '></a>";
				echo "<h4 class=' text-center font-italic'>" . $result3['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result3['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic'>" . $result3['price'] . "</p>";
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";		                   
			?>
		</div>
		<div class="col-1">
			
		</div>
		<div class="col-3 border border-secondary ml-2 py-3 shadow-lg p-3 mb-5 bg-white rounded hov" >
			<?php 
				
					

				$result4 = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result4['img'] . "  ' class='w-100 rounded border-bottom'></a>";
				echo "<h4 class=' text-center font-italic'>" . $result4['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result4['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic'>" . $result4['price'] . "</p>";
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";		                   
			?>

		</div>
		<div class="col-1">
			
		</div>
		<div class="col-3 border border-secondary ml-2 py-3 shadow-lg p-3 mb-5 bg-white rounded hov 	" >
			<?php 
				
					

				$result5 = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result5['img'] . "  ' class='w-100 rounded border-bottom'></a>";
				echo "<h4 class=' text-center font-italic'>" . $result5['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result5['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic'>" . $result5['price'] . "</p>";
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";		                   
			?>
		</div>  
		
		

	</div>
	<div class="col-11 mx-auto pt-4 d-flex px-0" >
		<div class="col-3 border border-secondary ml-5 py-3 shadow-lg p-3 mb-5 bg-white rounded hov">
			<?php 
				
					

				$result6 = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result6['img'] . "  ' class='w-100 rounded border-bottom '></a>";
				echo "<h4 class=' text-center font-italic'>" . $result6['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result6['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic'>" . $result6['price'] . "</p>";
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";		                   
			?>
		</div>
		<div class="col-1">
			
		</div>
		<!-- <div class="col-3 border border-secondary ml-2 py-3 shadow-lg p-3 mb-5 bg-white rounded hov" >
			<?php 
				
					

				$result7 = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result7['img'] . "  ' class='w-100 rounded border-bottom'></a>";
				echo "<h4 class=' text-center font-italic'>" . $result7['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result7['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic'>" . $result7['price'] . "</p>";
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";		                   
			?>

		</div> -->
		<div class="col-1">
			
		</div>
		<!-- <div class="col-3 border border-secondary ml-2 py-3 shadow-lg p-3 mb-5 bg-white rounded hov 	" >
			<?php 
				
					

				$result8 = $query->fetch_assoc();
				echo "<a href=''><img src='" .  $result8['img'] . "  ' class='w-100 rounded border-bottom'></a>";
				echo "<h4 class=' text-center font-italic'>" . $result8['title'] . "</h4>";
				echo "<p class='text-dark text-center font-italic'>" . $result8['des'] . "</p>";
				echo "<p class='text-dark text-center font-italic'>" . $result8['price'] . "</p>";
				echo "<button class='rounded  text-center text-warning ' style='background-color:#666666; margin-left:34% '>" . 'КУПИТЬ' . "</button>";		                   
			?>
		</div>   -->
		
		

	</div>
	</div>

</body>
</html>
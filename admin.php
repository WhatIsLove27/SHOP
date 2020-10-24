<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class=" pb-5 " style="background-color: #e0e0e0">
	<div class="col-12   d-flex border-bottom border-dark" style="background-color: #f2f2f2"> 
		<div class="col-4">
			
		</div>
		<div class="d-flex col-5  ml-5">
			<div class="col-6  py-2" >
				<a href=""><img src="logo.png" class="w-100 shadow ml-5 rounded " style="height: 130px"></a>
			</div>
			<div class="col-5 ml-auto  text-center pt-5  " >
				<button class="rounded bg-dark text-center"><a href="admin.php" class="text-white"> Добавить товар</a></button>
				<button class="rounded bg-dark text-center"><a href="index.php" class="text-white"> Назад</a></button>
			</div>
			
		</div>
		
	</div>
	<form action="insert.php" method="GET" style=" background-color: #f7f7f7" class="border col-8 mx-auto mt-5 py-4"  >
		<h4 class="text-center ml-3">Добавить товар</h4>
		<div class="mt-2 col-12">
			<input type="" name="title" class="col-12" placeholder="товар" style="height: 100px">
		</div>
		<div class="mt-2 col-12">
			<input type="" name="des" class="col-12" placeholder="информация" style="height: 100px">
		</div>
		<div class="mt-2 col-12">
			<input type="" name="img" class="col-12" placeholder="фото" style="height: 100px">
		</div>
		<div class="mt-2 col-12">
			<input type="" name="price" class="col-12" placeholder="цена" style="height: 100px">
		</div>
		<div class="mx-auto col-1 mt-4">
			<button class="rounded bg-dark text-center text-white"> Добавить</button>
		</div>
		
	</form>
</body>
</html>

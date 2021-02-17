<!DOCTYPE html>
<html lang="en">
<head>
	<title>Namaz Vakitleri | Alikan.us</title>
	<meta name="Description" content="İstanbul Namaz vakitlerine, anlık olarak ezan saatlerine ulaşabilirsiniz. 2021 Sabah namazı, öğle namazı, ikindi namazı, akşam namazı ve yatsı namazı ezanı vakti." />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://alikan.us/admin/assets/img/er1696.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<div style="text-align: center;">
				<h1> İstanbul Namaz Vakitleri 2021 </h1><br>
							<h6> alikan.us © | developed by alikan köse </h6>
							<br><br>
							</div>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Gün</th>
								<th class="column2">İmsak</th>
								<th class="column3">Güneş</th>
								<th class="column4">Öğle</th>
								<th class="column5">İkindi</th>
								<th class="column6">Akşam</th>
								<th class="column7">Yatsı</th>

							</tr>
						</thead>
						<tbody>
						<?php 
								
								$namaz = file_get_contents("https://ezanvakti.herokuapp.com/vakitler/9541");
								$cek = json_decode($namaz);
								
								foreach($cek as $c){
								?>
								<tr>
								
									<td class="column1"><?php echo $c->MiladiTarihUzun; ?></td>
									<td class="column2"><?php echo $c->Imsak; ?></td>
									<td class="column3"><?php echo $c->Gunes; ?></td>
									<td class="column4"><?php echo $c->Ogle; ?></td>
									<td class="column5"><?php echo $c->Ikindi; ?></td>
									<td class="column6"><?php echo $c->Aksam; ?></td>
									<td class="column7"><?php echo $c->Yatsi; ?></td>

								
								</tr>
								<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
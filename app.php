<?php

require 'vendor/autoload.php';

$web = new \spekulatius\phpscraper();

$web->go('https://www.peruforless.com/packages/machu-picchu-lake-titicaca-uyuni-11-day-tour/');

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
	<pre>
	<?php //var_dump($web->imagesWithDetails); ?>
	</pre>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">url imagen</th>

	      <th scope="col">alt</th>
	      <th scope="col">imagen</th>
	    </tr>
	  </thead>
	  <tbody>
		
		<?php 
			$src = null; 
			$data = $web->imagesWithDetails;
		?>
		<?php foreach($data as $image): ?>



			<?php if($image['data-src']){
				$src= $image['data-src'];
			}else{
				$src= $image['url'];
			}
			?>

			<?php if(empty($image['alt'])): ?>
				<tr class="table-danger">
			<?php else: ?>
				<tr>
			<?php endif; ?>
		
				<td><?php echo $src; ?></td>
				<td><?php echo $image['alt']; ?></td>
				<td><img src="<?php echo $src; ?>" width="200px" heigth="auto"></td>
			</tr>

		<?php endforeach; ?>
		</tbody>
	</table>
	
</body>
</html>



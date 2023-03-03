<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="./css/error.css">

</head>

<body>

<?php if (! empty($errors)) : ?>
	<div class="errors" role="alert">
	
	<h1 class = "error-state"> The Errors are the Following </h1>
	<p class = 'p-state'> Unable to complete due to some errors, Kindly fix them first </p> 
	
		<ul class = "unordered-l">
		<?php foreach ($errors as $error) : ?>
			<li><?= esc($error) ?></li>
		<?php endforeach ?>
		</ul>
	</div>
<?php endif ?>

</body>

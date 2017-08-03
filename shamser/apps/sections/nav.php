<?php

$navigation=[
	//	['name', 'image', 'link']
		['Home','static/images/nav/dashboard.php',''],
		['Clients','static/images/nav/clients.php','apps/clients.php'],
		['Loans','static/images/nav/loan.php','apps/loan.php'],
		['Deposits','static/images/nav/deposits.php','apps/deposits.php'],
		['asdf','static/images/nav/dashboard.php','apps/dashboard.php']
	];

?>

<nav>

<?php
	foreach($navigation as $nav){
	$nav_url=$base_url."/".$nav[2];
	echo $nav_url;
?>


<a href="<?php echo $nav[2]; ?>">
	<div class="navBox">
		<div class="navItem">
			<img src="<?php echo $nav[1];?>" class="navImage"/>
			<div class="navName">
				<?php
					echo $nav[0];
				?>
			</div>

		</div>
	</div>
</a>
<?php
	}
?>


</nav>

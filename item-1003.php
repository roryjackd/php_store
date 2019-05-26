<?php     
	// Include HTML header file 
	$title = 'Baseball Bat';
	
	include 'includes/header.phtml';
?>  
							
	<!-- Output item's name -->
	<div class="title">		
		Baseball Bat
	</div>
	
	<!-- Output item's ID -->
	<div id="itemID">
		Item#: 1003
	</div>  
	
	<!-- Output item's price -->
	<div id="itemPrice">
		Price:  $29.99
	</div>
	
	<!-- Output item's image -->
	<img src="images/1003.gif" id="itemImage"/>
	
	<!-- Output item's description -->
	<div id="itemDesc">	
		You're sure to knock them out of the park with this bat.
	</div>     		

<?php
	// Include HTML footer file
	include 'includes/footer.phtml';
?>
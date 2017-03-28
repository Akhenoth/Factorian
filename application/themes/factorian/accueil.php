<?php $view->inc('elements/header.php'); ?>

	<div class="row">
		<div class="col-md-12">
			<?php 
				$Diaporama = new Area('Diaporama');
				$Diaporama->display($c); 
			?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<?php 
				$Col1 = new Area('Col1');
				$Col1->display($c); 
			?>
		</div>
		<div class="col-md-4">
			<?php 
				$Col2 = new Area('Col2');
				$Col2->display($c); 
			?>
		</div>
		<div class="col-md-4">
			<?php 
				$Col2 = new Area('Col3');
				$Col2->display($c); 
			?>
		</div>
	</div>

	<div class ="row">
		<div class="col-md-12">
			<?php 
				$CTA = new Area('CTA');
				$CTA->display($c); 
			?>
		</div>
	</div>
	<div class ="row">
		<div class="col-md-12">
			<?php 
				$Contenu = new Area('Contenu'); 
				$Contenu->display($c); 
			?>
		</div>
	</div>

<?php $view->inc('elements/footer.php'); ?>
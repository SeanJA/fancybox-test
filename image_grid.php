<?php
//get the list of images
$images = glob('images/small/*.jpg');
//loop through the images
foreach($images as $i=>$img){
	$small = $img;
	//small images all have equivalent images in the big folder, replace /small/ with /big/
	$big = str_replace('/small/', '/big/', $img);
	?>
	<!-- Spit out the grid of images, each with a class of grid and grid-[0-3] so you can style them -->
	<div class="grid grid-<?php echo (($i)%4); ?>">
		<!-- inner grid is display:block which lets you mask the image so that the images are all the same size -->
		<div class="inner-grid">
			<!-- rel="group1" groups the images together so you can navigate from one to the next with the arrow keys -->
			<!-- class="fancybox" groups the images so that you can target them with the js function -->
			<!-- $big is the path to the large image -->
			<a rel="group1" class="fancybox" href="<?php echo $big; ?>" >
				<!-- $small is the path to the small image -->
				<img src="<?php echo $small; ?>" alt="" />
			</a>
		</div>
	</div>
	<?php
}
?>
<?php
$images = glob('images/small/*.jpg');
foreach($images as $i=>$img){
	$small = $img;
	$big = str_replace('/small/', '/big/', $img);
	?>
	<div class="grid grid-<?php echo (($i)%4); ?>">
		<div class="inner-grid">
			<a rel="group1" class="fancybox" href="<?php echo $big; ?>" >
				<img src="<?php echo $img; ?>" alt="" />
			</a>
		</div>
	</div>
	<?php
}
?>
<?php get_header() ?>
 <div style="padding:60px">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1 class="text-center" style="padding:20px"><?php the_title(); ?></h1>
	<?php the_post_thumbnail('large', ['class' => 'rounded mx-auto d-block', 'alt' => '', 'style' => 'padding-bottom:20px;']);?>
	<ul class="list-group-item list-group-item-light font-weight-bold" >
		<li><h2> Type de bien : <?php the_field("type")?></h2></li>
		<li><h2> Surface : <?php the_field("surface")?>m²</h2></li>
		<li><h2> Prix : <?php the_field("prix")?>€</h2></li>
		<li><h2> Frais d'agence: <?php the_field("frais_dagence")?>€</h2></li>
		<li><h2> Date de mise en vente : <?php the_field("date_mise_vente")?></h2></li>
		<li><h2> Exposition : <?php the_field("exposition")?></h2></li>
		<li><h2> Critères :</h2> 
		<?php 
		$criteres =wp_get_post_terms( get_the_ID(),"criteres", array( 'fields' => 'all' ));
			foreach ($criteres as $crit) {?>
			<h2> <?php echo $crit->name ?></h2>
		<?php } ?>
	</li>
	</ul>
	    
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

 </div>

<?php get_footer() ?>
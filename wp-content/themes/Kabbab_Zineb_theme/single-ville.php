<?php get_header() ?>

 <div>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1 class="text-center" style="padding:20px"><?php the_title(); ?></h1>
    <?php the_post_thumbnail();?>
    <ul class="list-group-item list-group-item-light font-weight-bold" >
		<li><h2> Nom : <?php the_field("nom")?> </h2></li>
		<li><h2> Code postal : <?php the_field("code_postal")?></h2></li>
		<li><h2> Description : <?php the_field("description")?></h2></li>
		<li><h2> Liste des biens :</h2></li>
         <?php $query = new WP_Query(['post_type' => 'logements',
                    'meta_query' => array (
                                         array(
                                                'post_type' => 'ville',
                                                'value' => '"'.get_the_ID().'"',
                                                'compare' => 'LIKE'
                                                ),

                                            ),  

                                     ]);
            if($query -> have_posts()) : while ($query -> have_posts()): $query -> the_post();?>
                    <div>
                        <a class="font-italic h3" href="<?php echo get_the_permalink($post); ?>">
                        <?php  echo get_the_title($post); ?>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>  
                <?php endif; ?>
    </div>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

 </div>

<?php get_footer() ?>
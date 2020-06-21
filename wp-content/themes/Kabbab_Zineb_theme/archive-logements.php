<?php get_header() ?>
<h1 class="font-weight-bold text-center" style="padding:20px"> Mes logements </h1>
<?php $monPost = new WP_Query( array( 'post_type' => 'Logements', 'posts_per_page' => '5' ) ); ?>
<?php if (have_posts()) : ?>
    <div class="row">
        <?php while ($monPost->have_posts()) : $monPost->the_post(); ?>
            <div class="col-sm-4">
                <div class="card border-secondary mb-3" style="width: 18 rem; height: 20 rem">    
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => 'Card image cap', 'style' => 'height: 20rem; width: auto;'])?>
                        <h2 class="card-title text-center" style="padding:10px"><?php the_title() ?></h5>
                        <h3 class="card-text" style="padding-left:20px">
                           Prix: <?php the_field("prix") ?> €. <br>
                            Surface:<?php the_field("surface")?> m². <br>
</h3>
                        <a href="<?php the_permalink() ?>" class="card-btn btn-primary text-center" > Voir plus</a>
                </div>
            </div>
<?php endwhile; wp_reset_query(); ?>

    </div>

    </ul>
<?php else : ?>
    <h1>Pas d'article</h1>
<?php endif; ?>

<?php get_footer() ?>
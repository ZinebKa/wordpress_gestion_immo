<?php get_header()?>
<div class="container">

  <div class="row">
    <div class="col card">
       <h1 class="font-weight-bold card-title" >Liste des villes </h1>
           <?php $loop = new WP_Query(array('post_type' => 'ville')); 
                  foreach($loop -> posts as $post): ?>
                      <div>
                        <a class="font-italic h2" href="<?php echo get_the_permalink($post); ?>">
                           <?php  echo get_the_title($post); ?>
                        </a>
                      </div>
                     <?php endforeach;    ?>
                     <a href="<?php echo get_post_type_archive_link('ville'); ?>" class="mt-3"><h3>Toutes les villes</h3></a>
                       
    </div>
    <div class="col card">
         <h1 class="font-weight-bold card-title">Liste des logements </h1>
             <?php $loop2 = new WP_Query(array('post_type' => 'logements')); 
                      foreach($loop2 -> posts as $post2): ?>
                          <div>
                             <a class="font-italic h3"href="<?php echo get_the_permalink($post2); ?>">
                                  <?php  echo get_the_title($post2); ?>
                              </a>
                          </div>
                       <?php endforeach;    ?>
                        <a href="<?php echo get_post_type_archive_link('logements'); ?>" class="mt-3"><h3>Tous les logements</h3></a>
     </div>
  </div>
  
</div>
<?php get_footer()?>
<?php get_header(); ?>


  
<div class="single-inner">
  <?php if(have_posts()): 
  while(have_posts()): the_post(); ?>



  <div class="single-img">
   <figure>
      <?php 
        if (has_post_thumbnail()){
        the_post_thumbnail('medium');
        }
          else {
            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/nophoto01@2x.jpg" />';
        }
        ?>
    </figure>
 </div>


  <div class="single-caption">
    <h2><?php the_title(); ?></h2>
    <div class="single-content">
    <?php the_content(); ?>
    </div>

    <div class="costomfild">
      <div class="costomfild-content">
        <a href="<?php $value = get_post_meta( get_the_ID(), 'URL', true );
        if( $value ){
          echo $value;
          }
          ?>" target="_blank">
        <?php $value = get_post_meta( get_the_ID(), 'URL', true );
        if( $value ){
        echo "<p>","URL","</p>";
        echo $value;
        }
          ?>
        </a>
      </div>
           
     <div class="costomfild-content">
        <a href="<?php $value = get_post_meta( get_the_ID(), 'github', true);
        if( $value ){
        echo $value;
        }
       ?>" target="_blank">
       <?php $value = get_post_meta( get_the_ID(), 'github', true );
        if( $value ){
        echo  "<p>","guthub","</p>";
         echo $value;
        }
        ?>
        </a>
      </div>

      <div class="costomfild-content"> 
        <?php $value = get_post_meta( get_the_ID(), 'used languages', true);
        if( $value ){
         echo "<p>","used languages","</p>";
         echo $value;
          }?>
  
        </div>

      <div class="costomfild-content"> 
        <?php $value = get_post_meta( get_the_ID(), 'used tools', true);
        if( $value ){
         echo "<p>","used tools","</p>";
         echo $value;
          }?>
        
      </div>

      <div class="costomfild-content"> 
        <?php $value = get_post_meta( get_the_ID(), '作業時間', true);
        if( $value ){
         echo "<p>","作業時間","</p>";
        echo $value;
        }?>
      </div>
          
            

    </div>
  
  <?php endwhile;?><?php endif; ?>



  </div>



</main>
<div class="single-btns">
  <p class="prev-btn">
  <?php previous_post_link('<i class="fas fa-angle-double-left"></i> %link', 'prev'); ?></p>
  <p class="next-btn">
<?php next_post_link('%link <i class="fas fa-angle-double-right"></i>', 'next'); ?></p>
 </div>

<?php get_footer(); ?>
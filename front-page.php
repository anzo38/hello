<?php get_header(); ?>


<section id="about">
<h2><?php echo "always challenging 
just do it before thinking
activeness" ?></h2>

<
  <div class="container">
   <div class="row">
     <div class="box"><p>try my hand at something new</p>
     </div>
    </div>
    

      <div class="row">
        <div class="box">
        <p>keep evolving</p>
        </div>
      </div>

      <div class="row">
        <div class="box">
        <p>act before thinking</p>
       </div>
      </div>
  </div>


</div>
    </section>

<section id="skills">
    <h2>Skills</h2>
    <div class="skils-icon">
    <i class="fab fa-html5 fa-3x"></i>
    <i class="fab fa-css3-alt fa-3x"></i>
    <i class="fab fa-sass fa-3x"></i>
    <i class="fab fa-wordpress fa-3x"></i>
   </div>

    <div class="skills-icon-under">
    <i class="fab fa-js fa-2x"></i>
    <i class="fab fa-php fa-2x"></i>
    </div>

    </section>


    <section id="bio">
      <div class="bio-inner">
     <dl>
       <div class="bio-item">
        <dt>2008.03</dt>
        <dd>県立北部高等学校</dd>
       </div>
        <div class="bio-item">
        <dt>2010.4</dt>
        <dd>ネイルサロン就職</dd>
        </div>
        <div class="bio-item">
        <dt>2013.4</dt>
        <dd>ネイルサロン開業</dd>
        </div>
        <div class="bio-item">
        <dt>2015.8</dt>
        <dd>Sydney留学</dd>
        </div>
        <div class="bio-item">
        <dt>2020.4</dt>
        <dd>html,css
        </dd>
        </div>
      </dl>
      </div>
    </section>

<div id="works" class="works">
    <ul class="works-inner">
  <?php 
if(have_posts()): while(have_posts()):the_post();?>
  <li>
<a href ="<php the_permalink();?>">
  <div class="thumb">
<?php if (has_post_thumbnail()){?>
  <?php the_post_thumbnail('medium');?>
  <?php } else {?>
    <?php echo "nophoto";?>
  <?php } ?> 
  </div>
  <div class="outline">
    <div class="title"><?php the_title();?></div>
    <div class="discri"><?php the_excerpt();?></div>
    <p><?php the_content(''); ?></p>

  </div>
  </a>
</li>
  <?php endwhile; ?>
</ul>
</div>
  <?php endif; ?>
      
<?php get_footer(); ?>
<?php
while(have_posts()) {
  the_post(); ?>
<h1> This is a page </h1>
<h1><?php the_title()?></h1>
<?php the_content(); ?>
<?php
}
?>
<?php 
// Screenshot.png determines the picture of the theme you create 


// this is how you write function in php
// function greet($name,$color) { 
//   echo "<p>Hello, my name is $name and my favorite color is $color</p>";
// }

// greet('John','blue');
// greet('Jane','green');

?>

<?php 
// Wordpress has integrated function at our disposal.
// You just have to know which ones are they and how and when to use them
?>
<!-- 
<h1><?php bloginfo('name'); ?></h1>

<p><?php bloginfo('description'); ?></p> -->

<?php

// Arrays

// $names = array('Ali', 'Saskia', 'Pierre','John');

// $count = 0;
// while($count < count($names)) { 
//   echo "<li>Hi, my name is $names[$count]</li>";
//   $count++;

// }


// While loops are also working for Php

// $count = 1;

// while($count <= 100) { 
//   echo "<li>$count</li>";
//   $count++;
// }


// log the posts on page

while(have_posts()) {
  the_post(); ?>
<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
<?php the_content(); ?>
<hr>
<?php
}
?>
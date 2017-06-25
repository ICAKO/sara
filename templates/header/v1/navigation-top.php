<?php
/**
 * Display Top Menu
 */

  wp_nav_menu(array(
      'theme_location' => 'top',
      'container' => 'nav',
  ));
  
?>

<?php /*
<nav>
  <ul>
    <li class="active"><a href="index.html">Home</a></li>
    <li><a href="#">About</a></li>
    <li class="has_dropdown">
      <a href="#">Pages</a>
      <ul class="sub-menu">
        <li><a href="#">Life</a></li>
        <li><a href="#">Sport</a></li>
        <li class="has_dropdown">
          <a href="#">Global Pages</a>
          <ul class="sub-menu">
            <li><a href="about.html">About Me</a></li>
            <li><a href="404.html">404 Page</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav> */ ?>

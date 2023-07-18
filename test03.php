<?php
$menu_items = array(
  array('url' => 'index.php', 'text' => 'Home'),
  array('url' => 'about.php', 'text' => 'About'),
  array('url' => 'services.php', 'text' => 'Services'),
  array('url' => 'contact.php', 'text' => 'Contact')
);
?>

<nav>
  <ul>
    <?php foreach ($menu_items as $item): ?>
      <li><a href="<?php echo $item['url']; ?>"><?php echo $item['text']; ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
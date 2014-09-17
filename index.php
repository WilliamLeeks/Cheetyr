<?php
header("Content-Type: text/html");
include dirname(__FILE__) . '/includes/AltoRouter.php';
 
$router = new AltoRouter();
$router->setBasePath('');
/* Setup the URL routing. This is production ready. */
 
// Main routes that non-customers see
$router->map('GET','/', 'home.php', 'home');
$router->map('GET','/home', 'home.php', 'home-home');
$router->map('GET','/photoshop', 'photoshop.php', 'photoshop');
$router->map('GET','/illustrator', 'illustrator.php', 'illustrator');
$router->map('GET','/css-selectors', 'css-selectors.php', 'css-selectors');
$router->map('GET','/git', 'git.php', 'git');
$router->map('GET','/vim', 'vim.php', 'vim');

/* Match the current request */
$match = $router->match();
if($match) {
  require $match['target'];
}
else {
  header("HTTP/1.0 404 Not Found");
  require '404.php';
}
?>
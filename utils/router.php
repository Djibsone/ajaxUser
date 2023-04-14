<?php 

$explodRoute = explode('?', $_SERVER['REQUEST_URI']);
$route = $explodRoute[0];

if ($route === '/') {
   require './views/index.php';
} 

elseif ($route === '/user') {
    require './views/users.php';
}

// elseif ($route === '/signin') {
//     require './views/signin.php';
// } 

// elseif ($route === '/signout') {
//     echo '<h1>Page signout</h1>';
// } 

else {
    echo '<h1>404 Not Found</h1>';
}

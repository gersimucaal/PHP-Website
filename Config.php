<?php

// DB Server
define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', 'Vrockpokey96');
define ('DB', 'sales');

try {
    $db = new PDO('mysql:host='.HOST.';dbname='.DB.';charset=utf8', USER, PASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// Controller Prefix & Postfix
define('PATHPREFIX', "../controllers/");
define('PATHPOSTFIX', "Controller.php");
/////////////////////////////////////////////////////////
// Controller Web Form Insert
define('InsertPATHPREFIX', "../controllers/");
define('InsertPATHPOSTFIX', "MenuInsert.php");

// Controller Insert Proces
define('InsertProcesPATHPREFIX', "../controllers/");
define('InsertProcesPATHPOSTFIX', "MenuInsertProces.php");
/////////////////////////////////////////////////////////
// Controller Rregulluesi Web Form Delete
define('DELETEPATHPREFIX', "../controllers/");
define('DELETEPATHPOSTFIX', "MenuDelete.php");

// Controller Web Form Delete Proces
 define('DeleteProcesPATHPREFIX', "../controllers/");
 define('DeleteProcesPATHPOSTFIX', "MenuDeleteProces.php");
/////////////////////////////////////////////////////////
// Controller Rregulluesi Web Form Update
define('UPPATHPREFIX', "../controllers/");
define('UPPATHPOSTFIX', "MenuUpdate.php");

// Controller Pro Web Form Delete Proces
 define('UpdateProcesPATHPREFIX', "../controllers/");
 define('UpdateProcesPATHPOSTFIX', "MenuUpdateProces.php");


// Path to Template Files Type (*.php)
define ('TEMPLATEPREFIX', "../views/");
define ('TEMPLATEPOSTFIX', ".php");

?>

<!-- You're creating constants. Constants are immutable values with super global scope. You can access them from anywhere in your application. It looks like you're creating a path that translates to "../controllers/Controller.php" And you would get that by writing a line of code like PATHPREFIX.PATHPOSTFIX. Prefix being the thing you prepend before a string and Postfix being the thing you append after a string.

So, a good application would be if you were building a piece of structured code, where you had directories containing your mvc stuff by class name. You might have a directory class called XXX that has a model a view and a controller under the XXX directory. The way you would hit it would be (and I'm just guessing) PATHPREFIX. "XXX". PATHPOSTFIX, and then within the directories, your model is always called model, your controller is always called controller, and your views are whatever you decide to call them from there. Not the way I would organize something like that, but I've seen it done.

If you're working with a module oriented system, that kind of organizational structure might make sense. 
-->

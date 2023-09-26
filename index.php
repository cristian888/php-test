<?php declare(strict_types=1);

require ('functions.php');

fullName('John', 'Doe');
fullName('Jane', 'Doe');
fullName('John', 'Smith');

echo"<br>";

familyName('Jani');
familyName('Hege');
familyName('Stale');
familyName('Kai Jim');


$audi = 'Audi';
carsIlove($audi);


    //Anonymous function expected
    $getPaths = function ($type) {
        self::validateType($type);
        return isset(self::$paths[$type]) ? self::$paths[$type] : [];
    };



$title = 'My Blog';
//define variable $posts as an array
$posts = getPosts();
$numPosts = count($posts);
$postText = getPostText($numPosts);
$numPostsDisplay = "$numPosts $postText";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?php for ($i = 0; $i < $numPosts; $i++) : ?>
    <h3><?= $posts[$i]['title'] ?></h3>
    <p><?= $posts[$i]['content'] ?></p>
<?php endfor ?>

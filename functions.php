<?php

function familyName($fname)
{
    echo "$fname Refnes.<br>";
    return $fname;
}

echo"<br>";

function carsIlove ($audi)
{
    global $audi;
    echo "I like cars like $audi.";

}

function getPosts(): array
{
$posts = [
[
'title' => 'How to learn PHP',
'content' => 'This is how you learn PHP.',
],
[
'title' => 'How to learn MySQL',
'content' => 'This is how you learn MySQL.',
],
[
'title' => 'How to learn Nginx',
'content' => 'This is how you learn Nginx.',
],
];
return $posts;
};

function getPostText (int $numPosts): string
{
return $numPosts === 1 ? 'post' : 'posts';
}
<?php

function get_user_count()
{
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"login");
    $user_count ="";
    $query = "select count(*) as user_count from input";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $user_count = $row['user_count'];
    }
    return($user_count);

}
function get_book_count()
{
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"login");
    $book_count ="";
    $query = "select count(*) as book_count from book";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $book_count = $row['book_count'];
    }
    return($book_count);

}
function get_cat_count()
{
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"login");
    $cat_count ="";
    $query = "select count(*) as cat_count from category";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $cat_count = $row['cat_count'];
    }
    return($cat_count);

}

function get_author_count()
{
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"login");
    $author_count ="";
    $query = "select count(*) as author_count from author";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $author_count = $row['author_count'];
    }
    return($author_count);

}
function get_issued_book_count()
{
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"login");
    $issued_book_count ="";
    $query = "select count(*) as issued_book_count from issued_book";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $issued_book_count = $row['issued_book_count'];
    }
    return($issued_book_count);

}

?>


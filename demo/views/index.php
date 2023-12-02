<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
</head>

<body>
    <h1> Hello World</h1>
    <!-- Basic syntaxing and conditional statement -->
    

<!-- playiing with ARRAYS -->
    <?php
    //this is the shorthand form for array, the initial is
    // $books = array(....)
    $sbooks= ["The lost symbol", "Digital fortresss",
     "the old man and the medal"];

    ?>
<div class="books">

<p> BOOKS AVAILABLE</p>
 


<?php
//    foreach($books as $book){
//         echo "<li>{$book}&trade;</li>";
//      }
?>
 
 <ul>
    <i> Arrays</i>
    <?php foreach($sbooks as $sbook): ?>

<li> <?= $sbook?></li>

<?php endforeach ;?>


    <!-- <ul>
    <li> The lost symbol</li>
    <li> Digital fortress</li>
    <li> The old man and the medal</li> -->
</ul>
</div>
<p> the most read is book is <?= $sbooks[2]?></p>


<div class="associative-array">
 <p> The associative-array</p>


<?php foreach($search as $book):?>
    <li>
    <a href="<?=$book['buy_link']?>"> <?= $book['year']?> by 
    <?= $book['name']?></a>
  </li> 
        <?php endforeach;?>

</div>

<br>
    <div class="embed">
    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">The bergofsky principle in social context; Never stop trying!</p>&mdash; Tami ✨ (@tammyalemu) <a href="https://twitter.com/tammyalemu/status/1673695000536797190?ref_src=twsrc%5Etfw">June 27, 2023</a></blockquote> 
    
    </div>
<br>
<?php

?>
</body>
<!-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
</html>

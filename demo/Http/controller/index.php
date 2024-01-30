
<?php
    $st= "dark matter";
    $ok= true;

    // if($st == $ok){
    // //echo [you can as well echo from here, 
    // //but to add more styling, you echo from the html]
    // $sure = "congrats, you've read $st";
    // }else{
    //     $notsure="not read";
    // }  

    
$books = [[
    'name'=> " The old man and the sea",
    'year' => 2008,
    'author'=> "Willy Graham",
    'buy_link' => "#"
],
[ 
    'name'=> "The found symbol",
    'year'=> 2021,
    'author'=>"Ross williams",
    'buy_link'=> "#"
],
    [
    'name'=> "The orange tree",
    'year'=> 2021,
    'author'=>"Ross williams",
    'buy_link'=> "#"
    ]
];


// assigning a funcctio to a varible 
// function filter($item, $key, $value){
//     $filterd =[];

//         foreach($item as $items){
//             if($items[$key]===$value){
//                 $filterd[]=$items;
//             }
//         }
//         return $filterd;
// };
// $allowed = filter($books, 'year', 2021);

/**
 * Summary of found
//  * @param mixed $item
//  * @param mixed $fn
//  * @return array
*/
// function found( $item, $fn){
//     $filter =[];
//     foreach( $item as $items){
//         if($fn($items)){
//             $filter[]=$items;
//         }
//     }
//     return $filter;
// }

// using the php built-in function
$search =  array_filter($books, function($book){
    return $book['year'] > 2002;
});

//include ('functions.php');



view("index.php", [
   // require 'nav.controller.php'

]);








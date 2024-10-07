<?php
        $books = [
            [
                'name'=>'Do Androids Dream of Electric Sheep',
                'author'=>'Philip K.Dick',
                'releaseYear'=>1968,
                'purchaseUrl'=>'http://example.com'
            ],
            [
                'name'=>'Project Hail Mary',
                'releaseYear'=>2021,
                'author'=>'Andy Weir',
                'purchaseUrl'=>'http://example.com'
            ],
            [
                'name'=>'The Martian',
                'author'=>'Andy Weir',
                'releaseYear'=>2011,
                'purchaseUrl'=>'http://example.com'
            ],
        ];

/*
        function filter($items,$key,$value){
            $filteredItems = [];
            foreach($items as $item){
                if($item[$key]===$value){
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        }

        $filteredBooks = filter($books,'releaseYear',2021);
*/

/*
        //php lambda function
        function filter($items,$fn){
            $filteredItems = [];
            foreach($items as $item){
                if($fn($item)){
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        }

        $filteredBooks = filter($books,function($book){
            return $book['releaseYear'] >= 2000;
        });
*/

        //php function filter
        $filteredBooks = array_filter($books,function($book){
            return $book['releaseYear'] >=2000;
        });
    

        require "index.view.php";
?>
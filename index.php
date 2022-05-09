<?php

$database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
            'genre' => 'Rock'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales</h6>',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
            'genre' => 'Jazz'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
            'genre' => 'Metal'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
            'genre' => 'Rock'
        ]
    ];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-main">
    <header>
        
        <div class="bg-album">
            <img src="https://grafica-facile.com/wp-content/uploads/2022/01/spotify-logo.png" alt="" class="logo p-3">
        </div>
        
  
    </header>

   
   
   <div class="container w-50 h-100">

   



       <div class="row mt-3 pt-3 d-flex justify-content-center">
   

    <?php            
    foreach($database as $key => $value){
        echo 
                    
                        "
                        
                        
                        <div class='col-3 flex-column d-flex justify-content-center m-3 align-items-center bg-album'>
                         <img src='{$value['poster']}' class='w-75 album-img'>
                         <h6 class='text-title'> {$value['title']}</h6>
                         
                         <div class='text-secondary'>{$value['author']} </div>
                         <div class='text-secondary pb-3'>{$value['year']}</div>
                         
                        
                        </div>
                        "    
        
        
        ;
    };


?>
    </div>
</div>

<style>
    .bg-album{
        background-color: rgba(0,0,0,0.3);
    }

    .bg-main{
        background-color: #1E2D3B;
    }

    .logo{
        width: 5%;
    }

    .text-title{
        text-align: center;
        padding-top: 10%;
       color: white;
    }

    .album-img{
        padding-top: 15%;
     
        
    }
    
</style>


    
</body>
</html>
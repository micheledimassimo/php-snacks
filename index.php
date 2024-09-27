<?php
    

    $posts = [
    
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Snacks</title>
        <link rel="stylesheet" href="./css/12bool.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <section>
            <h2>
                Snack 2
            </h2>
            
            <ul>
                <?php
                    foreach($posts as $date => $post ) {  
                        foreach($post as $x) {
                ?>
                    <li>
                        <?php
                        echo 'data del post:'.' '.$date;
                        echo '<br>';
                        echo 'post:'.' '.$x['title']; 
                        echo 'post:'.' '.$x['author'];
                        echo 'post:'.' '.$x['text'];
                        ?>     
                    </li>
                <?php        
                    }
                }
                ?>
            </ul>
        </section>
    </body>
</html>
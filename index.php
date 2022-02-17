<?php 

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <title>PHP-AJAX DISCHI</title>
    </head>
    <body>

        <div id="app">
            <header>
                <img src="./img/spotify-logo.png" alt="spotify-logo">
            </header>
    
            <main>
                <div class="container d-flex justify-content-between flex-wrap">
                    <div class="ms_song-card" v-for="song in discList">
                        <img :src="song.poster" :alt="song.title">
                        <h1>
                            {{song.title.toUpperCase()}}
                        </h1>
                        <div class="ms_author">
                            <p>{{song.author}}</p>
                            <p>{{song.year}}</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        

        <script src="js/script.js"></script>
    </body>
</html>
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
                <!-- filters  -->
                <div class="d-flex justify-content-center mb-5 ms_filter">

                    <!-- genre filter -->
                    <span>Genere:</span>
                    <select v-model="genreValue" @change="filterGenre">
                        <option disabled value="">Scegli un genere</option>
                        <option value="All">All</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Metal">Metal</option>
                        <option value="Pop">Pop</option>
                        <option value="Rock">Rock</option>
                    </select>
                    
                    <!-- artist filter -->
                    <span>Artista:</span>
                    <select v-model="artistValue" @change="filterArtist">
                        <option disabled value="">Scegli un artista</option>
                        <option value="All">All</option>
                        <option value="Bon Jovi">Bon Jovi</option>
                        <option value="Queen">Queen</option>
                        <option value="Sting">Sting</option>
                        <option value="Steve Gadd Band">Steve Gadd Band</option>
                        <option value="Iron Maiden">Iron Maiden</option>
                        <option value="Eric Clapton">Eric Clapton</option>
                        <option value="Deep Purple">Deep Purple</option>
                        <option value="Metallica">Metallica</option>
                        <option value="Dave Weckl">Dave Weckl</option>
                        <option value="Michael Jacjson">Michael Jacjson</option>
                    </select>
                </div>
                <!-- / filters  -->

                <!-- song card  -->
                <div class="container d-flex justify-content-start flex-wrap">
                    <div class="ms_song-card" v-for="song in filteredDiscList">
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
                <!-- / song card  -->
            </main>
        </div>

        <script src="js/script.js"></script>
    </body>
</html>
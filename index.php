<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div id="app">

    <header>
        <nav>
            <div class="">
                <div class="logo">
                    <img src="./img/logo.png" alt="">
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-4" v-for="disk in diskArray">
                    <div class="song">
                        <img :src="disk.poster">
                        <h4>{{ disk.title }}</h4>
                        <span> {{ disk.author }} </span>
                        <span> {{ disk.year }} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="app.js"></script>
</body>
</html>
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>

<body>
    <div class="bg-blue d-flex justify-content-between">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Logo_of_RAI_%282016%29.svg/768px-Logo_of_RAI_%282016%29.svg.png" class="img-fluid ms-3" alt="whatsapp" />
        <Filtered placeholder="Scegli un genere" :genres="genres" @getOption="getOption" />
    </div>

    <div class="lists">
        <div class="container cs-cards pt-5 d-flex">
            <div class="text-center w-100" v-if="isLoaded">
                <h1>CARICAMENTO IN CORSO..</h1>
            </div>

            <div class="p-2 cs-container">
                <img :src="image" class="img-card" alt="">
                <h2>{{album}}</h2>
                <p class=" mt-3 mb-0">{{artist}}</p>
                <p>{{year}}</p>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
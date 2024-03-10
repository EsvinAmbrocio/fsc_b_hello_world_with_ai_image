<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Hola Mundo!</title>
    <style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        border: 0;
        padding: 0;
        flex-direction: column;
    }
    main {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    h1 {
        margin-top: 1%;
    }
    img {
        width: 50%;
        margin: auto;
        margin-top: 20px;
    }
    </style>
</head>
<body>
    <main>
        <h1>
            <?php
            echo "Hola mundo, soy Esvin Ambrocio";
            ?>
        </h1>
        <img src="/public/Default_A_majestic_temple_adorned_with_intricate_carvings_of_t_1.jpg" alt="">
    </main>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Listrik Negara</title>

    <link rel="shortcut icon" href="<?php echo AST; ?>/img/pln.ico" type="image/x-icon">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color:#44bcb4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        main {
            max-width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }

        img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            color: #fff;
            padding: 10px;
            border-radius: 6px;
            margin: 0 0 20px 0;
            background-color: #44bcb4;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table td {
            padding: 10px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #b8e0d2;;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #b8e0d2;
        }

        input[type="submit"] {
            width: 100%;
            padding: 15px;
            box-sizing: border-box;
            background-color: #44bcb4;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #44bcb4;
        }

        main:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <main>
        <img src="<?php echo AST; ?>/img/pln.png" alt="Logo PLN">
        <?php
        require_once ROOT . "app/views/" . $view . ".php";
        session_destroy();
        ?>
    </main>
</body>

</html>

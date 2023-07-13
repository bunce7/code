<?php
$name = $_POST['name'] ?? null;
?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
    <style>
        section {
            width: 64rem;
            margin: 0 auto;
            padding: 5px;
            text-align: center;
            background-color: #B3A1FF;
            color: white;
        }

        .box {
            display: grid;
            align-items: center;
            justify-content: center;
            border: solid 3px;
            height: 100px;
            padding: 5px 0;
            width: 100px;
            border-radius: 20px;
        }

        .btn {
            background-color: green;
            border: 1px solid transparent;
            padding: 0.5rem 1.5rem;
            color: whitesmoke;
        }

        input {
            border: 1px solid transparent;
            padding: 0.5rem 1.5rem;
        }
    </style>
</head>

<body>
    <section>
        <h1>Hello
            <?= $name ?>
        </h1>
        <div style="display: flex; gap: 1rem; align-items: center; justify-content:center">
            <div class="box" style=" background-color: #ff4d4d;">
                1</div>
            <div class="box" style=" background-color: #32ff7e; ">
                2</div>
            <div class="box" style=" background-color: #7efff5; ">
                3</div>

        </div>
        <p> This is some description text that <br> wraps to the next line.</p>
        <form action="challenge.php" method="POST">

            <label for="name"> Name: </label>
            <input type="text" name="name" id="name" />
            <button type="submit" class="btn"> submit </button>

        </form>
    </section>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p {
            color: red;
            font-weight: bold;
            font-style: italic;
            font-family: fantasy;
            border: solid 3px;
            border-radius: 25px;
            border-radius: 0px 50px 80px 50px;

        }

        body {
            background-color: cornSilk;
        }

        button {
            font-family: monospace;
        }

        section {
            width: 64rem;
            background-color: #4b4b4b;
            margin: 0 auto;
            padding: 1rem;
        }
    </style>
</head>

<body>

    <section>
        <h1 style="font-style:italic; font-family: cursive; font-size: 80px;">Up The Boro</h1>
        <p style="font-size: 60px;">
            Chuba Amechi <em> Akpom</em><br>
            Are Middlesbrough going up?
        </p>
        <button style="font-size: 60px;"> <strong>Yes</strong></button> <button style="font-size: 60px;">
            <strong>No</strong></button>


        <h1> Recommended Books </h1>

        <?php
        $books = [
            "The Enemy",
            "SilverFin",
            "The Hunger Games"
        ];
        ?>

        <ul>
            <?php foreach ($books as $book): ?>
                <li>
                    <?= $book ?>
                </li>
            <?php endforeach; ?>,
        </ul>
    </section>
</body>

</html>
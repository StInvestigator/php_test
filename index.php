<?php

$arr = [
    [
        null,'X','O'
    ],
    [
        null,'X',null
    ],
    [
        'O','X','O'
    ],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hometask 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Ex 1</h1>
    <table class="table table-striped table-bordered fs-3">
        <thead>
            <tr class="table-warning">
                <th scope="col">A</th>
                <th scope="col">B</th>
                <th scope="col">A + B</th>
                <th scope="col">A * B</th>
                <th scope="col">A ^ B</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <?php for ($j = 1; $j <= 5; $j++): ?>
                    <tr <?php if ($j === 1)
                        echo 'class="table-success"' ?>>
                            <td scope="row"><?= $i ?></td>
                        <td><?= $j ?></td>
                        <td><?= $i + $j ?></td>
                        <td><?= $i * $j ?></td>
                        <td><?= $i ** $j ?></td>
                    </tr>
                <?php endfor; ?>
            <?php endfor; ?>
        </tbody>
    </table>

    <h1>Ex 2</h1>
    <table class="table table-bordered border-primary w-50 mx-auto fs-3">
        <tbody>
            <?php foreach ($arr as $row): ?>
                <tr>
                    <?php foreach ($row as $el): ?>
                        <td <?php echo $el == 'X' ? 'class="table-success"'
                            : ($el === 'O' ? 'class="table-secondary"'
                                : '') ?>><?= $el ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
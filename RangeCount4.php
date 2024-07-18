<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Range Count</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Number Range Count</h1>
        <form action="code.php" method="post">
            <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="form-group">
                <label for="num<?= $i ?>">Number <?= $i ?>:</label>
                <input required type="text" class="form-control" id="num<?= $i ?>" name="num<?= $i ?>">
            </div>
            <?php endfor; ?>
            <button name="fourth" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
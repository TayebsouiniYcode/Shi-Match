<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Shi-match</title>
</head>

<body class="bg-gray-50">
    <?= include './../views/layouts/commun/navbar.php'; ?>
    <div>
        {{content}}
    </div>

    <?= include './../views/layouts/commun/footer.php'; ?>
</body>

</html>
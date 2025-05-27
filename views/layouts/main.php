<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Shi-match</title>
</head>

<body class="bg-gray-50">
    <div>
        <?php require_once './../views/layouts/commun/dashboard-navbar.php'; ?>
        <div class="flex">
            <?php require_once './../views/layouts/commun/dashboard-sidebar.php'; ?>
            {{content}}
        </div>
    </div>
</body>

</html>
<html>
<head>
    <style>
        h1 {
            color: #f81900;

        }
    </style>
</head>
<body>
<?php if (($exception->statusCode)==404): ?>
    <h1 class="message">Такой страницы не существует.</h1>
<?php else:?>
    <h1 class="message">У вас не хватает прав доступа.</h1>
<?php endif; ?>

</body>
</html>
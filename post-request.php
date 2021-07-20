<html>

<head></head>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        Hi <?= $_POST['name']; ?>, you are <?= $_POST['age']; ?> years old.
    <?php endif; ?>

    <form action="post-request.php" method="POST">
        <ul>
            <li>Name <input name="name" /></li>
            <li>Age <input name="age" /></li>
        </ul>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

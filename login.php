<?php session_start(); ?>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>

    <?php if (isset($_POST['username']) && isset($_POST['password'])): ?>
        <?php $_SESSION['user'] = $_POST['username']; ?>
    <?php else: ?>
        <?php unset($_SESSION['user']); ?>
    <?php endif; ?>

    
<?php endif; ?>

<?php if (isset($_SESSION['user'])): ?>
    Welcome <?php echo $_SESSION['user']; ?>
    <form action="login.php" method="POST">
        <button type="submit">Logout</button>
    </form>
    <a href="profile.php">Profile</a>
    <br />
<?php else: ?>
    <form action="login.php" method="POST">
        <ul>
            <li>Username <input name="username" /></li>
            <li>Password <input type="password" name="password" /></li>
        </ul>
        <button type="submit">Submit</button>
    </form>
<?php endif ?>

<?php var_dump($_SESSION); ?>
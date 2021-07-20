<?php session_start(); ?>
<?php if (isset($_SESSION['user'])): ?>
    Profile, name: <?php echo $_SESSION['user']; ?>
<?php endif ?>

<?php var_dump($_SESSION); ?>
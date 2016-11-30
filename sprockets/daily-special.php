<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

		<h1>Daily Special:</h1> 

<?php echo dailySpecial($myPic,$special,$description); ?>


        <p>Click below to view specials for other days</p>
        <a href=daily-special.php?day=sun>Sunday</a>
        <a href=daily-special.php?day=mon>Monday</a>
        <a href=daily-special.php?day=tue>Tuesday</a>
        <a href=daily-special.php?day=wed>Wednesday</a>
        <a href=daily-special.php?day=thu>Thursday</a>
        <a href=daily-special.php?day=fri>Friday</a>
        <a href=daily-special.php?day=sat>Saturday</a>



<?php include 'includes/footer.php'; ?>

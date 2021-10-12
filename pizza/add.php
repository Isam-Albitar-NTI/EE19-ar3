<?php

/* if (isset($_GET['submit'])) {
    echo $_GET['email'];
    echo $_GET['title'];
    echo $_GET['ingredients'];
} */

if (isset($_POST['submit'])) {
    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['ingredients'];
}

?>

<!DOCTYPE html>
<html lang="sv">

<?php include('header.php');?>

<section class="container grey-text">
    <h4 class="center">Write Movie Info</h4>
    <form action="add.php" class="white" method="post">
        <label>Movie Name</label>
        <input type="text" name="email">
        <label>Genre</label>
        <input type="text" name="title">
        <label>Language </label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" id="" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include('footer.php'); ?>
</html>
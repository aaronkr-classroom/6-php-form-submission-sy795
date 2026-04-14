<?php 
// check-for-http-get_TODO.php
include 'includes/header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $term = $_POST['term'] ??'';
    echo 'You search for ' . htmlspecilalchars($term);
}
else { ?>
    <feo, action="check-for-http-get.php" method="POST">
        search for: <input type="search" name="term" />
        <input type="submit" name="sent" value="search" placeholder="검색..."/>
</form>
<?php } ?>

<?php include 'includes/footer.php'; ?> 


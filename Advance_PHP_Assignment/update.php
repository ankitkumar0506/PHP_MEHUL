<?php
// Retrieve data for specified row from database
$id = $_GET['id'];
$row = get_row_from_database($id);

// Display form with data from database
?>
<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Column 1:</label>
    <input type="text" name="column1" value="<?php echo $row['column1']; ?>">
    <label>Column 2:</label>
    <input type="text" name="column2" value="<?php echo $row['column2']; ?>">
    <input type="submit" value="Update">
</form>

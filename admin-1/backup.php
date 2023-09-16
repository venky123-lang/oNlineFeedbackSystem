<?php
require_once("header.php");
?>
        <div class="main">
        <?php
// MySQL database details
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'Venky@123';
$db_name = 'venky';
$table_name = 'signup';

if(isset($_POST['backup'])) {
    // Backup filename and location
    $backup_file = 'backup/'.date("Y-m-d_H-i-s").'_'.$table_name.'.sql';

    // Execute the mysqldump command
    exec("mysqldump -h$db_host -u$db_user -p$db_pass $db_name $table_name > $backup_file");

    // Output success or failure message
    if(file_exists($backup_file)) {
        echo "Backup created successfully at $backup_file";
    } else {
        echo "Backup creation failed";
    }
}
?>

<!-- HTML form to display backup button -->
<form method="post">
    <button type="submit" name="backup">Backup Table</button>
</form>




        </div>


<?php
require_once("footer.php");
?>

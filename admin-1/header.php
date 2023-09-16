<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel -Student Feedback RUCE</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Welcome Admin!</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="upload.php">
                        <span class="icon">
                        <ion-icon name='cloud-upload-outline'></ion-icon>
                        </span>
                        <span class="title">Upload Student Data</span>
                    </a>
                </li>

                <li>
                    <a href="configuration.php">
                        <span class="icon">
                            <ion-icon name="create-outline"></ion-icon>
                        </span>
                        <span class="title">Configure mapping</span>
                    </a>
                </li>

                <li>
                    <a href="showactivatedfeedbacks.php">
                        <span class="icon">
                            <ion-icon name="shield-checkmark-outline"></ion-icon>
                        </span>
                        <span class="title"><main>Mapped Configurations</main></span>
                    </a>
                </li>


                <li>
                    <a href="reports.php">
                        <span class="icon">
                        <ion-icon name="mail-open-outline"></ion-icon>
                        </span>
                        <span class="title">Reports</span>
                    </a>
                </li>
               

                <li>
                    <a href="logout.php" >
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
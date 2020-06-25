 <?php
// connection to database
$conn = mysqli_connect("localhost","root","vaishabhi@99","logins");
//check connection to database
    if($conn->connect_errno > 0)
    {
        die("Unable to connection to database[".$conn->connect_error."]");
    }
    
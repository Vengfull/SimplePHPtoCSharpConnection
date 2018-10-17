<?php
    // example www.yourdomain.com/index.php?username=test123
    include 'database.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else
    {
        // HANDLE USERNAME parameter
        if(isset($_GET['username']) && !empty($_GET['username']))
        {
            $username = $_GET['username']; // username parameter from url string
            
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " Password " . $row["password"]. "";
                }
            }
        }
    }
?>

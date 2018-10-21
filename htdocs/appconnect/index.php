<?php
    // example www.yourdomain.com/index.php?username=test123&password=adawdawd
    include 'database.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else
    {
        // HANDLE USERNAME and PASSWORD parameter
        if(!empty($_GET['username']) && !empty($_GET['password']))
        {
            $username = $_GET['username']; // username parameter from url string
            $password = $_GET['password']; // password parameter converted to sha hash
            $passhash = sha1(strtoupper($username.":".$password));
            
            $stmt = $stmt = $conn->prepare("SELECT * FROM account WHERE username=? and sha_pass_hash=?");
            $stmt->bind_param('ss', $username, $passhash); // 's' specifies the variable type => 'string'
            $stmt->execute();
            
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " lastip " . $row["last_ip"]. "";
                }
            }
        }
    }
?>

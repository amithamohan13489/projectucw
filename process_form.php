{"textColorIndex":0,"note":"<?php\nif ($_SERVER['REQUEST_METHOD'] == \"POST\") {\n    \/\/ Collect form data\n    $fname = htmlspecialchars($_POST[\"fname\"]);\n    $lname = htmlspecialchars($_POST[\"lname\"]);\n    $email = htmlspecialchars($_POST[\"email\"]);\n    $age = htmlspecialchars($_POST[“role”]);\n \n    \/\/ Database connection parameters\n    $hostname = \"database-ucw.cr4gsccqaw9d.us-east-1.rds.amazonaws.com\"; \/\/ e.g., localhost\n    $username = \"admin\";\n    $password = “database653”;\n    $database = “ucw_user_db\";\n    $port = 3306;\n \n    \/\/ Create a connection to the database\n    $conn = new mysqli($hostname, $username, $password, $database, $port);\n \n    \/\/ Check the connection\n    if ($conn->connect_error) {\n        die(\"Connection failed: \" . $conn->connect_error);\n    }\n \n    \/\/ Insert user details into the database\n    $sql = \"INSERT INTO user_details (first_name, last_name, email, role) VALUES ('$fname', '$lname', '$email', '$role')”;\n    if ($conn->query($sql) === TRUE) {\n        echo \"<h2>Data saved successfully!<\/h2>\";\n    } else {\n        echo \"Error: \" . $sql . \"<br>\" . $conn->error;\n    }\n \n    \/\/ Close the database connection\n    $conn->close();\n} else {\n    \/\/ If the form is not submitted, redirect to the form page\n    header(\"Location: main.html\");\n    exit();\n}\n?>","bgColorIndex":0}
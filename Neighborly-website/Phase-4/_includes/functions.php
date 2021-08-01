<?php
/**
* Common Functions
*/


function connect_db() {
    global $pdo;
    try {
        $connString = "mysql:host=".DBHOST.";dbname=".DBNAME;
        $user = DBUSER;
        $pass = DBPASS;
        $pdo = new PDO($connString,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        die( $e->getMessage() );
    }
}


function load_user() {
    global $pdo;
    // demo: load example users for now

    if (!empty($_POST['username'])) {
        try {
            $sql = "SELECT * FROM user WHERE username = ? ";
            $statement = $pdo->prepare($sql);
            $result = $statement->execute([trim(strtolower($_POST['username']))]);
            if (false === $result) throw new PDOException('User query failed');
        
            $data = $statement->fetchAll();
            if (count($data)>0) {
                $_SESSION['user_id'] = $data[0]['user_id'];
                $_SESSION['username'] = $data[0]['username'];
                $_SESSION['user_role'] = ucfirst($data[0]['role']);
            }

            if ($_SESSION['user_role'] == 'Admin') {
                header("location: /admin_dashboard.php");
                exit();
            }
            if ($_SESSION['user_role'] == 'Superadmin') {
                header("location: /dashboard.php");
                exit();
            }

        } 
        catch (PDOException $e) {
          trigger_error('Database error: ' . $e->getMessage());
        }
    }

}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_phone($phone) {
    return preg_match('/^(\(?\s*\d{3}\s*[\)–\.]?\s*)?[2-9]\d{2}\s*[–\.]\s*\d{4}$/', $phone);
}

function validate_password($pass) {
    return strlen($pass) > 6;
}


/**
 * @message - an array with [message_type, message_content]
 */
function displayMessage($message) {
    // message type can be error or success or info
    if (is_array($message)) {

        if ($message[0] == 'error') {
            echo '<div class="message-error"><strong>Error:</strong> ' . $message[1] . '</div>' . "\n";
        }
        else if ($message[0] == 'success') {
            echo '<div class="message-success"><strong>Success!</strong> ' . $message[1] . '</div>' . "\n";
        }
        else if ($message[0] == 'info') {
            echo '<div class="message-info">' . $message[1] . '</div>' . "\n";
        }
    }

}

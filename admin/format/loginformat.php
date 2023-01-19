<?php
include_once 'library/session.php';
Session::checkLogin();
?>
<?php include_once 'library/database.php'; ?>
<?php include_once 'helper/format.php'; ?>

<?php

class loginpannel
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new DataBase();
        $this->fm = new Format();
    }

    public function login($email, $pass)
    {
        $pass = $this->fm->validation($pass);

        if (empty($email) || empty($pass)) {
            echo "Fields were empty";
        } else {
            $query = "SELECT * FROM admin_reg WHERE email = '$email' AND admin_pass='$pass'";
            $result = $this->db->select($query);
            if ($result != false) {
                $value = $result->fetch_assoc();
                Session::set("user_login", true);
                Session::set("msg", "invalid code");
                Session::set("id", $value['id']);
                Session::set("firtsname", $value['firstname']);
                Session::set("lastname", $value['lastname']);
                Session::set("email", $value['email']);
                Session::set("mobile", $value['phone_number']);
                header("Location: index.php");
            } else {
                $msg = "Number and password does not match";
                return $msg;
            }
        }
    }
}

?>
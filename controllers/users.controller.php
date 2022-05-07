<?php
// Login Users
class UsersController
{
    public function CTRLuserlogin()
    {
        if (isset($_POST["Username"])) {
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["Username"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["Password"])
            ) {
                $table = "users";
                $item = "user";
                $value = $_POST["Username"];
                $request = UsersModel::MdlShowUsers($table, $item, $value);

                if ($request["user"] == $_POST["Username"] && $request["password"] == $_POST["Password"]) {
                    $_SESSION["user-Session"] = "valid";
                    echo '<script>
                        windows.location = "home";
                    </script>';
                } else {
                    echo '<div class="alert alert-danger"> Error Login User </div>';
                }
                // var_dump($request);
            }
        }
    }
}

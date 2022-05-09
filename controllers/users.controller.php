<?php
// Login Users
class UsersController
{
    static public function CTRLuserlogin()
    {
        if (isset($_POST["Username"])) {
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["Username"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["Password"])
            ) {
                $table = "users";
                $item = "user";
                $value = $_POST["Username"];
                $request = UsersModel::mdlShowUsers($table, $item, $value);

                if ($request["user"] == $_POST["Username"] && $request["password"] == $_POST["Password"]) {
                    $_SESSION["user-Session"] = "valid";
                    echo '<script>
                        windows.location = "home";
                    </script>';
                } else {
                    // echo '<div class="alert alert-danger"> Error Login User </div>';
                    echo '<script>
                    swal({
                        type: "error",
                        title: "Wrong Credentials, Type In The Correct Credentials",
                        showConfirmButton: true,
                        confirmButtonText: "Close",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "users";
                        }
                    });
                    </script>';
                }
                // var_dump($request);
            }
        }
    }
    /*===================
    Create or Register Users
     ===================*/

    static public function mdlAddUser()
    {
        # code...
        if (isset($_POST["newUser"])) {
            if (
                preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["newName"]) &&
                preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["newUser"]) &&
                preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["newPass"])
            ) {
                $table = 'users';
                $datas = array(
                    "name" => $_POST["newName"],
                    "user" => $_POST["newUser"],
                    "password" => $_POST["newPass"],
                    "profile" => $_POST["profile"]
                );

                $request = UsersModel::mdlAddUser($table, $datas);

                if ($request == "valid") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Adding new User successfull",
                        showConfirmButton: true,
                        confirmButtonText: "Close",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "users";
                        }
                    });
                    </script>';
                }
            } else {
                echo '<script>
                swal({
                    type: "error",
                    title: "Incorrect Details, Fill in the blank spaces",
                    showConfirmButton: true,
                    confirmButtonText: "Close",
                    closeOnConfirm: false
                }).then((result)=>{
                    if(result.value){
                        window.location = "users";
                    }
                });
                </script>';
            }
        }
    }
}

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
                    $_SESSION["user-Session"] = "ok";
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Login Successeful, Welcome To GoodTech Inventory System",
                        showConfirmButton: true,
                        confirmButtonText: "Close",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "home";
                        }
                    });
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
                            window.location = "login";
                        }
                    });
                    </script>';
                }
            }
        }
    }
    /*===================
    Create or Register Users
     ===================*/

    static public function addUser()
    {
        if (isset($_POST["newUser"])) {
            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["newName"]) &&
                preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["newUser"]) &&
                preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["newPass"])

                if (isset($_FILES["newphoto"]["tmp_name"])){
                    list($width, $height) = getimagesize($_FILES["newphoto"]["tmp_name"]);
                    $newWidth = 500;
                    $newHeight = 500;

                    // Create direcory to store the uploaded image
                    $directories = "views/img/users/". $_POST["newphoto"];
                    mkdir($directories, 0755);
                    
                    // 
                    if ($_FILES["newphoto"]["type"] == "image/jpeg"){
                        //
                        $ran_number = mt_rand(100,999);
                        $redirect = "views/img/users/". $_POST["newUser"]."/".$ran_number.".jpg";
                        $source  = imagecreatefromjpeg($_FILES["newphoto"]["tmp_name"]);
                        $destination = imagecreatetruecolor($newWidth, $newHeight );

                        imagecopyresized($destination, $source, 0, 0, 0,0,$newWidth,$newHeight, $width, $height);
                        imagejpeg($destination, $redirect);
                    }
                }
            ) {
                $table = 'users';
                $datas = array(
                    "name" => $_POST["newName"],
                    "user" => $_POST["newUser"],
                    "password" => $_POST["newPass"],
                    "profile" => $_POST["profile"]
                );

                // $request = UsersModel::mdlAddUser($table, $datas);
                $request = UsersModel::mdAddUsers($table, $datas);

                if ($request == "added") {

                    echo '<script>
                    swal({
                        type: "success",
                        title: "The User Has Been successfully",
                        showConfirmButton: true,
                        confirmButtonText: "Close",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "home";
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

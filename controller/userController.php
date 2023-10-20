<?php
require_once('model/userModel.php');
class UserController
{

    public function loginUser()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $error_message = '';
        if (empty($password) && !empty($email)) {
            $error_message = "Vui lòng nhập mật khẩu !";
            echo '<script>var errorMessage = "' . $error_message . '";</script>';
        }
        if (!empty($password) && empty($email)) {
            $error_message = "Vui lòng nhập email !";
            echo '<script>var errorMessage = "' . $error_message . '";</script>';
        }
        if (!empty($password) && !empty($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_message = "Email không hợp lệ !";
            } else {
                $userModel = new UserModel();
                $userData = $userModel->login($email, $password);

                if ($userData !== false) {
                    session_start();
                    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                    $_SESSION['email'] = $email;
                    $_SESSION['user_data'] = $userData;
                    require_once('view/php/profile.php');
                    //header("Location: http://localhost/base_account/view/php/profile.php");
                    exit();
                } else {
                    $error_message = "Sai tên đăng nhập hoặc mật khẩu !";
                }
            }
            echo '<script>var errorMessage = "' . $error_message . '";</script>';
        }
        require_once('view/php/login.php');

    }


    public function logoutUser()
    {
        session_start();
        if (
            isset($_GET['csrf_token']) &&
            isset($_SESSION['csrf_token']) &&
            $_GET['csrf_token'] === $_SESSION['csrf_token']
        ) {
            session_unset();
            session_destroy();
            if (isset($_COOKIE[session_name()])) {
                setcookie(session_name(), '', time() - 3600, '/');
            }

            header("Location: http://localhost/base_account/");
            exit();
        }
    }
    public function signupUser()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $error_message = '';

        if (empty($fullname) && !empty($email) && !empty($phone) && !empty($password)) {
            $error_message = "Vui lòng nhập họ tên !";
            echo '<script>var errorMessage = "' . $error_message . '";</script>';
        }
        if (!empty($fullname) && !empty($email) && empty($phone) && !empty($password)) {
            $error_message = "Vui lòng nhập số điện thoại !";
            echo '<script>var errorMessage = "' . $error_message . '";</script>';
        }

        if (!empty($fullname) && !empty($email) && !empty($phone) && empty($password)) {
            $error_message = "Vui lòng nhập mật khẩu !";
            echo '<script>var errorMessage = "' . $error_message . '";</script>';
        }

        $emptyVariableCount = 0;
        if (empty($email)) {
            $emptyVariableCount++;
        }

        if (empty($password)) {
            $emptyVariableCount++;
        }

        if (empty($fullname)) {
            $emptyVariableCount++;
        }

        if (empty($phone)) {
            $emptyVariableCount++;
        }

        if ($emptyVariableCount >= 2 && $emptyVariableCount < 4) {
            $error_message = "Vui lòng nhập đủ thông tin đăng ký!";
            echo '<script>var errorMessage = "' . $error_message . '";</script>';
        }
        if ($fullname != '' && $phone != '' && $email != '' && $password != '') {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_message = "Email không hợp lệ !";
            } elseif (strlen($password) < 8) {
                $error_message = "Mật khẩu phải chứa ít nhất 8 ký tự !";
            } else {
                $usermodel = new UserModel();
                $result = $usermodel->signup($fullname, $phone, $email, $password);

                if ($result) {
                    session_start();
                    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                    $_SESSION['email'] = $email;
                    $_SESSION['user_data'] = $result;
                    // var_dump($result);
                    require_once('view/php/profile.php');
                    exit();
                } elseif ($result === false) {
                    $error_message = "Đăng ký thất bại !";
                }
            }
            echo '<script>var errorMessage = "' . $error_message . '";</script>';
        }
        require_once('view/php/signup.php');

    }



    public function updateUser()
    {
        session_start();

        if (!isset($_SESSION['email'])) {
            $error_message = "Bạn phải đăng nhập để cập nhật thông tin !";
            echo "<script>alert('" . $error_message . "');</script>";
            return;
        }

        $email = $_SESSION['email'];
        $fullname = isset($_POST['newName']) ? $_POST['newName'] : '';
        $phone = isset($_POST['newPhone']) ? $_POST['newPhone'] : '';
        $address = isset($_POST['newAddress']) ? $_POST['newAddress'] : '';
        $company = isset($_POST['newCompanyName']) ? $_POST['newCompanyName'] : '';
        $username = isset($_POST['newUsername']) ? $_POST['newUsername'] : 'Chưa nhập username';
        $usermodel = new UserModel();

        if (isset($_POST['newProfileImage']) && $_POST['newProfileImage'] != '') {
            $avt = $_POST['newProfileImage'];
        }
        if (isset($_POST['newProfileImage']) && $_POST['newProfileImage'] == '') {
            if ($usermodel->getAvt($email) != '') {
                $img = $usermodel->getAvt($email);
            } else {
                $img = "avt_default.jpg";
            }
            $avt = $img;
        }

        $userModel = new UserModel();
        $result = $userModel->updateInfor($email, $fullname, $phone, $address, $company, $username, $avt);

        if ($result) {
            $_SESSION['user_data']['fullname'] = $fullname;
            $_SESSION['user_data']['phone'] = $phone;
            $_SESSION['user_data']['address'] = $address;
            $_SESSION['user_data']['company'] = $company;
            $_SESSION['user_data']['username'] = $username;
            $_SESSION['user_data']['avt'] = $avt;

            require_once('view/php/profile.php');
        } else {
            $error_message = "Có lỗi xảy ra, không thể cập nhật thông tin !";
            echo "<script>alert('" . $error_message . "');</script>";
        }
    }

}

?>



<?php
require_once('model/DbModel.php');

class UserModel extends DbModel {

    public function login($email, $password) {
        $pdo = $this->connect();
        if (!$pdo) {
            die("Không thể kết nối đến cơ sở dữ liệu.");
        }

        $query = "SELECT * FROM `profile` WHERE email = ?";
        $stmt = $pdo->prepare($query);

        if ($stmt) {
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result !== false) {
                $hashedPasswordFromDB = $result['password'];
                if (password_verify($password, $hashedPasswordFromDB)) {
                    $userData = [
                        'fullname' => $result['fullname'],
                        'email' => $result['email'],
                        'phone' => $result['phone'],
                        'avt' => $result['avt'],
                        'company' => $result['company'],
                        'address' => $result['address'],
                        'username' => $result['username'],
                    ];
                    return $userData;
                }
            }
        }
        return false;
    }

    public function signup($fullname, $phone, $email, $password) {
        $pdo = $this->connect();
        if (!$pdo) {
            die("Không thể kết nối đến cơ sở dữ liệu.");
        }

        $query = "SELECT * FROM `profile` WHERE email = ?";
        $stmt = $pdo->prepare($query);

        if ($stmt) {
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result !== false) {
                return false;
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $insertQuery = "INSERT INTO `profile` (fullname, phone, email, password) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($insertQuery);

            if ($stmt) {
                $stmt->bindParam(1, $fullname, PDO::PARAM_STR);
                $stmt->bindParam(2, $phone, PDO::PARAM_STR);
                $stmt->bindParam(3, $email, PDO::PARAM_STR);
                $stmt->bindParam(4, $hashedPassword, PDO::PARAM_STR);
                if ($stmt->execute()) {
                    $userData = [
                        'fullname' => $fullname,
                        'phone' => $phone,
                        'email' => $email,
                    ];
                    return $userData;
                }
            }
        }

        return false;
    }

    public function updateInfor($email, $fullname, $phone, $address, $company, $username, $avt) {
        $pdo = $this->connect();
        if (!$pdo) {
            die("Không thể kết nối đến cơ sở dữ liệu.");
        }

        $query = "SELECT * FROM `profile` WHERE email = ?";
        $stmt = $pdo->prepare($query);

        if ($stmt) {
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result !== false) {
                $updateQuery = "UPDATE `profile` SET fullname = ?, phone = ?, address = ?, company = ?, username = ?, avt = ? WHERE email = ?";
                $stmt = $pdo->prepare($updateQuery);

                if ($stmt) {
                    $stmt->bindParam(1, $fullname, PDO::PARAM_STR);
                    $stmt->bindParam(2, $phone, PDO::PARAM_STR);
                    $stmt->bindParam(3, $address, PDO::PARAM_STR);
                    $stmt->bindParam(4, $company, PDO::PARAM_STR);
                    $stmt->bindParam(5, $username, PDO::PARAM_STR);
                    $stmt->bindParam(6, $avt, PDO::PARAM_STR);
                    $stmt->bindParam(7, $email, PDO::PARAM_STR);
                    if ($stmt->execute()) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    public function getAvt($email){
        $pdo = $this->connect();
        if (!$pdo) {
            die("Không thể kết nối đến cơ sở dữ liệu.");
        }

        $query = "SELECT * FROM `profile` WHERE email = ?";
        $stmt = $pdo->prepare($query);

        if ($stmt) {
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result !== false) {
                return $result['avt'];
                }
            }
        return false;
    }
}
?>

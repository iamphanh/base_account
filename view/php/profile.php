<?php
// session_start();
$userData = isset($_SESSION['user_data']) ? $_SESSION['user_data'] : [];
$fullname = isset($userData['fullname']) ? $userData['fullname'] : "Tên Người Dùng";
$phone = isset($userData['phone']) ? $userData['phone'] : "Số điện thoại chưa cập nhật";
$email = isset($userData['email']) ? $userData['email'] : '';
$address = isset($userData['address']) ? $userData['address'] : '';
$company = isset($userData['company']) ? $userData['company'] : '';
$username = isset($userData['username']) ? $userData['username'] : '';
$avt = isset($userData['avt']) ? $userData['avt'] : 'avt_default.jpg';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="shortcut icon" href="https://static-gcdn.basecdn.net/account/image/fav.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="https://account.base.vn/css/zJiU_tPJLoaUpYoFc22eCFD1Mk6Jt-28ILBpjl89n2j6t_Hat4ey1mIBVuLg_g2a?v=hy49zuLTrpHVvCl4&amp;var=1">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:500,400,300,400italic,700,700italic,400italic,300italic&amp;subset=vietnamese,latin">
    <link rel="stylesheet" type="text/css" href="http://localhost/base_account/view/css/styles.css">
    <title>Thông Tin Cá Nhân - Base Account</title>
</head>

<body>
    <noscript>
        <div class='noscript'>
            <br><br>Javascript must be enabled to process the website.
        </div>
    </noscript>
    <div class="sidebar">
        <ul>
            <li>
                <div class="icon-text-container">
                    <a href="#">
                        <img id="avt" src="http://localhost/base_account/images/profile.png" alt="Thông tin">
                        Thông tin
                    </a>
                </div>
            </li>
            <li>
                <div class="icon-text-container">
                    <a href="?action=logoutUser">
                        <img src="http://localhost/base_account/images/logout.png" alt="Đăng xuất">
                        Đăng xuất
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <div class="editBtn">
        <button id="editButton">Chỉnh sửa thông tin</button>
    </div>
    <div class="container">
        <div class="profile">
            <label for="avatarInput" class="avatar-label">
                <img id="avatarImage" src="http://localhost/base_account/images/<?php echo $avt; ?>" alt="Ảnh đại diện">
            </label>
        </div>
        <div class="profile">
            <h1 id="profile/fullname">
                <?php echo $fullname; ?>
            </h1>
            <div class="form-row" id="profile/job">
            </div>
            <div class="form-row">
                <label for="newPhone">Số điện thoại:</label>
                <span id="profile/phone">
                    <?php echo $phone; ?>
                </span>
            </div>
            <div class="form-row">
                <label for="newPhone">Email:</label>
                <span id="profile/email">
                    <?php echo $email; ?>
                </span>
            </div>
        </div>
    </div>

    <div class="info_detail">
        <div>
            THÔNG TIN LIÊN HỆ
        </div>
        <div>KINH NGHIỆM LÀM VIỆC
        </div>
    </div>


    <div id="popup" class="popup">
        <div class="popup-content">
            <h2>Chỉnh Sửa Thông Tin</h2>
            <form id="editForm" action="?action=updateUser" method="post">
                <div class="form-row">
                    <label for="newName">Tên:</label>
                    <input type="text" id="newName" name="newName" required value="<?php echo $fullname; ?>">
                </div>

                <div class="form-row">
                    <label for="newPhone">Số Điện Thoại:</label>
                    <input type="tel" id="newPhone" name="newPhone" required readonly value="<?php echo $phone; ?>">
                </div>

                <div class="form-row">
                    <label for="newAddress">Địa Chỉ:</label>
                    <input type="text" id="newAddress" name="newAddress" required value="<?php echo $address; ?>">
                </div>

                <div class="form-row">
                    <label for="newEmail">Email:</label>
                    <input type="email" id="newEmail" name="newEmail" value="<?php echo $email; ?>" required readonly>
                </div>

                <div class="form-row">
                    <label for="newUsername">Tên Người Dùng:</label>
                    <input type="text" id="newUsername" name="newUsername" value="<?php echo $username; ?>" required>
                </div>

                <div class="form-row">
                    <label for="newProfileImage">Ảnh Đại Diện:</label>
                    <input type="file" id="newProfileImage" name="newProfileImage" accept="image/*">
                </div>

                <div class="form-row">
                    <label for="newCompanyName">Tên Công Ty:</label>
                    <input type="text" id="newCompanyName" name="newCompanyName" required
                        value="<?php echo $company; ?>">
                </div>

                <div class="button-row">
                    <button type="submit" id="saveButton">Lưu Thay Đổi</button>
                    <button type="button" id="cancelButton">Hủy</button>
                </div>
            </form>
        </div>
    </div>

    <script src="http://localhost/base_account/view/js/script.js"></script>
</body>

</html>
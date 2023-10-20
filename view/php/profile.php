<?php
// session_start();
$userData = isset($_SESSION['user_data']) ? $_SESSION['user_data'] : [];
// var_dump($userData);
$fullname = isset($userData['fullname']) ? $userData['fullname'] : "Tên Người Dùng";
$phone = isset($userData['phone']) ? $userData['phone'] : "Số điện thoại chưa cập nhật";
$email = isset($userData['email']) ? $userData['email'] : '';
$address = isset($userData['address']) ? $userData['address'] : '';
$company = isset($userData['company']) ? $userData['company'] : '';
$username = isset($userData['username']) ? $userData['username'] : 'Chưa nhập username';
$avt = isset($userData['avt']) ? $userData['avt'] : 'avt_default.jpg';

?>

<html>

<head>
    <title>
        <?php echo $fullname; ?> - Account - Base Inc
    </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="AUTHOR" content="base.vn">
    <meta name="COPYRIGHT" content="base.vn">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="H6n0qvxxImzZ9U2PbJlpWCDAwlvafPTDnXvXf2k52zw">
    <meta name="keywords" content="Account, Base Account">
    <meta name="description" content="Account, Base Account">
    <link rel="shortcut icon" href="https://static-devtest.basecdn.net/account/image/fav.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="https://account.basevn.tech/css/bO5sZUswQjw8YyagXAeCClL_OA6Di9uORZCbMqpJhrMz3rZAyE5Q9zNu5_oDQ7ue?v=0411b0f8f5e37f2fc3fe&amp;var=1">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:500,400,300,400italic,700,700italic,400italic,300italic&amp;subset=vietnamese,latin">
    <link rel="stylesheet" type="text/css" href="http://localhost/base_account/view/css/styles.css">

    <script type="text/javascript" defer=""
        src="https://cdn.segment.com/analytics.js/v1/fED4Dyp1ECZM2gBWtooAjlasa6bRkXqR/analytics.min.js"></script>
    <script type="text/javascript">

            <div id="base-search"></div>

<!-- Google tag (gtag.js) -->
            <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-7ZLQM5JV1Z"></script>
    <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-7ZLQM5JV1Z');
    </script>



    <div id="base-panel" class="ext -more">
        <div class="items">
            <div class="item">
                <div class="image -user-avatar">
                    <div class="inner"><img src="http://localhost/base_account/images/<?php echo $avt; ?>">
                    </div>
                </div>
            </div>

            <div class="item active item-main url" title="Tài khoản" data-url="account">
                <div class="icon-text-container">
                    <a href="#">
                        <img id="setting" src="http://localhost/base_account/images/ring.png" alt="">
                    </a>
                </div>

                <div class="info">Account</div>

            </div>

            <div class="item item-main" title="Notifications" onclick="Base.toggle(&quot;notis&quot;);">
                <div class="icon-text-container">
                    <a href="#">
                        <img id="setting" src="http://localhost/base_account/images/ring.png" alt="">
                    </a>
                </div>

                <div class="info">Notifications</div>

            </div>

            <div class="item item-company url" data-url="company">
                <div class="icon-text-container">
                    <a href="#">
                        <img id="setting" src="http://localhost/base_account/images/people.png" alt="">
                    </a>
                </div>

                <div class="info">Members</div>
            </div>



            <div class="item item-chart url" data-url="company/units">
                <div class="icon-text-container">
                    <a href="#">
                        <img id="setting" src="http://localhost/base_account/images/group.png" alt="">
                    </a>
                </div>

                <div class="info">Groups</div>
            </div>


            <div class="item item-guest url" data-url="guests">
                <div class="icon-text-container">
                    <a href="#">
                        <img id="setting" src="http://localhost/base_account/images/ring.png" alt="">
                    </a>
                </div>

                <div class="info">Guests</div>
            </div>


        </div>


        <div class="item item-baseapps url" data-url="baseapps">
            <div class="icon-text-container">
                <a href="#">
                    <img id="setting" src="http://localhost/base_account/images/app.png" alt="">
                </a>
            </div>

            <div class="info">Applications</div>
        </div>


        <div class="footer">

            <div class="item" title="Logout" onclick="Base.logout()">
                <div class="icon-text-container">
                    <a href="?action=logoutUser&csrf_token=<?php echo $_SESSION['csrf_token']; ?>">
                        <img id="setting" src="http://localhost/base_account/images/logout.png" alt="Đăng xuất">
                    </a>
                </div>
                <div class="ap-f14" style="margin-top:-5px; padding-bottom:6px;">Logout</div>
            </div>

        </div>

    </div>
    <div id="bcanvas" class="bcanvas">

        <div class="eclose" onclick="BC.unextend();" title="Close preview"><span class="-ap icon-close"></span></div>

        <div class="-in">
            <div class="close" onclick="BC.hide();"><span class="-ap icon-close"></span></div>

            <div class="__main">
                <div class="__titlew">
                    <div class="__title with-image"></div>
                </div>

                <div class="__full full"></div>

                <div class="__content">
                    <div class="__canvas canvas"></div>
                </div>
            </div>


            <div class="side __sidew">
                <div id="bside" data-autoscroll="1">
                    <div class="sideapp __side"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="document" class="screen-ld">
        <div id="master">
            <div id="pagew" class="scroll-y forced-scroll">
                <div id="page" class="">
                    <div id="menuw">
                        <div id="menu">

                            <div class="list items">

                                <div class="top">
                                    <div class="userinfo ap-xdot">
                                        <div class="name">
                                            <?php echo $fullname; ?>
                                        </div>
                                        <div class="info ap-xdot" title="<?php echo $email; ?>">
                                            <?php echo $username; ?> &nbsp;·&nbsp;
                                            <?php echo $email; ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="title">
                                    Account information
                                </div>

                                <div class="box">
                                    <div class="li active url" data-url="account">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/setting.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Account overview</div>
                                        </div>

                                    </div>

                                    <div class="li" onclick="Me.info.edit();">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/pencil.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Edit account</div>
                                        </div>
                                    </div>

                                    <div class="li" onclick="Me.info.editLanguage();">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/compass.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Edit language</div>
                                        </div>
                                    </div>


                                    <div class="li" onclick="Me.info.editPassword();">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/!.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Edit password</div>
                                        </div>
                                    </div>


                                    <div class="li" onclick="Me.chooseColor();">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/palette.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Edit theme color</div>
                                        </div>
                                    </div>

                                    <div class="li" onclick="Me.timesheet.set();">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/clock.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Set timesheet</div>
                                        </div>
                                    </div>

                                    <div class="li url" data-url="2factor">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting"
                                                    src="http://localhost/base_account/images/security.png" alt="">
                                            </a>
                                            <div class="text">2-factor authentication</div>
                                        </div>
                                    </div>

                                </div>


                                <div class="title">
                                    Application &amp; Security
                                </div>

                                <div class="box">
                                    <div class="li url" data-url="account/apps" style="display:none">
                                        <div class="icon"><span class="-ap icon-dashboard"></span></div>
                                        <div class="text">Application Management</div>
                                    </div>

                                    <a class="li" href="//apps.base.vn" target="_blank" style="display:none">
                                        <span class="icon"><span class="-ap icon-arrow-right3"></span></span>
                                        <span class="text">Base Appstore</span>
                                    </a>
                                </div>
                                <div class="title">
                                    Advance Setting
                                </div>
                                <div class="box">

                                    <div class="li url" data-url="account/logins">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/clock.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Login histories</div>
                                        </div>
                                    </div>

                                    <div class="li url" data-url="account/devices">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/tv.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Manage linked devices</div>
                                        </div>
                                    </div>


                                    <div class="li">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/email.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Edit email notification</div>
                                        </div>
                                    </div>

                                    <div class="li">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/clock.png"
                                                    alt="">
                                            </a>
                                            <div class="text">Edit timezone</div>
                                        </div>
                                    </div>


                                    <div class="li">
                                        <div class="icon-text-taskbar">
                                            <a href="#">
                                                <img id="setting" src="http://localhost/base_account/images/link.png"
                                                    alt="">
                                            </a>
                                            <div class="text">On-leave delegation</div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                    <div id="page-main">
                        <div class="apptitle" id="mngheader">

                            <div class=""><button id="editButton">Chỉnh sửa thông
                                    tin</button>
                            </div>
                            <div class="back url" data-url="company">
                                <div class="label">Account</div>
                                <div class="title">
                                    <?php echo $fullname; ?>
                                </div>
                            </div>

                        </div>
                        <div id="profile">

                            <div class="main">
                                <div class="image uploadable"><img
                                        src="http://localhost/base_account/images/avt_default.jpg">
                                    <div class="upload-form">
                                        <form method="post" id="_uuid14138_2214_1697616733" action="api/me/edit.avatar">
                                            <input type="file" name="image" id="_uuid23206_56571_1697616733">
                                        </form>
                                    </div>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <?php echo $fullname; ?>
                                    </div>

                                    <div class="subtitle">
                                        <?php echo $company; ?>
                                    </div>

                                    <div class="info">
                                        <b>Email address</b>
                                        <?php echo $email; ?>
                                    </div>

                                    <div class="info">
                                        <b>Phone number</b>
                                        <?php echo $phone; ?>
                                    </div>
                                    <div class="info" style="display: none;">
                                        <b>Direct managers</b>
                                        <div class="" id="js-managers"></div>
                                    </div>

                                </div>

                            </div>
                            <div class="list">

                                <div class="title">
                                    Contact info
                                </div>
                            </div>
                            <div class="list">

                                <div class="title">
                                    User groups <em>(0)</em>
                                </div>
                            </div>
                            <div class="list" id="js-dreports">

                                <div class="title">
                                    Direct reports <em class="js-count">(0)</em>
                                </div>

                                <div class="js-items"></div>

                            </div>
                            <div class="list">
                                <div class="title">
                                    Education background
                                </div>

                                <div class="item-none">No information.</div>

                            </div>
                            <div class="list">
                                <div class="title">
                                    Work experiences
                                </div>

                                <div class="item-none">No information.</div>
                            </div>
                            <div class="list">
                                <div class="title">
                                    Honors and Awards
                                </div>



                                <div class="item-none">No information.</div>
                            </div>
                            <div class="sep-20"></div>
                            <div class="sep-20"></div>
                            <div class="sep-20"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="__ctm" style="display: none;">
                <div id="__ctmi" class="__contextmenu"></div>
            </div>
        </div>
        <div class="overlay" id="overlay">
            <div class="__fdialogwrapper scroll-y forced-scroll">
                <div class="__dialogwrapper" style="top: 97.5px; left: 100.5px;">
                    <div class="__dialogwrapper-inner">
                        <div class="__dialogmain" id="__dialogmain">
                            <div class="__dialogtitlewrap">
                                <div class="left relative">
                                    <div class="__dialogtitle unselectable ap-xdot">Edit personal profile</div>
                                    <div class="__dialogtitlerender tx-fill"></div>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="__dialogcontent">
                                <div id="edit-fx-dx" class="__apdialog" title="" style="width: 720px;">
                                    <div class="form form-dialog form-inline">
                                        <form method="post" id="edit-profile-fx" action="?action=updateUser">
                                            <div class="form-rows">
                                                <div class="row -istext  " id="_uuid18437_20542_1697620585">
                                                    <div class="label ">Your first name<div class="sublabel">Your first
                                                            name
                                                        </div>
                                                    </div>
                                                    <div class="input data"><input autocomplete="off" data-role=""
                                                            id="newName" name="newName" type="text"
                                                            value="<?php echo $fullname; ?>"
                                                            placeholder="Your first name" class="std ">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row -istext  ">
                                                    <div class="label ">Your last name<div class="sublabel">Your last
                                                            name
                                                        </div>
                                                    </div>
                                                    <div class="input data"><input autocomplete="off" data-role=""
                                                            id="_uuid1343_56060_1697620585" type="text" name="last_name"
                                                            placeholder="Your last name" class="std "></div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row -isfake  ">
                                                    <div class="label ">Email<div class="sublabel">Your email address
                                                        </div>
                                                    </div>
                                                    <div class="input data">
                                                        <div class="input-fake ap-xdot" id="newEmail" name="newEmail">
                                                            <?php echo $email; ?>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row -isfake  ">
                                                    <div class="label ">Username<div class="sublabel">Your username
                                                        </div>
                                                    </div>
                                                    <div class="input data">
                                                        <div class="input-fake ap-xdot" id="newUsername"
                                                            name="newUsername">
                                                            @<b>
                                                                <?php echo $username; ?>
                                                            </b>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row -istext  " id="_uuid13742_99284_1697620585">
                                                    <div class="label ">Company<div class="sublabel">Company</div>
                                                    </div>
                                                    <div class="input data"><input autocomplete="off" data-role=""
                                                            id="_uuid45725_2291_1697620585" type="text" name="title"
                                                            placeholder="Job title" class="std "></div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row -isfile  " id="_uuid69420_29493_1697620585">
                                                    <div class="label ">Profile image<div class="sublabel">Profile image
                                                        </div>
                                                    </div>
                                                    <div class="input data"> <input id="newProfileImage" type="file"
                                                            name="newProfileImage"> </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row -isbase  " id="_uuid22519_43989_1697620585">
                                                    <div class="label ">Date of birth<div class="sublabel">Date of birth
                                                        </div>
                                                    </div>
                                                    <div class="input-group -count-3">
                                                        <div class="gi" style="width: 33.333333333333336%">
                                                            <div class="select data"> <select
                                                                    id="_uuid38269_6510_1697620585" name="dob_day">
                                                                    <option value="0">-- Select date --</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                </select> </div>
                                                        </div>
                                                        <div class="gi" style="width: 33.333333333333336%">
                                                            <div class="select data"> <select
                                                                    id="_uuid3122_38486_1697620585" name="dob_month">
                                                                    <option value="0">-- Select month --</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select> </div>
                                                        </div>
                                                        <div class="gi" style="width: 33.333333333333336%">
                                                            <div class="select data"> <select
                                                                    id="_uuid59787_22818_1697620585" name="dob_year">
                                                                    <option value="0">-- Select year --</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">1999</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                    <option value="1989">1989</option>
                                                                    <option value="1988">1988</option>
                                                                    <option value="1987">1987</option>
                                                                    <option value="1986">1986</option>
                                                                    <option value="1985">1985</option>
                                                                    <option value="1984">1984</option>
                                                                    <option value="1983">1983</option>
                                                                    <option value="1982">1982</option>
                                                                    <option value="1981">1981</option>
                                                                    <option value="1980">1980</option>
                                                                    <option value="1979">1979</option>
                                                                    <option value="1978">1978</option>
                                                                    <option value="1977">1977</option>
                                                                    <option value="1976">1976</option>
                                                                    <option value="1975">1975</option>
                                                                    <option value="1974">1974</option>
                                                                    <option value="1973">1973</option>
                                                                    <option value="1972">1972</option>
                                                                    <option value="1971">1971</option>
                                                                    <option value="1970">1970</option>
                                                                    <option value="1969">1969</option>
                                                                    <option value="1968">1968</option>
                                                                    <option value="1967">1967</option>
                                                                    <option value="1966">1966</option>
                                                                    <option value="1965">1965</option>
                                                                    <option value="1964">1964</option>
                                                                    <option value="1963">1963</option>
                                                                    <option value="1962">1962</option>
                                                                    <option value="1961">1961</option>
                                                                    <option value="1960">1960</option>
                                                                    <option value="1959">1959</option>
                                                                    <option value="1958">1958</option>
                                                                    <option value="1957">1957</option>
                                                                    <option value="1956">1956</option>
                                                                    <option value="1955">1955</option>
                                                                    <option value="1954">1954</option>
                                                                    <option value="1953">1953</option>
                                                                    <option value="1952">1952</option>
                                                                    <option value="1951">1951</option>
                                                                    <option value="1950">1950</option>
                                                                    <option value="1949">1949</option>
                                                                    <option value="1948">1948</option>
                                                                    <option value="1947">1947</option>
                                                                    <option value="1946">1946</option>
                                                                    <option value="1945">1945</option>
                                                                    <option value="1944">1944</option>
                                                                    <option value="1943">1943</option>
                                                                    <option value="1942">1942</option>
                                                                    <option value="1941">1941</option>
                                                                    <option value="1940">1940</option>
                                                                    <option value="1939">1939</option>
                                                                    <option value="1938">1938</option>
                                                                    <option value="1937">1937</option>
                                                                    <option value="1936">1936</option>
                                                                    <option value="1935">1935</option>
                                                                    <option value="1934">1934</option>
                                                                    <option value="1933">1933</option>
                                                                    <option value="1932">1932</option>
                                                                    <option value="1931">1931</option>
                                                                    <option value="1930">1930</option>
                                                                </select> </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row -istext  " id="_uuid14711_66587_1697620585">
                                                    <div class="label ">Your phone number<div class="sublabel">Your
                                                            phone
                                                            number
                                                        </div>
                                                    </div>
                                                    <div class="input data"><input autocomplete="off" data-role=""
                                                            type="text" id="newPhone" name="newPhone"
                                                            placeholder="Your phone number" class="std "
                                                            value="<?php echo $phone; ?>">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="row -istextarea  " id="_uuid63282_95221_1697620585">
                                                    <div class="label ">Current address<div class="sublabel">Current
                                                            address
                                                        </div>
                                                    </div>
                                                    <div class="input data"><textarea data-role="" id="newAddress"
                                                            name="newAddress" placeholder="Current address"
                                                            value="<?php echo $address; ?>"
                                                            style="overflow: hidden; overflow-wrap: break-word; height: 50px;"></textarea>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div style="display:none"><input type="hidden" name="__code"
                                                        value="90954cb39693a33ff2487236606c182e"></div>
                                            </div>

                                            <div class="button-row">
                                                <button type="button" id="cancelButton">Cancel</button>
                                                <button type="submit" id="saveButton">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="ap-root" style="display:none"></div>
        <div id="ap-temp" style="display:none"></div>
        <div id="ap-apps" style="display:none"></div>
        <div id="overlay" style="display:none"></div>
        <div id="alert" style="display:none"></div>
        <div id="ap-data" style="display:none"></div>
        <div id="ap-invs"></div>
        <div id="apdialogs" style="width: 978px;"></div>
        <div style="display: none; height: 200px; overflow: auto;">
            <div style="height:100px;"></div>
        </div>
        <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front"
            style="display: none;"></ul>
        <div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
        <script src="http://localhost/base_account/view/js/script.js"></script>
        </body>

</html>
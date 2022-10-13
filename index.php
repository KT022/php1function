<?php
session_start();
include "./model/pdo.php";
include "./model/product.php";
include "./model/category.php";
include "./model/users.php";
include "./global.php";
include "./view/dist/header.php";

if ((isset($_GET['act'])) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
        case 'manage_address':
            include './view/dist/manage_address.php';
            break;
            
        case 'edituser':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $name_user = $_POST['name_user'];
                $id_user = $_POST['id_user'];
                $email = $_POST['email'];
                // ini_set('display_errors',1);
                update_user($name_user,$email,$id_user);
                $_SESSION['user'] = check_user($email, $pass_user);
                $notification = "successfully updateed please log in again to continue";
            header("Location: index.php?act=account" );
            }
            include './view/dist/edituser.php';
            break;
            
            case 'register':
                if (isset($_POST['register']) && ($_POST['register'])) {
                    $name_user = $_POST['name_user'];
                    $pass_user = $_POST['pass_user'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel_user = $_POST['tel_user'];
                    insert_user($name_user, $pass_user, $email, $tel_user, $address);
                    $notification = "successfully registered please log in to continue";
                // ini_set('display_errors',1);
                // header("Location: index.php?act=login");
                }
            include './view/dist/register.php';
            break;

        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $email = $_POST['email'];
                $pass_user = $_POST['pass_user'];
                $checkuser = check_user($email, $pass_user);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    echo var_dump(extract($checkuser));
                    if($role == 1){
                        header("Location: ../../admin/index.php" );
                    }else{
                        echo 'no admin';
                    }
                    $notification = "successfully logined please return home to enjoy shopping";
                    header("Location: index.php");
                }
                else {
                    $notification = "account does not exist please try again or register";
                }
            // ini_set('display_errors',1);
            }
            include './view/dist/login.php';
            break;

        case 'account':
            if (isset($_SESSION['user']) && ($_SESSION['user'] != '')) {
                extract($_SESSION['user']);
                // echo extract($_SESSION['user']);
                include "./view/dist/account.php";
            }
            else {
                include "./view/dist/login.php";
            }
            break;

        case 'shop':
            $category_list = load_category();
            if (isset($_POST['keyword']) && ($_POST['keyword'] != '')) {
                $keyword = $_POST['keyword'];
            }
            else {
                $keyword = '';
            }

            if (isset($_GET['id_cate']) && $_GET['id_cate'] > 0) {
                $id_cate = $_GET['id_cate'];
            }
            else {
                $id_cate = 0;
            }
            ;
            $product_list_all = load_product($keyword, $id_cate);
            include "./view/dist/shop.php";
            break;

        case 'product_dt':
            if (isset($_GET['id_pro']) && $_GET['id_pro'] > 0) {
                $product = loadone_product($_GET['id_pro']);
            }
            extract($product);
            // var_dump(get_name_cate($id_cate));
            if (strlen($name_pro) > 20) {
                $name_pro_short = substr($name_pro, 0, 18) . '...';
            }
            $name_cate = get_name_cate($id_cate)[0]['name_cate'];
            $product_samecate = load_product_samecate($_GET['id_pro'], $id_cate);
            include "./view/dist/product_dt.php";
            break;

        case 'wishlist':
            if (isset($_SESSION['user']) && ($_SESSION['user'] != '')) {
                extract($_SESSION['user']);
                // echo extract($_SESSION['user']);
                include "./view/dist/wishlist.php";
            }
            include './view/dist/login.php';
            break;

        case 'cart':
            include './view/dist/cart.php';
            break;

        case 'register_form':
            include './view/dist/register.php';
            break;

        case 'checkout':
            include './view/dist/checkout.php';
            break;

        case 'logout':
            session_unset();
            header('./index.php', true);
            // ini_set('display_errors', 1);
            // ob_get_flush();
            break;
    }

}
else {
    $product_new_list = load_product_new();
    $product_best_list = load_product_best();
    include "./view/dist/home.php";

}
include "./view/dist/footer.php";
?>
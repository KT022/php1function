<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./view/dist/images/ccsslogo.svg" type="image/x-icon" />
    <title>CCSS Shop</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./view/dist/style.css">
</head>

<body>

    <!-- header -->
    <header class="py-4 shadow-sm bg-pink-100 lg:bg-white">
        <div class="container flex items-center justify-between">
            <!-- logo -->
            <a href="index.php" class="block w-32">
                <img src="./view/dist/images/ccsslogo.svg" alt="logo" class="w-full">
            </a>
            <!-- logo end -->

            <!-- searchbar -->
            <form class="w-full xl:max-w-xl lg:max-w-lg lg:flex relative hidden" method='post'
                action='index.php?act=shop'>
                <span class="absolute left-4 top-3 text-lg text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" name='keyword'
                    class="pl-12 w-full border border-r-0 border-primary py-3 px-3 rounded-l-md focus:ring-primary focus:border-primary"
                    placeholder="search">
                <button type="submit"
                    class="bg-primary border border-primary text-white px-8 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition">
                    Search
                </button>
            </form>
            <!-- searchbar end -->

            <!-- navicons -->
            <div class="space-x-4 flex items-center">
                <a href="index.php?act=cart"
                    class="lg:block text-center text-gray-700 hover:text-primary transition hidden relative">
                    <span
                        class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
                    <div class="text-2xl">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="text-xs leading-3">Cart</div>
                </a>
                <a href="index.php?act=wishlist"
                    class="block text-center text-gray-700 hover:text-primary transition relative">
                    <span
                        class="absolute -right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">5</span>
                    <div class="text-2xl">
                        <i class="far fa-heart"></i>
                    </div>
                    <div class="text-xs leading-3">Wish List</div>
                </a>
                <a href="index.php?act=account"
                    class="block text-center text-gray-700 hover:text-primary transition">
                    <div class="text-2xl flex items-center justify-center">
                        <!-- <i class="far fa-user"></i> -->
                        <!-- <i class="far fa-user-vneck"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-8 pb-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>


                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a>
            </div>
            <!-- navicons end -->

        </div>
    </header>
    <!-- header end -->

    <!-- navbar -->
    <nav class="bg-gray-800 hidden lg:block">
        <div class="container">
            <div class="flex">

                <!-- all category -->
                <div class="px-8 py-4 bg-primary flex items-center cursor-pointer group relative">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All categories</span>

                    <div
                        class="absolute left-0 top-full w-full bg-white shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300 divide-dashed">
                        <?php
$category_list = load_category();
foreach ($category_list as $category) {
    extract($category);
    echo '
                            <!-- single category -->
                            <a href="index.php?act=shop&id_cate=' . $id_cate . '" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                                <!--<img src="images/icons/bed.svg" class="w-5 h-5 object-contain">--!>
                                <span class="ml-6 text-gray-600 text-sm">' . $name_cate . '</span>
                            </a>
                            <!-- single category end -->
                            ';
}
?>
                    </div>
                </div>
                <!-- all category end -->

                <!-- nav menu -->
                <div class="flex items-center justify-between flex-grow pl-12">
                    <div class="flex items-center space-x-6 text-base capitalize">
                        <a href="index.php"
                            class="text-gray-200 hover:text-white transition">Home</a>
                        <a href="index.php?act=shop"
                            class="text-gray-200 hover:text-white transition">Shop</a>
                        <a href="index.php?act=aboutus"
                            class="text-gray-200 hover:text-white transition">About us</a>
                        <a href="index.php?act=contact"
                            class="text-gray-200 hover:text-white transition">Contact us</a>
                        <a href="index.php?act=news"
                            class="text-gray-200 hover:text-white transition">News</a>
                    </div>
                    <a href="index.php?act=login"
                        class="ml-auto justify-self-end text-gray-200 hover:text-white transition">
                        Login/Register
                    </a>
                </div>
                <!-- nav menu end -->

            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- mobile menubar -->
    <div
        class="fixed w-full border-t border-gray-200 shadow-sm bg-white py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40">
        <a href="javascript:void(0)"
            class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl" id="menuBar">
                <i class="fas fa-bars"></i>
            </div>
            <div class="text-xs leading-3">Menu</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-list-ul"></i>
            </div>
            <div class="text-xs leading-3">Category</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-search"></i>
            </div>
            <div class="text-xs leading-3">Search</div>
        </a>
        <a href="index.php?act=cart"
            class="text-center text-gray-700 hover:text-primary transition relative">
            <span
                class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
            <div class="text-2xl">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="text-xs leading-3">Cart</div>
        </a>
    </div>
    <!-- mobile menu end -->

    <!-- mobile sidebar menu -->
    <div class="fixed left-0 top-0 w-full h-full z-50 bg-black bg-opacity-30 shadow hidden"
        id="mobileMenu">
        <div class="absolute left-0 top-0 w-72 h-full z-50 bg-white shadow">
            <div id="closeMenu"
                class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer">
                <i class="fas fa-times"></i>
            </div>
            <!-- navlink -->
            <h3 class="text-xl font-semibold text-gray-700 mb-1 font-roboto pl-4 pt-4">Menu</h3>
            <div class="">
                <a href="index.html"
                    class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Home
                </a>
                <a href="shop.html"
                    class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Shop
                </a>
                <a href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    About Us
                </a>
                <roa href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Contact Us
                </roa>
            </div>
            <!-- navlinks end -->
        </div>
    </div>
    <!-- mobile sidebar menu end -->
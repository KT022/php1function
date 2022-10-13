<!-- form wrapper -->
<div class="container py-16">
    <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
        <h2 class="text-2xl uppercase font-medium mb-1">
            create an acocunt
        </h2>
        <p class="text-gray-600 mb-6 text-sm">
            Register here if you don't have account
        </p>
        <form action="index.php?act=register" method="post">
            <div class="space-y-4">
                <div>
                    <label class="text-gray-600 mb-2 block">
                        Full Name <span class="text-primary">*</span>
                    </label>
                    <input type="text" class="input-box" placeholder="John Doe" name="name_user">
                </div>
                <div>
                    <label class="text-gray-600 mb-2 block">
                        Email 
                    </label>
                    <input type="email" class="input-box" placeholder="example@mail.com"
                        name="email">
                </div>
                <div>
                    <label class="text-gray-600 mb-2 block">
                        Tel <span class="text-primary">*</span>
                    </label>
                    <input type="text" class="input-box" placeholder="(+1)-123-456-789" name="tel_user">
                </div>
                <div>
                    <label class="text-gray-600 mb-2 block">
                        Address <span class="text-primary">*</span>
                    </label>
                    <input type="text" class="input-box" placeholder="13 Grove Street, Apartment #20, New York, USA" name="address">
                </div>
                <div>
                    <label class="text-gray-600 mb-2 block">Password <span
                            class="text-primary">*</span></label>
                    <input type="password" class="input-box" placeholder="type password"
                        name="pass_user">
                </div>
                <div>
                    <label class="text-gray-600 mb-2 block">Confirm Password
                        <span class="text-primary">*</span>
                    </label>
                    <input type="password" class="input-box" placeholder="confirm your password"
                        name="pass_cf">
                </div>
            </div>
            <div class="flex items-center mt-6">
                <input type="checkbox" id="agreement"
                    class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">
                    I have read and agree to the
                    <a href="#" class="text-primary">terms & conditions</a>
                </label>
            </div>
            <div class="mt-4">
                <input type="submit" name="register" value="create account"
                    class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                
                </input>
                <div class="mt-4">
                    <button type="reset"
                        class="block w-full py-2 text-center text-primary bg-white border border-primary rounded hover:bg-primary hover:text-white transition uppercase font-roboto font-medium">
                        reset
                    </button>
                </div>
                <?php
if (isset($notification) && ($notification != '')) {
    echo $notification;
}
?>
            </div>
        </form>
        <!-- login with social -->
        <div class="mt-6 flex justify-center relative">
            <div class="absolute left-0 top-3 w-full border-b-2 border-gray-200"></div>
            <div class="text-gray-600 uppercase px-3 bg-white relative z-10">
                OR SINGUP IN WITH
            </div>
        </div>
        <div class="mt-4 flex gap-4">
            <a href="#"
                class="block w-1/2 py-2 text-center text-white bg-blue-800 rounded uppercase font-roboto font-medium text-sm">
                Facebook
            </a>
            <a href="#"
                class="block w-1/2 py-2 text-center text-white bg-yellow-600 rounded uppercase font-roboto font-medium text-sm">
                Google
            </a>
        </div>
        <!-- login with social end -->
        <p class="mt-4 text-gray-600 text-center">
            Already have an account? <a href="index.php?act=login" class="text-primary">Login Now</a>
        </p>
    </div>
</div>
<!-- form wrapper end -->
  <!-- banner -->
  <div class="bg-cover bg-no-repeat bg-center py-36 relative" style="background-image: url('./view/dist/images/ccss-bg.png')">
      <div class="container">
          <!-- banner content -->
          <h1 class="xl:text-6xl md:text-5xl text-4xl text-gray-800 font-medium mb-4">
              Bring Jesus Into <br class="hidden sm:block"> Your Family
          </h1>
          <p class="text-base text-gray-600 leading-6">
              Trust in the Lord with all your heart and lean not on your own understanding;
              <br class="hidden sm:block">
              in all your ways submit to him, and he will make your paths straight. (PROVERBS 3:5-6) 
          </p>
          <!-- banner button -->
          <div class="mt-12">
              <a href="shop.html" class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md uppercase hover:bg-transparent
               hover:text-primary transition">
                  Shop now
              </a>
          </div>
          <!-- banner button end -->
          <!-- banner content end -->
      </div>
  </div>
  <!-- banner end -->

  <!-- features -->
  <div class="container py-16">
      <div class="lg:w-10/12 grid md:grid-cols-3 gap-3 lg:gap-6 mx-auto justify-center">

          <!-- single feature -->
          <div class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
              <img src="./view/dist/images/icons/delivery-van.svg" class="lg:w-12 w-10 h-12 object-contain">
              <div>
                  <h4 class="font-medium capitalize text-lg">free shipping</h4>
                  <p class="text-gray-500 text-xs lg:text-sm">Order over $250</p>
              </div>
          </div>
          <!-- single feature end -->
          <!-- single feature -->
          <div class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
              <img src="./view/dist/images/icons/money-back.svg" class="lg:w-12 w-10 h-12 object-contain">
              <div>
                  <h4 class="font-medium capitalize text-lg">Money returns</h4>
                  <p class="text-gray-500 text-xs lg:text-sm">30 Days money return</p>
              </div>
          </div>
          <!-- single feature end -->
          <!-- single feature -->
          <div class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
              <img src="./view/dist/images/icons/service-hours.svg" class="lg:w-12 w-10 h-12 object-contain">
              <div>
                  <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                  <p class="text-gray-500 text-xs lg:text-sm">Customer support</p>
              </div>
          </div>
          <!-- single feature end -->

      </div>
  </div>
  <!-- features end -->

  <!-- categories -->
  <div class="container pb-16">
      <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">shop by category</h2>
      <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-3">
          <!-- single category -->
          <div class="relative group rounded-sm overflow-hidden">
              <img src="./upload/cross3.jpg" class="w-full max-h-60">
              <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                   Crosses
              </a>
          </div>
          <!-- single category end -->
          <!-- single category -->
          <div class="relative group rounded-sm overflow-hidden">
              <img src="./upload/rosary1.webp" class="w-full max-h-60">
              <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                  Rosaries
              </a>
          </div>
          <!-- single category end -->
          <!-- single category -->
          <div class="relative group rounded-sm overflow-hidden">
              <img src="./upload/book1.webp" class="w-full max-h-60">
              <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                  Books
              </a>
          </div>
          <!-- single category end -->
          <!-- single category -->
          <div class="relative group rounded-sm overflow-hidden">
              <img src="./upload/print1.webp" class="w-full max-h-60">
              <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                    font-roboto font-medium tracking-wide transition">
                  Art Prints
              </a>
          </div>
          <!-- single category end -->
      </div>
  </div>
  <!-- categories end -->

  <!-- top new arrival -->
  <div class="container pb-16">
      <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">top new arrival</h2>
      <!-- product wrapper -->
      <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
          <!-- single product -->
          <?php
            foreach ($product_new_list as $product_new) {
                extract($product_new);
                if(strlen($name_pro) > 20){
                    $name_pro_short = substr($name_pro, 0, 18) . '...';
                }
                $pr1 = ($price_sale != '') ? $price_sale : $price;
                $pr2 = ($price_sale != '') ? $price : '';
                $dls = ($pr2 != "") ? '$' : '';
                echo
                '<div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="' . $img_path .$img_pro . '" class="w-full max-h-64">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="index.php?act=product_dt&id_pro='. $id_pro .'"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="index.php?act=product_dt&id_pro='. $id_pro .'"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="index.php?act=product_dt&id_pro='.$id_pro.'">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                ' . $name_pro_short . '
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">$' . $pr1 . '</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">'. $dls .$pr2 .'</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->';
            }
            ?>
      </div>
      <!-- product wrapper end -->
  </div>
  <!-- top new arrival end -->

  <!-- ad section -->
  <div class="container pb-16">
      <a href="#">
          <img src="./view/dist/images/offer1.png" class="w-full">
      </a>
  </div>
  <!-- ad section end -->

  <!-- best seller -->
  <div class="container pb-16">
      <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">best seller</h2>
      <!-- product wrapper -->
      <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
        <?php
        foreach($product_best_list as $best_product){
            extract($best_product);
            if(strlen($name_pro) > 20){
                $name_pro_short = substr($name_pro, 0, 18) . '...';
            }
            $pr1 = ($price_sale != '') ? $price_sale : $price;
            $pr2 = ($price_sale != '') ? $price : '';
            $dls = ($pr2 != "") ? '$' : '';
            echo '
            <!-- single product -->
            <div class="group rounded bg-white shadow overflow-hidden">
                <!-- product image -->
                <div class="relative">
                    <img src="'.$img_path.$img_pro.'" class="w-full max-h-60">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="index.php?act=product_dt&id_pro='.$id_pro.'" class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end -->
                <!-- product content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="index.php?act=product_dt&id_pro='.$id_pro.'">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                            '.$name_pro_short.'
                        </h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-roboto font-semibold">$'.$pr1.'</p>
                        <p class="text-sm text-gray-400 font-roboto line-through">'.$dls.$pr2.'</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <!-- product content end -->
                <!-- product button -->
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                    Add to Cart
                </a>
                <!-- product button end -->
            </div>
            <!-- single product end -->  
            ';
        }
        ?>
      </div>
      <!-- product wrapper end -->
  </div>
  <!-- recomended for you end -->
<div class="add-category">
    <p class="add-category-text">Add new product</p>
    <form action="index.php?act=addproducts" method="post" enctype="multipart/form-data">
        <div class="id-category">
            <label style="display: none;">id product<br>
                <input type="hidden" class="category-id-input" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>" disabled>
            </label>
        </div>
        <div class="name-category">
            <label>name product<br>
                <input type="text" name="product_name" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>">
            </label>
        </div>
        <div class="name-category">
            <label>image product<br>
                <input type="file" name="img_pro" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>">
            </label>
        </div>
        <div class="name-category">
            <label>price<br>
                <input type="text" name="price" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>">
            </label>
        </div>
        <div class="name-category">
            <label>price sale<br>
                <input type="text" name="price_sale" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>">
            </label>
        </div>
        <div class="name-category">
            <label>product detail<br>
                <textarea type="text" name="detail" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>"></textarea>
            </label>
        </div>
        <div class="name-category">
            <label>category<br>
                <select name="id_cate" class="category-name-input">
                    <?php
                    foreach ($category_list as $category) {
                        extract($category);
                        echo '<option value="' . $id_cate . '">'. $name_cate .'</option>';
                    }
                    ?>
                </select>
            </label>
        </div>
        <div class="name-category">
            <label>situation<br>
                <select name="situation" class="category-name-input">
                    <?php
                    $situation_list = array('new', 'best', 'sale');
                    foreach ($situation_list as $situation) {
                        echo '<option>'. $situation .'</option>';
                    }
                    ?>
                </select>
            </label>
        </div>


        <div class="admin-3btn">
            <input type="hidden" class="category-id-input" name="id_cate" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>">
            <input type="submit" class="admin-btn" name="add_product" value="Add new product"></input>
            <input type="reset" class="admin-btn" value='Reset'></input>
            <a href='index.php?act=listproducts'>
                <input class="admin-btn" value="Products List" type="button"></input>
            </a>
        </div>
        <?php
        if (isset($notification) && ($notification != "")) echo $notification;
        ?>
    </form>
</div>
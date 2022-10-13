<?php
if (is_array($product)) {
    extract($product);
    $id_cate_pro = $id_cate;
}

$img_file = '../upload/' . $img_pro;
if(is_file($img_file)){
    $img = '<img src="'. $img_file.'" height="50">';
}else{
    $img = '<img src="'. $img_pro.'" height="50">';
}
?>
<div class="add-category">
    <p class="add-category-text">Update product</p>
    <form action="index.php?act=editproduct" method="post">
        
        <div class="name-category">
            <label>name product<br>
                <input type="text" name="product_name" class="category-name-input" value="<?php if (isset($name_pro) && $name_pro != "") echo $name_pro ?>">
            </label>
        </div>
        <div class="name-category">
            <label>image product<br>
                <input type="file" name="img_pro" class="category-name-input" >
                <?php if (isset($img) && $img != "") echo $img; else echo'no img';?>
            </label>
        </div>
        <div class="name-category">
            <label>price<br>
                <input type="text" name="price" class="category-name-input" value="<?php if (isset($price) && $price != "") echo $price ?>">
            </label>
        </div>
        <div class="name-category">
            <label>price sale<br>
                <input type="text" name="price_sale" class="category-name-input" value="<?php if (isset($price_sale) && $price_sale != "") echo $price_sale ?>">
            </label>
        </div>
        <div class="name-category">
            <label>product detail<br>
                <textarea name="detail" class="category-name-input" style="min-height: 6em;">
                    <?php if (isset($detail) && $detail != "") echo $detail ?>
                </textarea>
            </label>
        </div>

        <div class="name-category">
            <label>category<br>
                <select name="id_cate" class="category-name-input">
                    <?php
                    foreach ($category_list as $category) {
                        extract($category);
                        if($id_cate == $id_cate_pro)   $s = 'selected'; else $s = '';
                        echo '<option value="' . $id_cate . '" '. $s .'>'. $name_cate .'</option>';
                    }
                    ?>
                </select>
            </label>
        </div>
        <div class="name-category">
            <label>situation<br>
                <select name="situation" class="category-name-input">
                    <option value="<?=$situation?>" selected><?=$situation?></option>
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
            <input type="hidden" class="category-id-input" name="id_pro" value="<?php if (isset($id_pro) && ($id_pro > 0)) echo $id_pro ?>">
            <input type="submit" class="admin-btn" name="editproduct" value="Update"></input>
            <input type="reset" class="admin-btn" value='Reset'></input>
            <a href='index.php?act=listproducts'>
                <input class="admin-btn" value="Products List" type="button"></input>
            </a>
        </div>
    </form>
</div>
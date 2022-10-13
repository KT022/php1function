<?php
if (is_array($category)) {
    extract($category);
}
?>
<div class="add-category">
    <p class="add-category-text">Update category</p>
    <form action="index.php?act=editcategory" method="post">
        <div class="id-category">
            <label>id category<br>
                <input type="text" class="category-id-input" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>" disabled>
            </label>
        </div>
        <div class="name-category">
            <label>name category<br>
                <input type="text" name="name_cate" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>">
            </label>
        </div>
        <div class="admin-3btn">
            <input type="hidden" class="category-id-input" name="id_cate" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>">
            <input type="submit" class="admin-btn" name="editcategory" value="Update"></input>
            <input type="reset" class="admin-btn" value='Reset'></input>
            <a href='index.php?act=list_category'>
                <input class="admin-btn" value="Category List" type="button"></input>
            </a>
        </div>
    </form>
</div>
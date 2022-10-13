<div class="add-category">
    <p class="add-category-text">Add new category</p>
    <form action="index.php?act=addcategory" method="post">
        <div class="id-category">
            <label>id category<br>
                <input type="text" class="category-id-input" disabled>
            </label>
        </div>
        <div class="name-category">
            <label>name category<br>
                <input type="text" name="category_name" class="category-name-input">
            </label>
        </div>
        <div class="admin-3btn">
            <input type="submit" class="admin-btn" name="add_category" value="Add"></input>
            <input type="reset" class="admin-btn" value='Reset'></input>
            <a href='index.php?act=list_category'>
                <input class="admin-btn" value="Category List" type="button"></input>
            </a>
        </div>
        <?php
        if (isset($notification) && ($notification != "")) echo $notification;
        ?>
    </form>
</div>
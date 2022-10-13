<?php

function insert_category($category_name)
{
    $sql = "INSERT INTO category(name_cate) VALUES('$category_name')";
    pdo_execute($sql);
}

function delete_category($id_cate)
{
    $sql = 'DELETE FROM assignment1.category WHERE id_cate =' . $id_cate;
    pdo_execute($sql);
}

function load_category()
{
    $sql = "SELECT * FROM assignment1.category ORDER BY id_cate DESC";
    return pdo_query($sql);
}

function loadone_category($id_cate)
{
    $sql = "SELECT * FROM assignment1.category WHERE id_cate =" . $id_cate;
    return pdo_query_one($sql);
}

function update_category($name_cate, $id_cate)
{
    $sql = "UPDATE assignment1.category SET name_cate ='" . $name_cate . "' WHERE id_cate =" . $id_cate;
    pdo_execute($sql);
}

function get_name_cate($id_cate){
    $sql = "SELECT name_cate FROM assignment1.category WHERE id_cate =" . $id_cate;
    // echo $sql;
    return pdo_query($sql);
}
?>

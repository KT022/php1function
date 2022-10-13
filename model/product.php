<?php

function insert_product($products_name, $img_pro, $price, $price_sale, $detail, $id_cate, $situation)
{
    $sql = "INSERT INTO products VALUES(null,'$products_name','$img_pro', '$price', '$price_sale', '$detail', '$id_cate', '$situation')";
    // echo $sql;
    pdo_execute($sql);
}

function delete_product($id_pro)
{
    $sql = 'DELETE FROM assignment1.products WHERE id_pro =' . $id_pro;
    // echo $sql;
    pdo_execute($sql);
}

function load_product($keyword, $id_cate)
{
    $sql = "SELECT * FROM assignment1.products WHERE 1 ";
    if ($id_cate > 0) {
        // echo $id_cate;
        $sql .= " AND id_cate LIKE '" . $id_cate . "'";
    // ini_set('display_errors', 1);
    }
    if ($keyword != "") {
        // echo $keyword . 'hello';
        $sql .= " AND name_pro LIKE '%" . $keyword . "%'";
    // ini_set('display_errors', 1);
    }


    $sql .= " ORDER BY id_pro DESC";
    // echo $sql;
    return pdo_query($sql);
}

function loadone_product($id_pro)
{
    $sql = "SELECT * FROM assignment1.products WHERE id_pro =" . $id_pro;
    return pdo_query_one($sql);
}

function update_product($id_pro, $product_name, $img_pro, $price, $price_sale, $detail, $id_cate, $situation)
{
    if ($img_pro != "") {
        $sql = "UPDATE assignment1.products SET name_pro ='" . $product_name . "', img_pro='" . $img_pro . "' , price ='" . $price . "' ,price_sale='" . $price_sale . "', detail='" . $detail . "' ,id_cate='" . $id_cate . "',situation = '" . $situation . "' WHERE id_pro =" . $id_pro;
        // echo $sql;


    }
    else {
        $sql = "UPDATE assignment1.products SET name_pro ='" . $product_name . "' , price ='" . $price . "' ,price_sale='" . $price_sale . "', detail='" . $detail . "' ,id_cate='" . $id_cate . "' ,situation = '" . $situation . "' WHERE id_pro =" . $id_pro;
        // echo $sql;

    }
    // ini_set('display_errors', '1');
    pdo_execute($sql);
}

function load_product_new()
{
    $sql = "SELECT * FROM assignment1.products WHERE 1 AND situation LIKE 'new' ORDER BY id_pro DESC";
    // echo $sql;
    return pdo_query($sql);
}

function load_product_samecate($id_pro, $id_cate)
{
    $sql = "SELECT * FROM assignment1.products WHERE id_pro <> " . $id_pro . " AND id_cate = " . $id_cate . "";
    // echo $sql;
    return pdo_query($sql);
}

function load_product_best(){
    $sql = "SELECT * FROM assignment1.products WHERE 1 AND situation LIKE 'best' ORDER BY id_pro DESC";
    // echo $sql;
    return pdo_query($sql);
}

// function load_product_all(){
//     $sql = "SELECT * FROM assignment1.products ORDER BY id_pro DESC";
//     // echo $sql;
//     return pdo_query($sql);
// }

function count_pro_by_cate($id_cate){
    $sql = "SELECT COUNT(*) FROM assignment1.products WHERE id_cate = ".$id_cate;
    return pdo_query($sql);
}
?>
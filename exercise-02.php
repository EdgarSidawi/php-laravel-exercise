<?php
require_once "db.php";

function execute_and_fetch($query)
{
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    return json_encode($result, JSON_PRETTY_PRINT, 30);
}

function execute_and_fetchAll($query)
{
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    return json_encode($result, JSON_PRETTY_PRINT, 30);
}

function get_order($id)
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM `order` WHERE id = ?");
    $orders_query->bindParam(1, $id);

    return execute_and_fetch($orders_query);
}

function get_orders()
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM `order`");

    return execute_and_fetchAll($orders_query);
}

function get_order_with_details($id)
{
    global $db;
    $orders_query = $db->prepare("  SELECT * 
                                    FROM `order` AS o 
                                    INNER JOIN `orderDetail` AS d
                                    ON o.id = d.OrderId
                                    WHERE o.id = ? 
                                ");
    $orders_query->bindParam(1, $id);

    return execute_and_fetchAll($orders_query);
}
echo "<pre>";
echo get_order(10248);
echo "</pre>";

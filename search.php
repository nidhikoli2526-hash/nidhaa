<?php

$items = array("Apple", "Banana", "Orange", "Mango", "Grapes", "Pineapple", "Strawberry");

if (isset($_POST['search'])) {

    $search = $_POST['search'];

    foreach ($items as $item) {
        if (stripos($item, $search) !== false) {
            echo "<div class='item'>$item</div>";
        }
    }
}
?>

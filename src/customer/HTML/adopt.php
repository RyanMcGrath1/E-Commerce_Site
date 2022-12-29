<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoption</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/shop.css">

    <script src="../JavaScript/store.js" async></script>
</head>
<body>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<div id="nav-placeholder"></div>
<script>
    $(function () {
        $("#nav-placeholder").load("./navigationbar.html");
    });
</script>

<section class="container content-section">
    <h2 class="section-header">Birds Ready For Adoption</h2>
    <div class="shop-items">
        <div class="shop-item thumbnail">
            <span class="shop-item-title">Zazu</span>
            <img class="shop-item-image" src="../Images/Birds/bird1.jpg" style="height: 200px; width: 185px">
            <div class="shop-item-details">
                <span class="shop-item-price">$100</span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART
                </button>
            </div>
        </div>
        <div class="shop-item thumbnail">
            <span class="shop-item-title">Bella</span>
            <img class="shop-item-image" src="../Images/Birds/bird2.jpg" style="height: 200px; width: 185px">
            <div class="shop-item-details">
                <span class="shop-item-price">$100</span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>
        <div class="shop-item thumbnail">
            <span class="shop-item-title">Zippy</span>
            <img class="shop-item-image" src="../Images/Birds/bird3.jpg" style="height: 200px; width: 185px">
            <div class="shop-item-details">
                <span class="shop-item-price">$150</span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>
        <div class="shop-item thumbnail">
            <span class="shop-item-title">Daffy</span>
            <img class="shop-item-image" src="../Images/Birds/bird4.jpg" style="height: 200px; width: 185px">
            <div class="shop-item-details">
                <span class="shop-item-price">$150</span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>
        <div class="shop-item thumbnail">
            <span class="shop-item-title">Angel</span>
            <img class="shop-item-image" src="../Images/Birds/bird5.jpg" style="height: 200px; width: 185px">
            <div class="shop-item-details">
                <span class="shop-item-price">$125</span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>
        <div class="shop-item thumbnail">
            <span class="shop-item-title">Daisey</span>
            <img class="shop-item-image" src="../Images/Birds/bird6.jpg" style="height: 200px; width: 185px">
            <div class="shop-item-details">
                <span class="shop-item-price">$125</span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>
        <div class="shop-item thumbnail">
            <span class="shop-item-title">Charlie</span>
            <img class="shop-item-image" src="../Images/Birds/bird7.jpg" style="height: 200px; width: 185px">
            <div class="shop-item-details">
                <span class="shop-item-price">$125</span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>
    </div>
</section>
<h1 style="padding-top: 140px"></h1>
<section class="container content-section">
    <h2 class="section-header">CART</h2>
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
    </div>
    <div class="cart-items">
    </div>
    <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price"></span>
    </div>
        <button class="btn btn-primary btn-purchase" type="submit" name="btn">PURCHASE</button>
</section>

<script>

    function bird() {

        var mysql = require('mysql');
        var con = mysql.createConnection({
            host: "localhost",
            user: "mcgratr1",
            password: "Thompson16!",
            database: "mcgratr1_Test"
        });


        con.connect(function(err) {
            if (err) throw err;

            var len = document.getElementsByClassName('cart-row').length - 1
            var cartItems = document.getElementsByClassName('cart-items')[0]

            for (let i = 0; i < len; i++) {
                var name = cartItems.getElementsByClassName('cart-item-title')[i].innerText
                var sqlParams = [name];
                var sql = "UPDATE birds SET quantity = 0 WHERE name = ?";

                db.query(sql, sqlParams, function (err, result) {
                    if (err) throw err;
                    console.log(result.affectedRows + " record(s) updated");
                });
            }
        });
    }

</script>


</body>
</html>

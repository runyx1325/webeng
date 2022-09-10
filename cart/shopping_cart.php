<?php
require("../database.php");

$sql = "SELECT * FROM shopping_cart WHERE  userid = '" . $_COOKIE['login']. "'";
$res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
$dbdata = mysqli_fetch_assoc($res);

if(isset($dbdata['userid'])) {

    $sql = "SELECT * FROM shopping_cart WHERE userid = '" . $_COOKIE['login']. "' AND article_id = 1";
    $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
    $dbdata = mysqli_fetch_assoc($res);
    $sum=0;
    if(isset($dbdata['article_id'])){
        $amount = $dbdata['amount'];
        $article_id = $dbdata['article_id'];
        $sql = "SELECT * FROM article WHERE id = 1";
        $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
        $dbdata = mysqli_fetch_assoc($res);
        $sum = $dbdata['price'] * $amount;

    ?>
<div class="d-flex flex-col border-bottom border-5" style="padding: 1rem 0rem; margin: 0rem 3rem">
    <div class='col-2 d-flex align-items-center justify-content-center' style="">
        <h1><?php echo $article_id; ?></h1>
    </div>
    <div class="col-1" style="">
        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100px">
            <img src="<?php echo $dbdata['image']; ?>" style="height: 100px; width: 100px" alt="Klee">
        </div>
    </div>
    <div class="col-6 d-flex flex-column align-items-center justify-content-center" style="">
        <h1><?php echo $dbdata['name']; ?></h1>
    </div>
    <div class="col-1 d-flex flex-column align-items-center justify-content-center" style="">
        <h1><?php echo $amount; ?></h1>
    </div>
    <div class='col-2 d-flex flex-column align-items-center justify-content-center'>
        <h1>$<?php echo $dbdata['price']; ?></h1>
    </div>
</div>
    <?php
    }

    $sql = "SELECT * FROM shopping_cart WHERE userid = '" . $_COOKIE['login']. "' AND article_id = 2";
    $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
    $dbdata = mysqli_fetch_assoc($res);
    if(isset($dbdata['article_id'])){
        $amount = $dbdata['amount'];
        $article_id = $dbdata['article_id'];

        $sql = "SELECT * FROM article WHERE id = 2";
        $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
        $dbdata = mysqli_fetch_assoc($res);
        $sum = $sum + $dbdata['price'] * $amount;

    ?>
    <div class="d-flex flex-col border-bottom border-5" style="padding: 1rem 0rem; margin: 0rem 3rem">
        <div class='col-2 d-flex align-items-center justify-content-center' style="">
            <h1><?php echo $article_id; ?></h1>
        </div>
        <div class="col-1" style="">
            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100px">
                <img src="<?php echo $dbdata['image']; ?>" style="height: 100px; width: 100px" alt="Klee">
            </div>
        </div>
        <div class="col-6 d-flex flex-column align-items-center justify-content-center" style="">
            <h1><?php echo $dbdata['name']; ?></h1>
        </div>
        <div class="col-1 d-flex flex-column align-items-center justify-content-center" style="">
            <h1><?php echo $amount; ?></h1>
        </div>
        <div class='col-2 d-flex flex-column align-items-center justify-content-center'>
            <h1>$<?php echo $dbdata['price']; ?></h1>
        </div>
    </div>
    <?php
    }
    $sql = "SELECT * FROM shopping_cart WHERE userid = '" . $_COOKIE['login']. "' AND article_id = 3";
    $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
    $dbdata = mysqli_fetch_assoc($res);
    if(isset($dbdata['article_id'])){
        $amount = $dbdata['amount'];
        $article_id = $dbdata['article_id'];

        $sql = "SELECT * FROM article WHERE id = 3";
        $res = mysqli_query($my_db, $sql) or die (mysqli_error($my_db));
        $dbdata = mysqli_fetch_assoc($res);
        $sum = $sum + $dbdata['price'] * $amount;
    ?>
    <div class="d-flex flex-col border-bottom border-5" style="padding: 1rem 0rem; margin: 0rem 3rem">
        <div class='col-2 d-flex align-items-center justify-content-center' style="">
            <h1><?php echo $article_id; ?></h1>
        </div>
        <div class="col-1" style="">
            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100px">
                <img src="<?php echo $dbdata['image']; ?>" style="height: 100px; width: 100px" alt="Klee">
            </div>
        </div>
        <div class="col-6 d-flex flex-column align-items-center justify-content-center" style="">
            <h1><?php echo $dbdata['name']; ?></h1>
        </div>
        <div class="col-1 d-flex flex-column align-items-center justify-content-center" style="">
            <h1><?php echo $amount; ?></h1>
        </div>
        <div class='col-2 d-flex flex-column align-items-center justify-content-center'>
            <h1>$<?php echo $dbdata['price']; ?></h1>
        </div>
    </div>
        <?php
            }
        ?>
    <div class="d-flex flex-col  border-5" style="margin-left: 3rem; margin-right:3rem">
        <div class='col-2 d-flex align-items-center justify-content-center' style="">
            <h1><b>Total</b></h1>
        </div>
        <div class="col-1" style="">
            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100px">

            </div>
        </div>
        <div class="col-6 d-flex flex-column align-items-center justify-content-center" style="">

        </div>
        <div class="col-1 d-flex flex-column align-items-center justify-content-center" style="">

        </div>
        <div class='col-2 d-flex flex-column align-items-center justify-content-center'>
            <h1>$<?php echo $sum; ?></h1>
        </div>
    </div>

    <div class="d-flex flex-col border-3" style="margin-left: 3rem; margin-right:3rem">
        <div class='col-2 d-flex align-items-center justify-content-center'>

        </div>
        <div class="col-1 d-flex flex-column align-items-center justify-content-center">

        </div>
        <div class="col-6 d-flex flex-column align-items-center justify-content-center">

        </div>
        <div class="col-1 d-flex flex-column align-items-center justify-content-center">
            <button class="clickme btn btn-secondary col-10" style="height: 3rem" onclick=deleteCart()> Remove items </button>
        </div>
        <div class="col-2 d-flex flex-column align-items-center justify-content-center">
            <button class="clickme btn btn-primary col-10" style="height: 3rem" onclick=pay()> Pay </button>
        </div>
    </div>
<?php
}else{
    ?>
    <div class="d-flex flex-col  border-5" style="margin-left: 3rem; margin-right:3rem">
        <div class='col-2 d-flex align-items-center justify-content-center' style="">

        </div>
        <div class="col-1" style="">
            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100px">

            </div>
        </div>
        <div class="col-6 d-flex flex-column align-items-center justify-content-center" style="">
            <h1>Your shopping cart is empty.</h1>
        </div>
        <div class="col-1 d-flex flex-column align-items-center justify-content-center" style="">
        </div>
        <div class='col-2 d-flex flex-column align-items-center justify-content-center'>
        </div>
    </div>
    <?php
}

<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <p>Please, select a product & customer to know the price.</p>
</section>

<form method="post">
    <fieldset>
        <legend>Look-up</legend>
        <!-- 1 --drop-down with customer-name-->
        <label for="customers">Choose a customer:</label>
        <select name='customerId'>
            <option selected="selected">Choose one</option>
            <?php foreach($customers as $customer): ?>
                    <option><?= $customer->getFirstName(); ?></option>
            <?php endforeach; ?>
        </select>

        <!-- drop-down with product-name-->
        <label for="product">Choose a product:</label> <!--//samesame
        <select name="product" id="product"><!-select is used to create a drop-down list-->
<!--            --><?php //foreach ($products as $product) {
//                echo "<option>$product<option>";
//            } ?>
<!--        </select>-->


    </fieldset>

    <button type="submit" name="submit" autofocus><span style="cursor: pointer">SUBMIT</span></button>
</form>
<?php echo "<p>$selected</p>" ?>

<fieldset>
    <legend>Result</legend>
   <p>
       <?php print_r($pricePiece)?>

   </p>
</fieldset>


<?php require 'includes/footer.php' ?>






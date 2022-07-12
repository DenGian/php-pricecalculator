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
        <select name='customerName'>
            <?php foreach ($customers as $customer): ?><!-- google : php foreach html element -->
            <option value ="<?= $customer->getId()?>"><?= $customer->getLastName() . "-" . $customer->getFirstName(); ?></option>
            <?php endforeach; ?>
        </select>

        <!-- 2 --drop-down with product-name-->
        <select name="productName">
            <?php foreach ($products as $product): ?>
                <option><?= $product->getProductName(); ?></option>
            <?php endforeach; ?>
        </select>
    </fieldset>
    <button type="submit" name="submit" autofocus><span style="cursor: pointer">SUBMIT</span></button>
</form>

<fieldset>
    <legend>Result</legend>
    <p>

    </p>
</fieldset>


<?php require 'includes/footer.php' ?>






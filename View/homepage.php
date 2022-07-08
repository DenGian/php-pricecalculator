<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<!--<section>
    <h4>Hello <?php /*echo $user->getName()*/ ?>,</h4>

    <p><a href="index.php?page=info">To info page</a></p>

    <p>Put your content here.</p>
</section>-->
<form method = "post"> <!-- ADDED WEEKEND -->
<fieldset>
    <label for="product">Choose a product:</label>
    <select name="product" id="product"><!--select is used to create a drop-down list-->
        <?php foreach ($products as $product) {
            echo "<option>$product<option>";
        } ?>
    </select>

    <label for="customers">Choose a customer:</label>
    <select name="customers" id="customers">
        <?php foreach ($customers as $key => $customer) {//loop through the customers array.
            echo "<option>$key - $customer<option>"; //display lastname - Firstname in drop-down-list.
        } ?>
    </select>
</fieldset>
    <button type="submit"  name="submit" autofocus><span style="cursor: pointer">SUBMIT</span></button><!-- ADDED WEEKEND -->
</form><!-- ADDED WEEKEND -->
<?php require 'includes/footer.php'?>






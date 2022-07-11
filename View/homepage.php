<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <p>Please, select a product & customer to know the price.</p> <!-- ADDED WEEKEND -->
</section>

<form method="post"> <!-- ADDED WEEKEND -->
    <fieldset>
        <legend>Look-up</legend> <!-- ADDED WEEKEND -->

        <label for="customers">Choose a customer:</label>
        <select name="customers" id="customers"> <!--//customers as customer, customer->getName() HINT id doorsturen ipv naam
            <?php foreach ($customers as $key => $customer) {//loop through the customers array.
                echo "<option>$key - $customer<option>"; //display lastname - Firstname in drop-down-list.
            } ?>
        </select>

        <label for="product">Choose a product:</label> <!--//samesame
        <select name="product" id="product"><!--select is used to create a drop-down list-->
            <?php foreach ($products as $product) {
                echo "<option>$product<option>";
            } ?>
        </select>

        <label for="pieces">Pieces: </label><!-- ADDED WEEKEND -->
        <select name="pieces" id="pieces"><!-- ADDED WEEKEND -->
            <option>1<option><!-- ADDED WEEKEND -->
            <option>2<option>
            <option>3<option>
            <option>4<option>
            <option>5<option>
            <option>6<option>
            <option>7<option>
            <option>8<option>
            <option>9<option>
            <option>10<option>
            <option>11<option>
            <option>12<option>
            <option>13<option>
            <option>14<option>
            <option>15<option>
        </select><!-- ADDED WEEKEND -->
    </fieldset>

    <button type="submit" name="submit" autofocus><span style="cursor: pointer">SUBMIT</span></button><!-- ADDED WEEKEND -->
</form><!-- ADDED WEEKEND -->
<?php echo "<p>$selected</p>" ?>

<fieldset><!-- ADDED WEEKEND -->
    <legend>Result</legend><!-- ADDED WEEKEND -->
   <p>
       <?php print_r($pricePiece)?>

   </p>
</fieldset><!-- ADDED WEEKEND -->


<?php require 'includes/footer.php' ?>






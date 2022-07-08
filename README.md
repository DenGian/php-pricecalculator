# php-pricecalculator

---
### MaTS
![meme](images/meme.webp)

---
### About

In this assignment we are asked to combine databases with OOP.

---
### Learning objectives

- Apply basic OOP principles
- Learn to use an MVC
- Import data with a database 

---


### Plan of attack

- 1 [x] Create repository
- 2 [x] Create branches
- 3 [x] Create .env-file:
  env file contains the individual user environment variables that override the variables set
  in the /etc/environment file. You can customize your environment variables as desired by
  modifying your . env file.
- 4 [x] Set-up connection PDO:
  PDO will work on 12 different database systems and is object-oriented.  It also supports
  Prepared Statements. Prepared Statements protect from SQL injection, and are very important
  for web application security.  If you have to switch your project to use another database,
  PDO makes the process easy. You only have to change the connection string and a few queries.
  https://udoyhasan.medium.com/what-is-an-env-file-and-how-to-use-an-env-file-in-php-4e146358cca6
- 5 [X] Create MVC-directories:
  - Model
  - View
  - Controller
  
-6 [x] Made model, so we can connect to DB, confirmation message on screen

-7 [x] Products
* Products are shown in drop down menu
````
<label for="product">Choose a product:</label>
<select name="product" id="product"><!--select is used to create a drop-down list-->
   <?php foreach ($products as $product) {
       echo "<option>$product<option>";
} ?>
````
````
$sql = "SELECT name FROM product ORDER BY name";
$connectionProducts = $this->connection->query($sql);
return $connectionProducts->fetchAll(PDO::FETCH_COLUMN);
````

-8 [x] Name
* Names are shown in drop down menu (first and last names)
````
<label for="customers">Choose a customer:</label>
<select name="customers" id="customers">
   <?php foreach ($customers as $key => $customer) {
       echo "<option>$key - $customer<option>"; //display lastname - Firstname in drop-down-list.
} ?>
````
````
$sql = "SELECT lastname, firstname From customer ORDER BY lastname, firstname";
$result = $this->connection->query($sql);
return $result->fetchAll(PDO::FETCH_KEY_PAIR);
````
---
````
$customers = $database->getAllCustomers();
$products = $database->getAllProducts();
````

---
### ToDo's

- For the customer group: In case of variable discounts look for highest discount of all the groups the user has.
- If some groups have fixed discounts, count them all up.
- Look which discount (fixed or variable) will give the customer the most value.
- Now look at the discount of the customer.
- In case both customer and customer group have a percentage, take the largest percentage.
- First subtract fixed amounts, then percentages!
- A price can never be negative.

---
### What is an MVC?

MVC is a classic web design pattern consistent of three levels, and is an extension of the principle of **separation of concerns**:

- The **Controller** responds to user actions and invokes changes on the model or view as appropriate.
- The **Model** represents the information on which the application operates--its business logic.
- The **View** renders the model into a web page suitable for interaction with the user.

For now you should create 3 different directories:
- **Controller/**: has access to GET/POST vars, receives the Request
- **Model/**: Most of your code should be here, for example the Product and Customer class.
- **View/**: Your HTML files.

While splitting up the Controller & Model is quite intuitive, splitting up the View from the Controller might require a larger change in how you write code. Let us look at some example:

````php
<?php
//oldcode.php
if($_GET['age'] > 18) {
    echo '<h1>You are an adult!</h1>';
} else {
    echo '<h1>You are a child!</h1>';
}
````
We can split this up into two files:
````php
<?php
//view.php
$sentence = ($_GET['age'] > 18) ? 'You are an adult!' : 'You are a child!';
require 'view.php';
````

````php
<!-- view.php-->
<h1><?php echo $sentence?></h1>
````

---

<!DOCTYPE html>
<html>

<head>
<title>Book Order</title>
<?php
echo "<h2>Order Summary</h2>";

// tax amount is 7%
define("TAX", 0.07);

// 1. Add 3 properties to the Book class: $title, $author, and $price. 
class Book {
    private $title;
    private $author;
    private $price;
    
    // 2. Fill-in the following constructor method, so that it assigns values to the properties $title, $author, and $price
    function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
    function get_title() {
        return $this->title;
    }
    function get_author() {
        return $this->author;
    }
    function get_price() {
        return $this->price;
    }

    // 3. Create a method called display(), which outputs a line for the current book with title, author, and price
    function display() {
        echo "Book title: " . $this->title . ", author: " . $this->author . ", price: $" . $this->price . "<br>"  ;
    }
}

// 4. Create a function called get_tax() that calculates the tax using the constant TAX defined above. Return the price * tax amount.
function get_tax($price) {
    return round($price * TAX, 2);
}


$book1 = new Book($_POST['book1title'], $_POST['book1author'], $_POST['book1price']);
$book1->display();

// 5. Create a second object called book2. Use the values posted from index.php to assign values to the properties of the book object. Display it.
$book2 = new Book($_POST['book2title'], $_POST['book2author'], $_POST['book2price']);
$book2->display();

// 6. Create variables for $tax, $cost_with_tax. Calculate and display a total cost before tax (both books), tax cost, and total cost with tax.
$tax = get_tax($_POST['book1price']);
$cost_with_tax = $tax + $_POST['book1price'];
echo "<br> Cost before tax: $" . $_POST['book1price'] . ", tax: $" . $tax . ", total with tax: $" . $cost_with_tax;

$tax = get_tax($_POST['book2price']);
$cost_with_tax = $tax + $_POST['book2price'];
echo "<br> Cost before tax: $" . $_POST['book2price'] . ", tax: $" . $tax . ", total with tax: $" . $cost_with_tax;

?>
</head>
<body>
    <br>
    <br>
    <input type=button value="Return to Order Page" onClick="document.location.href='http://localhost/lab/lab8/index.html'">
</body>
</html>
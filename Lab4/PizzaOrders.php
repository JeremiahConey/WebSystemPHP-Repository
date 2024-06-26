<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Size & Toppings</h2>
        
        <form action="order.php" method="post">
            <label>Small:</label>
            <input type="radio" name="pizza" value="small" checked> Small <br>
            <label>Medium:</label>
            <input type="radio" name="pizza" value="medium"> Medium <br> 
            <label>Large:</label>
            <input type="radio" name="pizza" value="large" checked> Large <br>
            <br>
            <label>Pepperoni:</label>
            <input type="checkbox" id="Pepperoni" name="toppings[]" value="Pepperoni"><br>
            <label>Artichoke:</label>
            <input type="checkbox" id="Artichoke" name="toppings[]" value="Artichoke"><br>
            <label>Pineapple:</label>
            <input type="checkbox" id="Pineapple" name="toppings[]" value="Pineapple"><br>
            <label>Meatballs:</label>
            <input type="checkbox" id="Meatballs" name="toppings[]" value="Meatballs"><br>
            <label>Mozzarella:</label>
            <input type="checkbox" id="Mozzarella" name="toppings[]" value="Mozzarella"><br>
            <label>Cheese:</label>
            <input type="checkbox" id="Cheese" name="toppings[]" value="Cheese"><br>
            <label>Bacon:</label>
            <input type="checkbox" id="Bacon" name="toppings[]" value="Bacon"><br>
            <label>Spinach:</label>
            <input type="checkbox" id="Spinach" name="toppings[]" value="Spinach"><br>
            <label>Ham:</label>
            <input type="checkbox" id="Ham" name="toppings[]" value="Ham"><br>
            <input type="submit" value="Submit"/><br>
        </form>
    </body>
</html>

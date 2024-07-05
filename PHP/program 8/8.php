<!DOCTYPE html>
<html>
<body>
    <center>
        <h1>MENU DRIVEN PROGRAM</h1>
    </center>
    <form name="form" method="POST">
        <table>
            <tr><td>Enter your choice</td></tr>
            <tr><td>1: Display the contents using foreach</td></tr>
            <tr><td>2: Display array in sorted order</td></tr>
            <tr><td>3: Display array without duplicate elements</td></tr>
            <tr><td>4: Remove the last element and display</td></tr> 
            <tr><td>5: Display array in reverse order</td></tr>
            <tr><td>Enter the number: <input type="text" name="ch"></td></tr>
            <tr><td><input type="submit" value="submit" name="choice"/></td></tr>
        </table>
    </form>

    <?php
    $stack = array("Alice", "Bob", "Charlie", "David", "Emma", "Frank", "Grace", "Hannah", "Ian", "Jane","Alice");
    
    if(isset($_POST['choice'])) {
        $var = $_POST['ch'];

        switch ($var) {
            case 1:
                foreach($stack as $name) {
                    echo "$name <br>";
                }
                break;
            
            case 2:
                sort($stack);
                foreach($stack as $name) {
                    echo "$name <br>";
                }
                break;

            case 3:
                $result = array_unique($stack);
                print_r($result);
                break;

            case 4:
                array_pop($stack);
                foreach($stack as $name) {
                    echo "$name <br>";
                }
                break;

            case 5:
                $reversed = array_reverse($stack);
                print_r($reversed);
                break;
            
            default:
                echo "Invalid choice. Please enter a number between 1 and 5.";
                break;
        }
    }
    ?>

    <form name="form" method="POST">
        Enter the searched element:
        <input type="text" name="s_element" value="enter searched element"/>
        <input type="submit" value="search" name="search"/>
    </form>

    <?php
    if(isset($_POST['search'])) {
        $searchedElement = $_POST['s_element'];
        $key = array_search($searchedElement, $stack);
        if($key !== false) {
            echo $searchedElement . " is found at position " . $key;
        } else {
            echo $searchedElement . " is not found in the array.";
        }
    }
    ?>
</body>
</html>

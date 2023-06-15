<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInputform = $_POST["userInput"];
}
else{
    $userInputform = "";
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" id="userInput" name="userInput"><br><br>
    <input type="submit" name="submit" value="Submit">  
</form>
<?php
if(isset($userInputform)){
    $userInput = $userInputform;
}
else{
    $userInput = $userInputform;
}
fibo($userInput);

function fibo($userInputx)
{
    if(is_numeric($userInputx))
    {
        if($userInputx <= 20)
        {
            $A = 0;
            $B = 1;
            $C = "";
            $numberSequence = "";
            for($i=0;$i<$userInputx;$i++)
            {
                if($i+1 == $userInputx)
                {
                    $numberSequence = $numberSequence." ".$A;
                }
                else
                {
                    $numberSequence = $numberSequence." ".$A.", ";
                    $C = $B;
                    $B = $A;
                    $A = $A + $C;
                }
        
            }
            echo "Input nunmber is: ".$userInputx;
            ?>
            <br>
            <?php 
            echo "Output is: ".$numberSequence;
        }
        else
        {
            echo "Input number should be between 0-20!";
        }
    }
    else{
        echo "input an integer value";
    }
}

?>
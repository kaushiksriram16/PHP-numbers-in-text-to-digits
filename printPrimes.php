<!--
PROBLEM STATEMENT
1. Write a php function Print_Prime_Numbers(number_in_text) to get a string, each representing a number described in English (assume all lower case, and number is less than 1000). The function should print all prime numbers less than the number.
Example 1: Print_Prime_Numbers("nine") should print 2,3,5,7
Example 2: Print_Prime_Numbers("twenty five") should print 2,3,5,7,11,13,17,19,23 -->

<!DOCTYPE html>
<html>
<body>
    <form onsubmit="test.php" method="post">
        <label for="number">Enter number in text here:</label>
        <input type="text" name="number">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
	
    if(isset($_POST['submit'])){
        $word = $_POST['number'];// extracting number from POST array

        echo printPrimes($word); //Calling function by giving number in text as input/argument
     }else{
        return;        
    }


            function printPrimes($word){
                  $num=0;
                  $num = wordToDigit($word);//Calling function to convert given number in text to digit
                  echo "<h1>Prime numbers upto $num:</h1>";
                  for($i=1;$i<=$num;$i++){
                      $count = 0;
                      for($j=2;$j<=$i/2; $j++){
                          if($i%$j==0){$count++;break;}
                        }
                      if($count==0 && $i!=1){echo "<h2>".$i."</h2>";}
               }
             }


            function wordToDigit($word) {
                $warr = explode(' ',$word);
                $narr = array();
                for($i=0;$i<count($warr);$i++){
                    switch(trim($warr[$i])){
                        case 'zero':
                            $narr[$i]= 0;
                            break;
                        case 'one':
                            $narr[$i]= 1;
                            break;
                        case 'two':
                            $narr[$i]= 2;
                            break;
                        case 'three':
                            $narr[$i]= 3;
                            break;
                        case 'four':
                            $narr[$i]= 4;
                            break;
                        case 'five':
                            $narr[$i]= 5;
                            break;
                        case 'six':
                            $narr[$i]= 6;
                            break;
                        case 'seven':
                            $narr[$i]= 7;
                            break;
                        case 'eight':
                            $narr[$i]= 8;
                            break;
                        case 'nine':
                            $narr[$i]= 9;
                            break;
                        case 'ten':
                            $narr[$i]= 10;
                            break;
                        case 'eleven':
                            $narr[$i]= 11;
                            break;
                        case 'twelve':
                            $narr[$i]= 12;
                            break;
                         case 'thirteen':
                            $narr[$i]= 13;
                            break;
                         case 'fourteen':
                            $narr[$i]= 14;
                            break;
                              case 'fifteen':
                            $narr[$i]= 15;
                            break;
                         case 'sixteen':
                            $narr[$i]= 16;
                            break;
                         case 'seventeen':
                            $narr[$i]= 17;
                            break;
                         case 'eighteen':
                            $narr[$i]= 18;
                            break;
                         case 'nineteen':
                            $narr[$i]= 19;
                            break;
                         case 'twenty':
                            $narr[$i]= 20;
                            break;
                         case 'thirty':
                            $narr[$i]= 30;
                            break;
                         case 'forty':
                          $narr[$i]= 40;
                            break;
                         case 'fifty':
                          $narr[$i]= 50;
                            break;
                         case 'sixty':
                           $narr[$i]= 60;
                            break;
                         case 'seventy':
                            $narr[$i]= 70;
                            break;
                         case 'eighty':
                            $narr[$i]= 80;
                            break;
                         case 'ninety':
                            $narr[$i]= 90;
                            break;
                          case 'hundred':
                             $narr[$i]= 100;
                             break;
                       }
                 }
                 $digit=0;
               for($i=0;$i<count($narr);$i++){

                    if(count($narr)==4){
                      $digit = $narr[0] * $narr[1] + $narr[2]+ $narr[3];
                    }
                    elseif(count($narr)==3){
                      $digit = $narr[0] * $narr[1] + $narr[2];
                    }
                    elseif(count($narr)==2){
                        if($narr[1]==100){$digit = $digit = $narr[0] * $narr[1];}
                        else{$digit = $digit = $narr[0] + $narr[1];}
                    }
                    else{
                      $digit = $narr[0];
                    }
               }

               return $digit;
            }



 
?>

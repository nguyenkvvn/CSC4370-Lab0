<html>
 <head>
  <title>Lab 01</title>
 </head>
 <body>
   <h1>Lab 0

   <h2>Q1. Display the text "Good morning, Dave", said HAL." as an HTML paragraph in italics.</h2>
   <?php echo '<p><i>"Good morning, Dave", said HAL."</i></p>'; ?>

   <h2>Q2. Calculate and print the area (a) of a circle. Store the radius in a variable $radius. Use the built-in function or constant forπ (a=πr2, where radius is r).</h2>
   <?php
    $radius = 10;
    $area = pi() * ($radius^2);
    echo "<p>For sake of demonstration, the radius will be defined as 10. The area of a circle is $area.</p>";
   ?>

   <h2>Q3. Write a script to convert temperature values from Fahrenheit to Celsius. Store the Fahrenheit value in a float variable %celFahr. Conversion is as follows c = (5/9)( h - 32) where h is the Fahrenheit value. (You can assume the temperature value is > -459.67°F.)</h2>
   <?php
    $h = 100;
    $celFahr = (5/9)*($h - 32);
    echo "<p>For sake of demonstration, the degrees in fahrenheit will be defined as 100. The tempeture in celcius is $celFahr.</p>";
   ?>

   <h2>Q4. Declare a string variable with the value “ PHP is fun ” (note the leading and trailing spaces). Write code to display the number of characters as “String has x characters” where x is the number (minus any spaces at the start or end of the string).</h3>
   <?php
     $string1 = strlen(trim(" PHP is fun "));
     echo "<p>String has $string1 characters. </p>";
   ?>

   <h2>Q5. Use the strpos() function to find and print the first letter after the first occurrence of the sequence WWW. E.g. for “WDWWLWWWLDDWDLL” the answer is L.</h4>
   <?php
     $givenString = "WDWWLWWWLDDWDLL";
     $findString = "WWW";
     $positionAsked = strpos($givenString, $findString);
     $substringloc = substr($givenString, $positionAsked + strlen($findString), 1);
     echo "The character after the sequence $findString is $substringloc, located at index $positionAsked.";
   ?>

   <h2>Q6. Determine if a string is a palindrome, i.e. reads the same forwards and backwards. Examples of palindromes include “kayak”, “Hannah”, and “Able was I ere I saw Elba”. You can assume for simplicity that there is no punctuation. There are various ways to do this. I want you to do it by reversing the string and checking if the two strings are then equal. Your solution should be case insensitive.</h2>
   <?php
    $inputString = "Hannah";
    $lowercaseString = strtolower($inputString);
    $flippedString = strrev($lowercaseString);
    #doesnt seem to be working? What is the locale setting of Codd?
     $stringEqual = strcmp($flippedString, $inputString);
     if ($stringEqual == 0)
     {
       echo "<p>String $inputString is a palindrome. $flippedString $stringEqual</p>";
     }
     else
     {
       echo "<p>String $inputString is NOT a palindrome. $stringEqual</p>";
     }
   ?>

   <h2>Q7. This requires the use of an if statement. See http://php.net/manual/en/control-structures.if.php. Define an integer variable $num with value 7. Write code to determine if $num is even or odd. (One simple way to do this is to use the % operator.)</h2>
   <?php
     $num = 7;
     if ($num % 2 == 0)
     {
       echo "<p>The number $num is even.</p>";
     }
     else
     {
       echo "<p>The number $num is odd.</p>";
     }
     ?>

     <h2>Q8. Determine if this year is a leap year. You can use the date() function. Display either It is or It isn’t in HTML (bold text).end</h2>
     <p>Is this year a leap year?
     <?php
      if (date('L') == 1)
      {
        echo "<strong> It is.</strong></p>";
      }
      else
      {
        echo "<strong> It isn't.</strong></p>";
      }
     ?>
 </body>
</html>

<!DOCTYPE html>
<html>

<head>
  <title>MathHive Calculator</title>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

  <div style="display: flex; justify-content: center; ">
    <h1>

    <?php 
    
    

function show_message($customMes) {
  $fullString = "Hello, Humans";
  $dayNameOfTheWeek = date('l');

// $luckynumber = [1, 2, 5, 7, 9, 10]

// $luckynumberAdvanced = [ "Fun game" =. 7, "Luck Number" => 7 ];

  if ($dayNameOfTheWeek   == "Monday") {
      $fullString = $fullString . " " . $customMes . " " . $dayNameOfTheWeek;
    } else if ($dayNameOfTheWeek == "Friday") {
      $fullString = $fullString . " " . $customMes. " " . $dayNameOfTheWeek;
    } else if ($dayNameOfTheWeek == "Sunday") {
      $fullString = "Hello it's weekend";
    } else {
      $fullString = "Hello, Humans";
    }
    return $fullString;

  }   

echo show_message("its fun"); 
?>

<?php
$cars = array (
  array("Addition","+","+"),
  array("Substraction","-","-"),
  array("Mulitplication","*","*"),
  array("Divide","/","/")
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>



<?php 
    $num = 1;

    while ($num <= 10) {
        echo $num . " ";
        $num++;
    }
    
    // Array of background colors
$background_colors = array("#FF5733", "#C70039", "#900C3F", "#581845", "#FFC300", "#DAF7A6", "#00BFFF", "#9966CC");

// Choose a random color from the array
$random_color = $background_colors[array_rand($background_colors)];

// Output the background color using inline CSS
echo "<body style='background-color: $random_color'>";


    ?>




  

  <div class="calculator">
    <div class="screen">
      <div class="expression"></div>
      <div class="result"></div>
    </div>
    <div class="buttons">
      <div class="row">
        <button class="key" id="clear">Clear</button>
        <button class="key" id="sign">+/-</button>
        <button class="key" id="percent">%</button>
        <button class="key" id="divide">&divide;</button>
      </div>
      <div class="row">
        <button class="key" id="seven">7</button>
        <button class="key" id="eight">8</button>
        <button class="key" id="nine">9</button>
        <button class="key" id="multiply">&times;</button>
      </div>
      <div class="row">
        <button class="key" id="four">4</button>
        <button class="key" id="five">5</button>
        <button class="key" id="six">6</button>
        <button class="key" id="subtract">&minus;</button>
      </div>
      <div class="row">
        <button class="key" id="one">1</button>
        <button class="key" id="two">2</button>
        <button class="key" id="three">3</button>
        <button class="key" id="add">+</button>
      </div>
      <div class="row">
        <button class="key" id="zero">0</button>
        <button class="key" id="decimal">.</button>
        <button class="key" id="equals">=</button>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div style="display: flex; justify-content: center; ">
    <h1>Do more math operation down below.</h1>
   
  </div>
  <!-- function to check if the submit button has been pressed. If it has, we retrieve the values of num1 and num2 from the form using the $_POST superglobal variable.  -->
  <form action="function.php" method="get">
    <input type="text" name="num01" placeholder="Number 1">
    <select name="oper">
      <label>Choose operation:</label>
      <option value="add">Add</option>
      <option value="sub">Subtract</option>
      <option value="multiply">Multiply</option>
      <option value="divide">Divide</option>
      <option value="sqrt">Square root</option>
      <option value="pow">Power</option>
      <option value="sin">Sine</option>
      <option value="cos">Cosine</option>
      <option value="tan">Tangent</option>
      <option value="asin">Arcsine</option>
      <option value="acos">Arccosine</option>
      <option value="atan">Arctangent</option>
      <option value="log">Logarithm</option>
      <option value="ln">Natural logarithm</option>
      <option value="abs">Absolute value</option>
      <option value="floor">Floor</option>
      <option value="ceil">Ceiling</option>
    </select>
    <input type="text" name="num02" placeholder="Number 2">
    <button type="submit">Calculate</button>
  </form>

  




  <br>
  <br>
  <br>
  <div class="container">
  <?php
  // Outer loop to generate multiplication tables from 1 to 10
  for($i=1;$i<=10;$i++){
    
    // Output HTML table with a unique ID for each table
    echo "<table class='table' id='table$i'>";
    
    // Output table caption with the multiplication table number
    echo "<caption>Multiplication Table of ".$i."</caption>";
    
    // Inner loop to generate rows and columns of multiplication table
    for($j=1;$j<=10;$j++){  
      
      // Output a table row with two cells containing the factors and product
      echo "<tr>";
      echo "<td class='header'>" . $i . " X " . $j . "</td>";
      echo "<td>" . $i*$j . "</td>";
      echo "</tr>";
      
    }
    
    // Close the table HTML tag
    echo "</table>";
    
    // Output a button to show/hide the table, with a data attribute set to the table ID
    echo "<button class='show-btn' data-table='table$i'>Show Table $i</button>";
    
  }
?>






</div>


<script src="JS-Code/script.js"></script>





  <script src="JS-Code/script.js">

    // function connect() {
    //   // Create a new XMLHttpRequest object
    //   const xhr = new XMLHttpRequest();

    //   // Set the HTTP method and URL for the request
    //   xhr.open('GET', 'function.php');

    //   // Set a callback function to handle the response
    //   xhr.onreadystatechange = function () {
    //     // Check if the request is complete and successful
    //     if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    //       // Extract the response data
    //       const response = xhr.responseText;
    //       // Do something with the response data
    //       console.log(response);
    //     }
    //   };

    //   // Send the request
    //   xhr.send();
    // }



    // Import the functions you need from the SDKs you need
    import { initializeApp } from "firebase/app";
    import { getAnalytics } from "firebase/analytics";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyDe9CiSQph45HU0srK2BTWVmOxohXhKdM0",
      authDomain: "calculator-60374.firebaseapp.com",
      projectId: "calculator-60374",
      storageBucket: "calculator-60374.appspot.com",
      messagingSenderId: "779896070718",
      appId: "1:779896070718:web:5af1e509837a0c2551e76f",
      measurementId: "G-E8DY70HZY2"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);

  </script>

  
</body>



</html>
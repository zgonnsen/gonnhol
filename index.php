<?php
//Check that there is a session ongoing:
include('../Login/session.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/css/main.css">
    <title>Property Party</title>
</head>
<body>
    <nav class="stroke">
        <ul>
          <li><a id="home" href="#">Home</a></li>
          <li><a id = "about" href="#">About</a></li>
          <li><a id = "calculator" href="#">Calculator</a></li>
          <li><a id = "search" href="#">Search</a></li>
        </ul>
      </nav>
    <section class="bgimg" id="homesec">
        <span class="imgtext">Gonn Hol <br>Real Estate</span>
    </section>

    <section id="aboutsec" style="display: none;">
       
            <img class= "aboutimg" src="/app/images/camdenyards.jpg" alt="Picture of Baltimore Skyline with Camden Yards">
            <h3>
                This website provides the location and tools to perform real estate analysis and experimentation. 
                Built completely from scratch by Greg Holste and Zach Gonnsen. 
            </h3>
        
        </section>
    <section class="search" style="display: none;" id="searchsec">
        <h4> Still work in progress. Here is where searching for properties will be performed</h4>
        <div class="divider">
            Search Fields:
        </div>
        <button class="btn"> Run Python Code </button>
    </section>

    <section class="calculator" id = "calculatorsec" style="display: none;">
        <div class="flexcol">
            <h3>Rental Property Calculator</h3> 
            <p> This calculator takes user input and calculates the potential profit given supplied expenses and rental income. </p>
            <p> The user can use the save and load buttons below to record or pull up previous calculations</p><br><br>
            <div class="flexrow">
                <div class="flexcol">
                    <h3>User Inputs</h3>
                    <div class=labelcenter>
                        <label class="formlabel">Price</label>
                        <div class="relative">
                            <span class="units prepend">$</span>
                            <input type="text" class="forminput prepend">
                        </div>
                    </div>
                    <div class=labelcenter>
                        <label class="formlabel">DownPayment</label>
                        <div class="flexrow">
                            <div class="relative">
                                <span class="units prepend">$</span>
                                <input type="text" class="forminput prepend long">
                            </div>
                            <div class="relative">
                                <span class="units append">%</span>
                                <input type="text" class="forminput short">
                            </div>
                        </div>
                    </div>
                    <div class=labelcenter>
                        <label class="formlabel">Monthly Rent</label>
                        <div class="relative">
                            <span class="units prepend">$</span>
                            <input type="text" class="forminput prepend ">
                        </div>
                    </div>
                    <div class=labelcenter>
                        <label class="formlabel">Rental Units</label>
                        <input type="text" class="forminput prepend veryshort">
                    </div>
                </div>
                <img class="calcimg" src="app/images/modern_house.jpg" alt="Modern House">
            </div>

            <div class="flexrow mt">
                <div class="flexcol">
                    <h3>Expenses</h3>
                    <h4>Mortgage Summary</h4>
                    <div class="flexrow ml mb split">
                        <p >Amount:</p>
                        <div class="relative">
                            <span class="units prepend">$</span>
                            <p class="result prepend">100000</p>
                        </div>
                    </div>
                    <div class="flexrow ml mb split">
                        <p>Interest Rate:</p>
                        <div class="relative">
                            <span class="units append fixed">%</span>
                            <input type="text" class="forminput fixed">
                        </div>
                    </div>
                    <div class="flexrow ml mb split">
                        <p>Mortgage Term:</p>
                        <div class="relative">
                            <span class="units append fixed">yr</span>
                            <input type="text" class="forminput fixed">
                        </div>
                    </div>
                    <div class="flexrow ml mb split">
                        <p>Annual Mortgage:</p>
                        <div class="relative">
                            <span class="units prepend">$</span>
                            <p class="result prepend">100000</p>
                        </div>
                    </div>
                    <h4>Annual Costs</h4>
                    <div class="flexrow ml mb split">
                        <p >Annual Rent:</p>
                        <div class="relative">
                            <span class="units prepend">$</span>
                            <p class="result prepend">100000</p>
                        </div>
                    </div>
                    <div class="flexrow ml mb split">
                        <p >Annual Maintenance:</p>
                        <div class="relative">
                            <span class="units prepend">$</span>
                            <p class="result prepend">100000</p>
                        </div>
                    </div>
                    <div class="flexrow ml mb split">
                        <p>Vacancy Rate:</p>
                        <div class="relative">
                            <span class="units append fixed">yr</span>
                            <input type="text" class="forminput fixed">
                        </div>
                    </div>
                    <h4>Other Costs</h4>
                    <div class="flexrow ml mb split">
                        <p>Property Taxes:</p>
                        <div class="relative">
                            <span class="units append fixed">yr</span>
                            <input type="text" class="forminput fixed">
                        </div>
                    </div>
                    <div class="flexrow ml mb split">
                        <p>Property Insurance:</p>
                        <div class="relative">
                            <span class="units append fixed">yr</span>
                            <input type="text" class="forminput fixed">
                        </div>
                    </div>

                </div>
                <div class="flexcol">
                    <h3>Results</h3>
                    
                    <div class="flexrow ml mb split">
                        <p>Total Expenses:</p>
                        <div class="relative">
                            <span class="units prepend">$</span>
                            <p class="result prepend">100000</p>
                        </div>
                    </div>
                   
                    <div class="flexrow ml mb split">
                        <p>Net Operating Income:</p>
                        <div class="relative">
                            <span class="units prepend">$</span>
                            <p class="result prepend">100000</p>
                        </div>
                    </div>
                    
                    <div class="flexrow ml mb split">
                        <p>Cash Return Rate:</p>
                        <div class="relative">
                            <span class="units append fixed">%</span>
                            <p class="result append">100000</p>
                        </div>
                    </div>
                    <div class="flexrow">
                        <button class="savebtn">Save </button>
                        <button class="savebtn">Load </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="app/js/navigation.js"></script>
</html>


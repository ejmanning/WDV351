<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manning's Fitness</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/products.css">
</head>
<body>
  <header>
    <h1>Manning's Fitness</h1>
    <nav class = "navbar navbar-expand-md navbar-custom">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon my-toggler"></span>
       </button>

      <div class = "collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="checkOut.php">Check Out</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

        </ul>
      </div>
    </nav>
  </header>
<main>
  <br>
  <div id="banner">
    <div id="bannerMessage">
      <h1>Products of<br>
      Manning's Fitness</h1>
    </div>
  </div>

  <div class = "flex-container">

      <div class = "product">
        <h1>Soft Dumbbell Set</h1>
        <img src = "images/softDumbbellSet.jpg" alt = "Soft Dumbbell Set">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="F2BF8DXBBZB3A">
          <table>
          <tr><td><input type="hidden" name="on0" value="Weight Set">Weight Set</td></tr><tr><td><div class = "select"><select id = "select" name="os0">
          	<option value="Light Set: 2, 4, 6, 8, 10, 12 lb">Light Set: 2, 4, 6, 8, 10, 12 lb $14.99 USD</option>
          	<option value="Heavy Set: 15, 20, 25, 30, 35, 40 lb">Heavy Set: 15, 20, 25, 30, 35, 40 lb $19.99 USD</option>
          </select></div> </td></tr>
        </table>
          <input type="hidden" name="currency_code" value="USD">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Hard Dumbbell Set</h1>
        <img src = "images/hardDumbbellSet.jpg" alt = "Hard Dumbbell Set">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="2KEGXVV5YSGX8">
          <table>
          <tr><td><input type="hidden" name="on0" value="Weight Set">Weight Set</td></tr><tr><td><select id = "select" name="os0">
          	<option value="Light Set: 2, 4, 6, 8, 10, 12 lb">Light Set: 2, 4, 6, 8, 10, 12 lb $19.99 USD</option>
          	<option value="Medium Set: 15, 20, 25, 30, 35, 40 lb">Medium Set: 15, 20, 25, 30, 35, 40 lb $24.99 USD</option>
          	<option value="Heavy Set: 45, 50, 55, 60, 65, 70 lb">Heavy Set: 45, 50, 55, 60, 65, 70 lb $29.99 USD</option>
          </select> </td></tr>
          </table>
          <input type="hidden" name="currency_code" value="USD">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

      </div>

      <div class = "product">
        <h1>Kettlebell Set</h1>
        <img src = "images/kettlebellSet.jpg" alt = "Kettlebell Set">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="HEPMTP8R8KZA4">
          <table>
          <tr><td><input type="hidden" name="on0" value="Weight Set">Weight Set</td></tr><tr><td><select id = "select" name="os0">
          	<option value="Light Set: 2, 4, 6, 8, 10, 12 lb">Light Set: 2, 4, 6, 8, 10, 12 lb $24.99 USD</option>
          	<option value="Medium Set: 15, 20, 25, 30, 35, 40 lb">Medium Set: 15, 20, 25, 30, 35, 40 lb $29.99 USD</option>
          	<option value="Heavy Set: 45, 50, 55, 60, 65, 70 lb">Heavy Set: 45, 50, 55, 60, 65, 70 lb $34.99 USD</option>
          </select> </td></tr>
          </table>
          <input type="hidden" name="currency_code" value="USD">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Barbell with Weights</h1>
        <h6>(includes 2.5, 5, 10, 15, 20, 25, 30, 35, 40, 45 lbs)</h6>
        <h4>$129.99</h4>
        <img src = "images/barbellSetWithWeights.jpg" alt = "Barbell">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="A37PBUABLLT4W">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

      </div>

      <div class = "product">
        <h1>Weights for Barbell</h1>
        <h6>(2.5, 5, 10, 15, 20, 25, 30, 35, 40, 45 lbs)</h6>
        <h4>$69.99</h4>
        <img src = "images/individualBarbellWeights.jpg">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="MSLA2XYZKK98G">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

      </div>

      <div class = "product">
        <h1>Gym Bench Set with Rack</h1>
        <h4>$89.99</h4>
        <img src = "images/gymBench.jpg" alt = "Gym Bench Set">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="QSJCBMAFWMP74">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Elliptical</h1>
        <h4>$999.99</h4>
        <img src = "images/elliptical.jpg" alt = "Elliptical">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="64UPV5TPWCVHJ">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

      </div>

      <div class = "product">
        <h1>Stepper Machine</h1>
        <h4>$2999.99</h4>
        <img src = "images/stepper.jpg" alt = "Stepper Machine">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="KS8KE52HKN9ZC">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Treadmill</h1>
        <h4>$699.99</h4>
        <img src = "images/treadmill.jpg" alt = "Treadmill">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="GS585G4Q3GB6Y">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Pull Up Bar</h1>
        <h4>$139.99</h4>
        <img src = "images/pullUpBar.jpg" alt = "Pull Up Bar">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="AALPQVF7AFVB8">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Protein-Packed Nuts</h1>
        <img src = "images/nuts.jpg" alt = "Protein-packed nuts">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="VADSFK6DDEB2J">
          <table>
          <tr><td><input type="hidden" name="on0" value="Amount">Amount</td></tr><tr><td><select id = "select" name="os0">
          	<option value="1/2 lb bag">1/2 lb bag $12.49 USD</option>
          	<option value="1 lb bag">1 lb bag $24.99 USD</option>
          </select> </td></tr>
          </table>
          <input type="hidden" name="currency_code" value="USD">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Water Bottles Pack</h1>
        <img src = "images/waterBottles.jpg" alt = "Water Bottles">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="DFP925B634AJG">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Chocolate Protein Shake Mix (1 lb tub)</h1>
        <h4>$19.99</h4>
        <img src = "images/chocolateProteinShake.jpg" alt = "Chocolate Protein Shake">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="NLHEHFU2RPCNL">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Strawberry Protein Shake Mix (1 lb tub)</h1>
        <h4>$19.99</h4>
        <img src = "images/strawberryProteinShake.jpg" alt = "Strawberry Protein Shake">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="VYALLT3YZGHQ2">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Kiwi Protein Shake Mix (1 lb tub)</h1>
        <h4>$19.99</h4>
        <img src = "images/kiwiProteinShake.jpg" alt = "Kiwi Protein Shake">
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="9A2SA387X8EDU">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Cardio Workout (JPG) Download</h1>
        <h4>$5</h4>
        <img src = "images/cardio.png" alt = "Cardio" style = "width: 60%; background-color: white; margin-bottom: 3%;">
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="EC93D6LAV6Q82">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Upper Body Workout (JPG) Download</h1>
        <h4>$5</h4>
        <img src = "images/upperBody.png" alt = "Upper Body" style = "width: 50%; background-color: white; margin-bottom: 3%;">
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="M9EYXNF85T28E">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Lower Body Workout (JPG) Download</h1>
        <h4>$5</h4>
        <img src = "images/lowerBody.png" alt = "Lower Body" style = "width: 70%; background-color: white; margin-bottom: 3%;">
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="7PS8XLD8XR7S8">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Stretches (JPG) Download</h1>
        <h4>$5</h4>
        <img src = "images/stretches.png" alt = "Stretches" style = "width: 50%; background-color: white; margin-bottom: 3%;">
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="PN6P6XL988JWN">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>

      <div class = "product">
        <h1>Yoga Workout (PDF) Download</h1>
        <h4>$5</h4>
        <img src = "images/yoga.png" alt = "Yoga" style = "width: 50%; background-color: white; border-right: 15px solid white; margin-bottom: 3%;">
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="MTUV8S2AZ9W8S">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>


</div>

  <br>
  <div id= "banner">
    <div id="bannerMessage" style="padding-top: 10px; padding-bottom: 10px;">
      <h1>Manning's Fitness</h1>
    </div>
  </div>

  <br><br>
</main>

<footer>

  <img src = "images/logo.png" width = "20px" alt = "Manning's Fitness Logo">

  <p>Manning's Fitness<br>
                      101 NW 8th Street<br>
                      Grimes, IA 50111<br>
                      515-986-4078</p>

  <img src = "images/logo.png" alt = "Manning's Fitness Logo">


</footer>
</body>
</html>

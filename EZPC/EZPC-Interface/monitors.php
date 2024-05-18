<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.65">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <title>EZPC Store</title>

    <!-- ICON LOGO -->
    <link rel="shortcut icon" type="x-icon" href="./public_images/LogoTag-ezpc.png">

    <link rel="icon" type="image/png" href="img_PCGuide/favicon.png">
    <link rel="stylesheet" href="css/default.css" type="text/css">
    <link rel="stylesheet" href="css/ShopRAM.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
    body {
    font-family: 'Cairo', sans-serif;
    /* Other styles */
}
   header{
    font-family: 'Cairo', sans-serif;
   }
</style>

<body>

<header class = "header">
  <div class="burger_div">
    <nav class="burger_menu">
      <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">
      <label class="m-menu__toggle t1" for="menu">
        <svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><line x1="3" y1="16" x2="21" y2="16"></line><line x1="3" y1="10" x2="21" y2="10"></line><line x1="3" y1="22" x2="21" y2="22"></line></svg>
      </label>
      <label class="m-menu__overlay" for="menu"></label>

      <div class="m-menu">
        <div class="m-menu__header">
          <label class="m-menu__toggle" for="menu">
            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </label>
          <span>МЕNU</span>
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>
            <label class="a-label__chevron" for="item-2">Store</label>
            <input type="checkbox" id="item-2" name="item-2" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-2">
                  <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                  </svg>
                </label>
                <span>Store</span>
              </div>
              <ul>
                <li>
                  <label class="a-label__chevron" for="item-2-1">Graphic Card</label>
                  <input type="checkbox" id="item-2-1" name="item-2" class="m-menu__checkbox">
                  <div class="m-menu">
                    <div class="m-menu__header">
                      <label class="m-menu__toggle" for="item-2-1">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                          <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                      </label>
                      <span>Graphic Card</span>
                    </div>
                  </div>
                </li>
                <li>
                  <label class="a-label__chevron" for="item-2-2">Monitors</label>
                  <input type="checkbox" id="item-2-2" name="item-2" class="m-menu__checkbox">
                  <div class="m-menu">
                    <div class="m-menu__header">
                      <label class="m-menu__toggle" for="item-2-2">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                          <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                      </label>
                      <span>Monitors</span>
                    </div>
                  </div>
                </li>
                <li><a href="./ShopRAM.php">Motherboard</a></li>
                <li>
                  <label class="a-label__chevron" for="item-2-4">Motherboard</label>
                  <input type="checkbox" id="item-2-4" name="item-2" class="m-menu__checkbox">
                  <div class="m-menu">
                    <div class="m-menu__header">
                      <label class="m-menu__toggle" for="item-2-4">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                          <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                      </label>
                      <span>Mouse & Keyboard</span>
                    </div>
                  </div>
                </li>
                <li>
                  <label class="a-label__chevron" for="item-2-5">Power & Supply</label>
                  <input type="checkbox" id="item-2-5" name="item-2" class="m-menu__checkbox">
                  <div class="m-menu">
                    <div class="m-menu__header">
                      <label class="m-menu__toggle" for="item-2-5">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                          <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                      </label>
                      <span>Power & Supply</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="./Contacts.php">Contact</a></li>
          <br><br>
          <li><a href="./LogIn.php">Log In</a></li>
          <li><a href="./Registration.php">Register</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div id="nav_menu">
    <div class="header_inner">
      <a href="index.php">
        <div class="header_logo">EZPC</div>
        <img src="img_PCGuide/favicon.png" alt = "PC_Logo_Header" id="PC_Logo_Header">
      </a>
    </div>
    <nav id="nav_buttons">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href = "shopRAM.php">Store</a>
          <ul>
            <li><a href="graphics.php">Graphic Card</a></li>
            <li><a href="monitors.php">Monitors</a></li>
            <li><a href="motherboard.php">Motherboard</a></li>
            <li><a href="mouse.php">Mouse & Keyboard</a></li>
            <li><a href="power.php">Power & Supply</a></li>
          </ul>
        </li>
        <li><a href="./Contacts.php">Contact</a></li>
      </ul>
    </nav>
    <nav id="nav_account">
      <ul>
        <li><a href="./LogIn.php">Log In</a>
      </li>
      </ul>
    </nav>
    <a href="checkout.php">
    <img id="shcart" src="img_PCGuide/shcart.png" alt="PC_Logo">
</a>
  </div>
</header>




<div class="wrapper">
  <main class="main">
    <h1>MONITORS</h1>
    <div class="container">

      <div class="filters">
        <div class="filter f1">
          <h3>Price</h3>
          <div class="Cost_filter">
            <form class="integer_form" action="" method="">
              <p>
                <input class="text-field__input" placeholder="From ₱500" type="text" name="Min_cost" id="Min_cost" value="0">
              </p>
              <p>
                <input class="text-field__input" placeholder="To ₱100000" type="text" name="Max_cost" id="Max_cost" value="100000">
              </p>
            </form>
          </div>
        </div>

        <div class="filter f2">
          <h3>Available</h3>
          <div class="Available_filter">
            <form id="Available_form" action="" method="">
              <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="Available-GraphicCard" name="Available-GraphicCard" value="GraphicCard">
                <label for="Available-GraphicCard">Graphic Card</label>
              </div>
              <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="Available-unknown1" name="Available-unknown1" value="unknown1">
                <label for="Available-unknown1">----</label>
              </div>
              <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="Available-unknown2" name="Available-unknown" value="unknown2">
                <label for="Available-unknown2">----</label>
              </div>
              <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="Available-Monitors" name="Available-Monitors" value="Monitors">
                <label for="Available-Monitors">Monitors</label>
              </div>
              <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="Available-Motherboard" name="Available-Motherboard" value="Motherboard">
                <label for="Available-Motherboard">Motherboard</label>
              </div>
              <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="MAvailable-MouseKeyboard" name="Available-MouseKeyboard" value="MouseKeyboard">
                <label for="Available-MouseKeyboard">Mouse & Keyboard</label>
              </div>
              <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="Available-PowerSupply" name="Available-PowerSupply" value="PowerSupply">
                <label for="Available-PowerSupply">Power & Supply</label>
              </div>
              <div class="checkbox">
                <input class="custom-checkbox" type="checkbox" id="Available-unknown3" name="Available-unknown3" value="unknown3">
                <label for="Available-unknown3">-----</label>
              </div>
            </form>
          </div>
        </div>


      </div>

      <div id="no_prods"><h2>No such products are available...</h2></div>

      <div class="products">


        
        <!-- Monitors -->


        <div class="product_card" id="10">
          <div class="img_container">
            <img src="img_products/Monitors/AOC 23.8 24G2SPE 165HZ IPS Gaming Monitor.jpg" alt="product image">
          </div>
          <h3>AOC 23.8 24G2SPE 165HZ IPS Gaming Monitor</h3>
          <div class="card_description">
              <p>Experience an immersive gaming experience with 24G2SPE. The 23.8” IPS panel display delivering lifelike color reproduction with wide viewing angles. 
                Its 165 Hz refresh rate, 1ms response time and Adaptive Sync Technology offers everything you need to be on top of the game, paving your way to victory</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱8,800.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>


        <div class="product_card" id="11">
          <div class="img_container">
            <img src="img_products/Monitors/AOC 49 AG493UCX2 AGON Curved Gaming Monitor.jpg" alt="product image">
          </div>
          <h3>AOC 49 AG493UCX2 AGON Curved Gaming Monitor</h3>
          <div class="card_description">
              <p>Expand your vision with a 49” Curved SuperWide 5K Dual QHD Display (32:9) supported by 
                DisplayHDR400, as you seize the colossal power of this monitor’s worldclass responsiveness, explosive performance, and crystal clear visuals.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱52,850.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>


        <div class="product_card" id="12">
          <div class="img_container">
            <img src="img_products/Monitors/ASUS 27 VG27AQGL1A ZAKU II EDITION TUF Gaming Monitor.jpg" alt="product image">
          </div>
          <h3>ASUS 27 VG27AQGL1A ZAKU II EDITION TUF Gaming Monitor</h3>
          <div class="card_description">
            <p>27-inch WQHD (2560x1440) IPS gaming monitor with ultrafast 170Hz (overclocking) refresh rate designed for professional gamers and immersive gameplay</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱23,500.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>


        <div class="product_card" id="14">
          <div class="img_container">
            <img src="img_products/Monitors/LG 27 27GP850-B UltraGear™ Nano IPS with NVIDIA® G-SYNC® Gaming Monitor.jpg" alt="product image">
          </div>
          <h3>LG 27 27GP850-B UltraGear™ Nano IPS with NVIDIA® G-SYNC® Gaming Monitor</h3>
          <div class="card_description">
            <p>With IPS 1ms comparable to TN Speed, minimizing reverse ghosting and providing fast response time, lets you to enjoy a whole new gaming performance.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱21,900.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>


        <div class="product_card" id="15">
          <div class="img_container">
            <img src="img_products/Monitors/SAMSUNG 27 LS27C330GAEXXP IPS Monitor.jpg" alt="product image">
          </div>
          <h3>SAMSUNG 27 LS27C330GAEXXP IPS Monitor</h3>
          <div class="card_description">
            <p>Seamless gaming experience with AMD FreeSync, 100Hz refresh rate and Game Mode.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱7,700.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>


        <div class="product_card" id="16">
          <div class="img_container">
            <img src="img_products/Monitors/Samsung 49 Odyssey G9 LS49CG954SEXXP OLED 240Hz 1ms Smart Gaming Monitor.jpg" alt="product image">
          </div>
          <h3>Samsung 49 Odyssey G9 LS49CG954SEXXP OLED 240Hz 1ms Smart Gaming Monitor</h3>
          <div class="card_description">
            <p>Mesmerizing view in OLED with the Neo Quantum Processor Pro</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱92,000.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>
  
  </main>
 
</div>

</body>
</html>
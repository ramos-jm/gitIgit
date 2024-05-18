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
    <h1>SHOP NOW</h1>
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


      <!-- Graphics Cards -->
        <div class="product_card" id="1">
          <div class="img_container">
            <img src="img_products/Graphics Card/ASUS TUF Gaming GeForce RTX™ 4070 Ti SUPER 16GB GDDR6X Non-OC Graphics Card.jpg" alt="product image">
          </div>
          <h3>ASUS TUF Gaming GeForce RTX™ 4070 Ti SUPER 16GB GDDR6X Non-OC Graphics Card</h3>
          <div class="card_description">
          <p>Powered by NVIDIA DLSS 3, ultra-efficient Ada Lovelace arch, and full ray tracing </p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱63,050.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="2">
          <div class="img_container">
            <img src="img_products/Graphics Card/GIGABYTE GeForce RTX™ 4070 SUPER EAGLE OC 12G - Graphics Card.jpg" alt="product image">
          </div>
          <h3>GIGABYTE GeForce RTX™ 4070 SUPER EAGLE OC 12G - Graphics Card</h3>
          <div class="card_description">
            <p>4th Generation Tensor Cores: Up to 4x performance with DLSS 3 vs. brute-force rendering</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱44,600.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="3">
          <div class="img_container">
            <img src="img_products/Graphics Card/MSI GeForce RTX™ 3050 GAMING X BLK 8GB GDDR6 128-bit Graphics Card.jpg" alt="product image">
          </div>
          <h3>RAM Memory HyperX Fury 8GB DDR3 1600MHz DIMM CL10 HX316C10F/8</h3>
          <div class="card_description">
            <p>The GeForce RTX™ 3050 is built with the powerful graphics performance of the NVIDIA Ampere architecture. It offers dedicated 2nd gen RT Cores and 3rd gen Tensor Cores, new streaming multiprocessors, and high-speed G6 memory to tackle the latest games. Step up to GeForce RTX.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱15,300.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="4">
          <div class="img_container">
            <img src="img_products/Graphics Card/MSI GeForce RTX™ 3050 VENTUS 2X 8GB GDDR6 OCV1 128-bit Graphics Card.jpg" alt="product image">
          </div>
          <h3>MSI GeForce RTX™ 3050 VENTUS 2X 8GB GDDR6 OCV1 128-bit Graphics Card</h3>
          <div class="card_description">
            <p>The GeForce RTX™ 3050 is built with the powerful graphics performance of the NVIDIA Ampere architecture. It offers dedicated 2nd gen RT Cores and 3rd gen Tensor Cores, new streaming multiprocessors, and high-speed G6 memory to tackle the latest games. Step up to GeForce RTX.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱13,750.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="5">
          <div class="img_container">
            <img src="img_products/Graphics Card/MSI GeForce RTX™ 4060 Ti VENTUS X3 OC 16GB GDDR6 128-bit Graphics Card.jpg" alt="product image">
          </div>
          <h3>MSI GeForce RTX™ 4060 Ti VENTUS X3 OC 16GB GDDR6 128-bit Graphics Card</h3>
          <div class="card_description">
              <p>Game, stream, create. The GeForce RTX™ 4060 Ti lets you take on the latest games and apps with the ultra-efficient NVIDIA Ada Lovelace architecture. Experience immersive, AI-accelerated gaming with ray tracing and DLSS 3, and supercharge your creative process and productivity with NVIDIA Studio.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱33,800.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="6">
          <div class="img_container">
            <img src="img_products/Graphics Card/MSI GeForce RTX™ 4060 VENTUS 2X OC 8GB GDDR6 128-bit Graphics Card.jpg" alt="product image">
          </div>
          <h3>Graphics Card/MSI GeForce RTX™ 4060 VENTUS 2X OC 8GB GDDR6 128-bit Graphics Card</h3>
          <div class="card_description">
              <p></p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱20,000.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="7">
          <div class="img_container">
            <img src="img_products/Graphics Card/MSI GeForce RTX™ 4070 GAMING X SLIM 12GB GDDR6X 192-bit Graphics Card.jpg" alt="product image">
          </div>
          <h3>Graphics Card/MSI GeForce RTX™ 4070 GAMING X SLIM 12GB GDDR6X 192-bit Graphics Card</h3>
          <div class="card_description">
              <p>Get equipped for stellar gaming and creating with the NVIDIA® GeForce RTX™ 4070. It’s built with the ultra-efficient 
                NVIDIA Ada Lovelace architecture. Experience fast ray tracing, AI-accelerated performance with DLSS 3, new ways to create, and much more.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱44,500.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="8">
          <div class="img_container">
            <img src="img_products/Graphics Card/MSI GeForce® GTX 1650 VENTUS XS OCV1 V2 4GB GDDR5 128-bit Graphics Card.jpg" alt="product image">
          </div>
          <h3>MSI GeForce® GTX 1650 VENTUS XS OCV1 V2 4GB GDDR5 128-bit Graphics Card</h3>
          <div class="card_description">
              <p>Get equipped for stellar gaming and creating with the NVIDIA® GeForce RTX™ 4070. It’s built with the ultra-efficient NVIDIA Ada Lovelace architecture. 
                Experience fast ray tracing, AI-accelerated performance with DLSS 3, new ways to create, and much more.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱8,400.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        
        <!-- Monitors -->


        <div class="product_card" id="9">
          <div class="img_container">
            <img src="img_products/Monitors/ACER 31.5 NITRO ED320QR S3 Curved Monitor.jpg" alt="product image">
          </div>
          <h3>ACER 31.5 NITRO ED320QR S3 Curved Monitor</h3>
          <div class="card_description">
            <p>Capture and share videos, screenshots, and livestreams with friends. Keep your GeForce drivers up to date. 
              And optimize your game settings. GeForce Experience™ lets you do it all. It's the essential companion to your GeForce graphics card.</p>
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱11,150.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>


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


        <div class="product_card" id="13">
          <div class="img_container">
            <img src="img_products/Monitors/ASUS TUF Gaming VG27AQ3A 27-inch 180Hz Gaming Monitor.jpg" alt="product image">
          </div>
          <h3>ASUS TUF Gaming VG27AQ3A 27-inch 180Hz Gaming Monitor</h3>
          <div class="card_description">
            <p>The 27-inch TUF Gaming VG27AQ3A QHD gaming monitor featuring a IPS panel for blistering-fast 180 Hz gaming.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱15,650.00</label>
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


         <!-- Motherboard -->

         <div class="product_card" id="17">
          <div class="img_container">
            <img src="img_products/Motherboard/ASUS Prime A320M-K Motherboard.jpg" alt="product image">
          </div>
          <h3>ASUS Prime A320M-K Motherboard</h3>
          <div class="card_description">
            <p>AMD AM4 Socket for 3rd/2nd/1st Gen AMD Ryzen™/2nd and 1st Gen AMD Ryzen™ with Radeon™ 
              Vega Graphics/Athlon™ with Radeon™ Vega Graphics/7th Generation A-series/Athlon X4 Processors</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱3,100.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="18">
          <div class="img_container">
            <img src="img_products/Motherboard/ASUS PRIME B550M-A (WIFI) II Motherboard.jpg" alt="product image">
          </div>
          <h3>ASUS PRIME B550M-A (WIFI) II Motherboard</h3>
          <div class="card_description">
            <p>ASUS Prime series is expertly engineered to unleash the full potential of 5000 Series/ 5000 G-Series/ 4000 G-Series/ 3000 Series AMD Ryzen platform</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱6,600.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="19">
          <div class="img_container">
            <img src="img_products/Motherboard/ASUS PRIME B660M-A WIFI D4 mATX Motherboard.jpg" alt="product image">
          </div>
          <h3>ASUS PRIME B660M-A WIFI D4 mATX Motherboard</h3>
          <div class="card_description">
            <p>ASUS Prime series motherboards are expertly engineered to unleash the full potential of 13th& 12thGeneration Intel®processors. </p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱7,350.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>


        <div class="product_card" id="20">
          <div class="img_container">
            <img src="img_products/Motherboard/Asus Tuf B450M-Pro II Gaming MATX Motherboard.jpg" alt="product image">
          </div>
          <h3>Asus Tuf B450M-Pro II Gaming MATX Motherboard</h3>
          <div class="card_description">
            <p>ASUS Prime series motherboards are expertly engineered to unleash the full potential of 13th& 12thGeneration Intel®processors.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱5,250.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="21">
          <div class="img_container">
            <img src="img_products/Motherboard/ASUS TUF GAMING B660M-PLUS WIFI D4 Motherboard.jpg" alt="product image">
          </div>
          <h3>ASUS TUF GAMING B660M-PLUS WIFI D4 Motherboard</h3>
          <div class="card_description">
            <p>ASUS TUF GAMING B660M-PLUS WIFI D4 takes all the essential elements of the latest Intel® processors and combines them with game-ready features and proven durability. </p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱9,700.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="22">
          <div class="img_container">
            <img src="img_products/Motherboard/ASUS TUF Z790-PLUS WIFI D4 ATX Motherboard.jpg" alt="product image">
          </div>
          <h3>ASUS TUF Z790-PLUS WIFI D4 ATX Motherboard</h3>
          <div class="card_description">
            <p>TUF GAMING Z790-PLUS WIFI D4 takes all the essential elements of the latest Intel®processors and combines them with game-ready features and proven durability.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">1720₽</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="23">
          <div class="img_container">
            <img src="img_products/Motherboard/MSI A320M-A PRO mATX Motherboard.jpg" alt="product image">
          </div>
          <h3>RAM Memory Transcend JetRam 8GB DDR4 3200MHz SODIMM CL22 JM3200HSB-8G</h3>
          <div class="card_description">
            <p></p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱16,900.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

        <div class="product_card" id="24">
          <div class="img_container">
            <img src="img_products/Motherboard/MSI B550M PRO-VDH WIFI Motherboard.jpg" alt="product image">
          </div>
          <h3>MSI B550M PRO-VDH WIFI Motherboard</h3>
          <div class="card_description">
            <p>MSI motherboards feature tons of convenient and smart design, such as convenient pin-header keep out zone, 
              friendly SATA & USB location and so on, so DIY users can pick and choose any gaming rig they want.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱2,900.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
        </div>

      <!-- Mouse and Keyboard-->

      <div class="product_card" id="25">
          <div class="img_container">
            <img src="img_products/Mouse & Keyboards/ASUS ROG Azoth Gaming Custom Hotswappable Mechanical Keyboard NX Storm.jpg" alt="product image">
          </div>
          <h3>ASUS ROG Azoth Gaming Custom Hotswappable Mechanical Keyboard NX Storm</h3>
          <div class="card_description">
            <p>ROG Azoth gaming custom keyboard with 75 keyboard form factor, gasket mount, three-layer dampening foam and metal top cover, highly customizable</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱13,450.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="26">
          <div class="img_container">
            <img src="img_products/Mouse & Keyboards/ASUS TUF GAMING M3 RGB Gaming Mouse.jpg" alt="product image">
          </div>
          <h3>ASUS TUF GAMING M3 RGB Gaming Mouse</h3>
          <div class="card_description">
            <p>TUF Gaming M3 is a compact gaming mouse that delivers the comfort, performance and reliability 
              that gamers demand. It's ergonomic and lightweight for prolonged campaigns, with a high-precision optical sensor that gives you an edge in battle.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱800.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="27">
          <div class="img_container">
            <img src="img_products/Mouse & Keyboards/AULA WIND T640 MECHANICAL Keyboard and Mouse Combo.jpg" alt="product image">
          </div>
          <h3>AULA WIND T640 MECHANICAL Keyboard and Mouse Combo</h3>
          <div class="card_description">
            <p>TWired Optical Gaming Mouse With 7 Keys 800/1200/1600/2400/4800DPI -Interface</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱1,500.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="28">
          <div class="img_container">
            <img src="img_products/Mouse & Keyboards/LOGITECH G PRO X SUPERLIGHT Wireless Gaming Mouse (Magenta).jpg" alt="product image">
          </div>
          <h3>LOGITECH G PRO X SUPERLIGHT Wireless Gaming Mouse (Magenta)</h3>
          <div class="card_description">
            <p>A result of our continued collaboration with top esports pros, PRO X SUPERLIGHT is engineered with a single goal—to create the lightest possible PRO wireless gaming mouse </p>
           
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱8,695.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="29">
          <div class="img_container">
            <img src="img_products/Mouse & Keyboards/Logitech G PRO X TKL Wireless Gaming Keyboard (Black).jpg" alt="product image">
          </div>
          <h3>Logitech G PRO X TKL Wireless Gaming Keyboard (Black)</h3>
          <div class="card_description">
            <p>The next evolution of the PRO keyboard, delivering the championship-trusted performance and reliability of 
              LIGHTSPEED wireless with a tenkeyless form factor designed for the highest level of competitive play.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱11,495.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="30">
          <div class="img_container">
            <img src="img_products/Mouse & Keyboards/LOGITECH G304 Lightspeed Wireless Gaming Mouse.jpg" alt="product image">
          </div>
          <h3>LOGITECH G304 Lightspeed Wireless Gaming Mouse</h3>
          <div class="card_description">
            <p>LIGHTSPEED wireless gaming mouse designed for serious performance with 
              latest technology innovations. Impressive 250-hour battery life. Now in a variety of vibrant colors.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱2,295.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="31">
          <div class="img_container">
            <img src="img_products/Mouse & Keyboards/LOGITECH MK345 COMFORT Wireless Keyboard and Mouse Combo (Black).jpg" alt="product image">
          </div>
          <h3>LOGITECH MK345 COMFORT Wireless Keyboard and Mouse Combo (Black)</h3>
          <div class="card_description">
            <p>LIGHTSPEED wireless gaming mouse designed for serious performance with latest 
              technology innovations. Impressive 250-hour battery life. Now in a variety of vibrant colors.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱1,845.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="32">
          <div class="img_container">
            <img src="img_products/Mouse & Keyboards/RAZER BLACKWIDOW V3 TKL Yellow Switch Chroma RGB Tenkeyless Wired Keyboard.jpg" alt="product image">
          </div>
          <h3>RAZER BLACKWIDOW V3 TKL Yellow Switch Chroma RGB Tenkeyless Wired Keyboard</h3>
          <div class="card_description">
            <p>Mean performance in a leaner form—enter the Razer BlackWidow V3 Tenkeyless. </p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱3,950.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>
      
      <!-- Power Supply-->

      <div class="product_card" id="33">
          <div class="img_container">
            <img src="img_products/Power Supply/ANTEC NE 850GOLD M 850W 80+ GOLD Full Modular True Rated Power Supply.jpg" alt="product image">
          </div>
          <h3>ANTEC NE 850GOLD M 850W 80+ GOLD Full Modular True Rated Power Supply</h3>
          <div class="card_description">
            <p>Featured 100% full modular design and 80 PLUS Gold certification, the NeoECO Gold Modular series keeps your PC hardware installation convenient and clean.</p>
           
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱6,600.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="34">
          <div class="img_container">
            <img src="img_products/Power Supply/ASUS ROG STRIX 1000W 80+ Gold Fully Modular Power Supply.jpg" alt="product image">
          </div>
          <h3>ASUS ROG STRIX 1000W 80+ Gold Fully Modular Power Supply</h3>
          <div class="card_description">
            <p>ROG heatsinks cover critical components, delivering lower temperatures and reduced noise.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱10,950.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="35">
          <div class="img_container">
            <img src="img_products/Power Supply/ASUS TUF GAMING 1200W 80+Gold Full Modular True Rated Power Supply.jpg" alt="product image">
          </div>
          <h3>ASUS TUF GAMING 1200W 80+Gold Full Modular True Rated Power Supply</h3>
          <div class="card_description">
            <p>Capacitors and chokes pass demanding tests to achieve Military-grade Certification.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱13,950.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="36">
          <div class="img_container">
            <img src="img_products/Power Supply/GIGABYTE 850W GP-UD850GM 80+ GOLD Fully Modular Power Supply.jpg" alt="product image">
          </div>
          <h3>GIGABYTE 850W GP-UD850GM 80+ GOLD Fully Modular Power Supply</h3>
          <div class="card_description">
            <p>Ultra Durable, 80 PLUS Gold certified,Powerful single +12V rail </p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱7,800.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="37">
          <div class="img_container">
            <img src="img_products/Power Supply/MSI 750W MPG A750GF 80+Gold Fully Modular True Rated Power Supply (White).jpg" alt="product image">
          </div>
          <h3>MSI 750W MPG A750GF 80+Gold Fully Modular True Rated Power Supply (White)</h3>
          <div class="card_description">
            <p>Supports the NVIDIA GeForce RTX™ 30 Series GPUs</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱6,150.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="38">
          <div class="img_container">
            <img src="img_products/Power Supply/THERMALTAKE Litepower 550W Power Supply.jpg" alt="product image">
          </div>
          <h3>THERMALTAKE Litepower 550W Power Supply</h3>
          <div class="card_description">
            <p>Incorporating various high-quality components, the new Litepower Series – rated from 350W to 650W – saves energy up to 80% efficiency.</p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱1,995.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="39">
          <div class="img_container">
            <img src="img_products/Power Supply/THERMALTAKE TOUGHPOWER GF 850W 80+ Gold Fully-Modular Power Supply.jpg" alt="product image">
          </div>
          <h3>THERMALTAKE TOUGHPOWER GF 850W 80+ Gold Fully-Modular Power Supply</h3>
          <div class="card_description">
            <p>The Toughpower GF 850W is built to deliver 80 PLUS Gold efficiency with up to 90% of it. </p>
           
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱6,350.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>

      <div class="product_card" id="40">
          <div class="img_container">
            <img src="img_products/Power Supply/THERMALTAKE TOUGHPOWER GF1 750W 80+ Gold ARGB Modular Power Supply.jpg" alt="product image">
          </div>
          <h3>THERMALTAKE TOUGHPOWER GF1 750W 80+ Gold ARGB Modular Power Supply</h3>
          <div class="card_description">
            <p>Toughpower GF1 ARGB Gold Series (650W/750W/850W) is crafted by using cutting-edge technology and materials to become the fusion of aesthetics and performance. </p>
            
          </div>
          <div class="card_buttons">
            <label class="cost_label">₱5,400.00</label>
            <button class="card_button btn_cart">Add to Cart</button>
          </div>
      </div>
    </div>
  </main>
 
</div>

</body>
</html>
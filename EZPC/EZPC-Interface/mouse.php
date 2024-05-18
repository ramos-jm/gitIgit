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
      
  </main>
 
</div>

</body>
</html>
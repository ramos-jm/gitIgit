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

    </div>
  </main>
 
</div>

</body>
</html>
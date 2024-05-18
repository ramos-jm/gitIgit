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
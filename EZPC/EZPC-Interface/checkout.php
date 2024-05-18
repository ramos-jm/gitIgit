<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EZPC Store - Checkout</title>
    <link rel="icon" type="image/png" href="img_PCGuide/favicon.png">
    <link rel="stylesheet" href="css/default.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <style>
/* Reset and global styles */
/* Global styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Cairo', sans-serif; /* Change font-family to Cairo */
    background-color: white;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    display: flex;
    max-width: 1000px;
    width: 90%;
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.checkout-form, .order-summary {
    padding: 20px;
}

.checkout-form {
    flex: 2;
    padding-right: 30px;
    border-right: 1px solid #f0f0f0;
}

.order-summary {
    flex: 1;
    padding-left: 30px;
}

h2 {
    margin-bottom: 20px;
    font-weight: 500;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #555;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
}

.form-group input[type="checkbox"],
.form-group input[type="radio"] {
    width: auto;
    margin-right: 10px;
}

.checkbox-container,
.radio-container {
    display: block;
    position: relative;
    padding-left: 25px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    user-select: none;
}

.checkbox-container input,
.radio-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.checkmark,
.radiomark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 4px;
}

.checkbox-container:hover input ~ .checkmark,
.radio-container:hover input ~ .radiomark {
    background-color: #ccc;
}

.checkbox-container input:checked ~ .checkmark {
    background-color: #007bff;
}

.radio-container input:checked ~ .radiomark {
    background-color: #007bff;
}

.checkmark:after,
.radiomark:after {
    content: "";
    position: absolute;
    display: none;
}

.checkbox-container input:checked ~ .checkmark:after {
    display: block;
}

.radio-container input:checked ~ .radiomark:after {
    display: block;
}

.checkbox-container .checkmark:after {
    left: 7px;
    top: 3px;
    width: 6px;
    height: 12px;
    border: solid white;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
}

.radio-container .radiomark {
    border-radius: 50%;
}

.radio-container .radiomark:after {
    top: 5px;
    left: 5px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: white;
}

.item {
    display: flex;
    margin-bottom: 20px;
}

.item-image {
    width: 80px;
    height: 80px;
    margin-right: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    object-fit: cover;
}

.item-details {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.item-details p {
    margin: 0;
    font-weight: 300;
}

.summary {
    margin-top: 20px;
}

.discount {
    margin-bottom: 20px;
}

.discount label {
    font-weight: 500;
}

.discount input {
    width: calc(100% - 80px);
    display: inline-block;
}

.discount button {
    width: 60px;
    display: inline-block;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.discount button:hover {
    background-color: #0056b3;
}

.totals {
    font-size: 1.1em;
    font-weight: 500;
    color: #555;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}


    </style>
</head>
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

<body>
<div class="container">
        <div class="checkout-form">
            <h2>Contact</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <label>
                    <input type="checkbox" name="subscribe"> Email me with news and offers
                </label>
            </div>

            <h2>Delivery</h2>
            <div class="form-group">
                <label for="country">Country/Region</label>
                <select id="country" name="country">
                    <option value="philippines">Philippines</option>
                </select>
            </div>
            <div class="form-group">
                <label for="first-name">First name</label>
                <input type="text" id="first-name" name="first-name" placeholder="Enter your first name">
                <label for="last-name">Last name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Enter your last name">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your address">
                <label for="apartment">Apartment, suite, etc. (optional)</label>
                <input type="text" id="apartment" name="apartment" placeholder="Enter your apartment, suite, etc.">
            </div>
            <div class="form-group">
                <label for="postal-code">Postal code</label>
                <input type="text" id="postal-code" name="postal-code" placeholder="Enter your postal code">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Enter your city">
            </div>
            <div class="form-group">
                <label for="region">Region</label>
                <select id="region" name="region">
                    <!-- Add options here -->
                </select>
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
            </div>
            <label>
                <input type="checkbox" name="save-info"> Save this information for next time
            </label>

            <h2>Shipping method</h2>
            <div class="form-group">
                <input type="text" id="shipping-method" name="shipping-method" placeholder="Enter your shipping address to view available shipping methods" disabled>
            </div>

            <h2>Payment</h2>
            <div class="form-group">
                <label>
                    <input type="radio" name="payment-method" value="paymongo"> Secure Payments via PayMongo
                </label>
                <label>
                    <input type="radio" name="payment-method" value="cod-metro-manila"> Cash On Delivery - Metro Manila
                </label>
                <label>
                    <input type="radio" name="payment-method" value="cod-philippines"> Cash On Delivery - The Rest Of The Philippines (Nationwide)
                </label>
            </div>
        </div>

        <div class="order-summary">
            <h2>Order Summary</h2>
            <div class="item">
                <img src="img_PCGuide/cart.jpg" alt="Product Image" class="item-image">
                <div class="item-details">
                    <p>AMD Ryzen 9 7950X 16-Core, 32-Thread Processor</p>
                    <p>Qty: 1</p>
                    <p>$699.00</p>
                </div>
            </div>
            <div class="item">
                <img src="img_PCGuide/cart.jpg" alt="Product Image" class="item-image">
                <div class="item-details">
                    <p>ASUS ROG Strix B550-F Gaming Motherboard</p>
                    <p>Qty: 1</p>
                    <p>$299.00</p>
                </div>
            </div>
            <div class="item">
                <img src="img_PCGuide/cart.jpg" alt="Product Image" class="item-image">
                <div class="item-details">
                    <p>G.Skill Trident Z RGB 32GB (2 x 16GB) DDR4 3200</p>
                    <p>Qty: 1</p>
                    <p>$189.00</p>
                </div>
            </div>
            <div class="summary">

                <p class="totals">Subtotal: $1,187.00</p>
                <p class="totals">Shipping: $10.00</p>
                <p class="totals">Total: $1,197.00</p>
            </div>
            <button type="submit">Complete Order</button>
        </div>
    </div>
    
</body>
</html>

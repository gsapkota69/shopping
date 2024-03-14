function initiateCart(username) {
    let cart = JSON.parse(localStorage.getItem("cart"));
    if (!cart) {
        localStorage.setItem("cart", "{}");
    }
    cart = JSON.parse(localStorage.getItem("cart"));
    let cartCreated = username in cart;
    if (!cartCreated) {
        cart[username] = [];
        console.log(cart);
    }
    console.log(cart, username);
    localStorage.setItem("cart", JSON.stringify(cart));
}

function addToCart(username) {
    if (username == "") {
        alert("Login to proceed!");
        return;
    }
    let name = document.getElementsByName("product_name")[0].innerText;
    let price = document.getElementsByName("product_price")[0].innerText;
    let quantity = document.getElementsByName("product_quantity")[0].value;
    let size = document.getElementsByName("product_size")[0].value;

    //Create an object for selected product
    let product = {
        name,
        price,
        quantity,
        size,
    };

    //Get cart of all users who used the browser
    let cartArray = JSON.parse(localStorage.getItem("cart"));

    //Get cart of the logged in user
    let storedCart = cartArray[username];

    //Creating a variable for use in next line
    let productFound = false;
    storedCart.forEach((product) => {
        //If the cart already has product of same name then increase the quantity instead of creating new object
        if (product.name == name && product.size == size) {
            productFound = true; //If the cart already has product of same name set true
            productQuantity = +product.quantity; //Since the data in local storage is stored as string converting to number
            extraQuantity = +quantity; //Same as above but in case of the data given by user
            product.quantity = productQuantity + extraQuantity; //Add the quantity
        }
    });

    //If the product was not found in the cart, add new object
    if (!productFound) {
        storedCart.push(product);
    }

    //Changing the cart of logged in user with new data
    cartArray[username] = storedCart;

    //Setting new data in local storage
    localStorage.setItem("cart", JSON.stringify(cartArray));
    alert("Added to cart!");
    return false;
}

function loadCart(username) {
    const tableBody = document.getElementById("tableBody");
    let dataInCart = "";

    let cartArray = JSON.parse(localStorage.getItem("cart"));
    let totalCost = 0;
    let totalQuantity = 0;
    let numOfItem = 0;
    let storedCart = cartArray[username];
    storedCart.forEach((product) => {
        let rate = +product.price.slice(1);
        let quantity = +product.quantity;
        let price = rate * quantity;
        totalQuantity += quantity;
        totalCost += price;
        dataInCart += `
        <tr>
            <th scope="row">${++numOfItem}</th>
            <td>${product.name}</td>
            <td>${product.size}</td>
            <td>${quantity}</td>
            <td>${rate}</td>
            <td>${price}</td>
            <td><button style="width: 50%;background: none;border: 0;" onclick='removeFromCart("${username}", "${
            product.name
        }", "${
            product.size
        }")'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></button></td>
        </tr>
        `;
    });
    document.getElementById("paymentButton").href =
        "payment.php?cost=" + totalCost + "&quantity=" + totalQuantity;
    tableBody.innerHTML = dataInCart;
}

function removeFromCart(username, productName, productSize) {
    let cartArray = JSON.parse(localStorage.getItem("cart"));
    let storedCart = cartArray[username];
    let newCart = storedCart.filter((product) => {
        return product.name != productName || product.size != productSize;
    });
    cartArray[username] = newCart;
    localStorage.setItem("cart", JSON.stringify(cartArray));
    alert("Removed from cart!");
    loadCart(username);
    return;
}

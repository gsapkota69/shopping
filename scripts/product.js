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
    console.log(cartArray);
    let numOfItem = 0;
    let storedCart = cartArray[username];
    console.log(cartArray[username]);
    storedCart.forEach((product) => {
        let rate = +product.price.slice(1);
        let quantity = +product.quantity;
        let price = rate * quantity;
        dataInCart += `
        <tr>
            <th scope="row">${++numOfItem}</th>
            <td>${product.name}</td>
            <td>${product.size}</td>
            <td>${quantity}</td>
            <td>${rate}</td>
            <td>${price}</td>
        </tr>
        `;
    });
    tableBody.innerHTML = dataInCart;
}

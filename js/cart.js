let cartItems = document.getElementById("cart-items");
let cartTotal = document.getElementById("cart-total");
let cartCount = document.getElementById("cart-count");
let total = 0;
let itemCount = 0;

document.querySelectorAll(".add-to-cart").forEach((button) => {
  button.addEventListener("click", () => {
    let title = button.getAttribute("data-title");
    let price = parseFloat(button.getAttribute("data-price"));
    let image = button.getAttribute("data-image");
    addItemToCart(title, price, image);
  });
});

function addItemToCart(title, price, image) {
  itemCount++;
  total += price;

  let cartItem = document.createElement("li");
  cartItem.classList.add(
    "list-group-item",
    "d-flex",
    "justify-content-between",
    "align-items-center"
  );
  cartItem.innerHTML = `
        <div>
            <img src="${image}" style="width: 50px; height: 50px; object-fit: cover;">
            <span>${title}</span></div>
        <span>$${price.toFixed(2)}</span>
        <button class="btn btn-danger btn-sm" id="remove-from-cart">Remove</button>
    `;

  cartItems.appendChild(cartItem);

  cartItem.querySelector("#remove-from-cart").addEventListener("click", () => {
    removeItemFromCart(cartItem, price);
  });

  updateCart();
}

function removeItemFromCart(cartItem, price) {
  itemCount--;
  total -= price;
  cartItem.remove();
  updateCart();
}

function updateCart() {
  cartTotal.textContent = `${total.toFixed(2)}`;
  cartCount.textContent = itemCount;
}

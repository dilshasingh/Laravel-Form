// public/js/form.js
document.querySelector('form').addEventListener('submit', function (event) {
    let name = document.getElementById('name').value;
    let qty = document.getElementById('qty').value;
    let price = document.getElementById('price').value;
    
    if (!name || !qty || !price) {
        alert('Please fill out all required fields.');
        event.preventDefault();
    }
});

const add_button = document.getElementById('add__to__cart');

add_button.addEventListener('click' , function(event){
    event.preventDefault();
    add_button.classList.add('added');
    add_button.style.animation = "added 400ms ease";

});
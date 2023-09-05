
const open_cart = document.querySelector('#open-cart');
const cart = document.getElementById('navigation');
const cover = document.getElementById('cover');
const close_cart = document.querySelector('#close-cart');
open_cart.addEventListener('click' , open_cart_func);
close_cart.addEventListener('click', close_cart_func);
function open_cart_func(){
    if(window.innerWidth < 768){
        cart.style.right= '0%';
    }else {
        cover.style.display = 'block';
        cart.style.display = 'block';
        cover.style.animation = 'pop-in 500ms ease'
        cart.style.animation = 'pop-in 500ms ease'
        cover.style.filter = "opacity(100%)";
        cart.style.filter = "opacity(100%)";
        cover.documentElement.style.overflow = 'hidden';
        cart.documentElement.style.overflow = 'hidden';
    }


}
function close_cart_func(){
    if(window.innerWidth < 768){
        cart.style.right= '-100%';
    }else{
        cover.style.animation = 'pop-out 500ms ease'
        cart.style.animation = 'pop-out 500ms ease'
        cover.style.filter = "opacity(0%)";
        cart.style.filter = "opacity(0%)";
        setTimeout(() => {
            cover.style.display = 'none';
            cart.style.display = 'none';
        }, 500);
        cart.style.overflow = '';

    }

}

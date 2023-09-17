const admins = document.getElementById('admins');
const add = document.getElementById('add');
const dashboard = document.getElementById('dashboard');
const cart = document.getElementById('cart');
const side = document.getElementById('sidebar');
const dashboard_sec = document.getElementById('dashboard-sec');
const add_post_sec = document.getElementById('add-post-sec');
const admins_sec = document.getElementById('admin-sec');
const action_button_delete = document.getElementById('third_div');
const action_button_promote = document.getElementById('third_div_two');
const action_button_delete_info = document.getElementById('info1');
const action_button_promote_info = document.getElementById('info2');
const add_new_admin = document.getElementById('add_new_admin');
const add_new_admin_btn = document.getElementById('add_new_admin_btn');
const cancel_add_new_admin = document.getElementById('cancel_add_new_admin')
dashboard.classList.add('selected');

var oldScrollY = window.scrollY;
window.onscroll = function(e) {
    if(oldScrollY < window.scrollY){
        side.style.bottom = '-100%';
        side.style.animation = 'hide-side 800ms ease';

    } else {
        side.style.bottom = '0';
        side.style.animation = 'show-side 200ms ease';
    }
    oldScrollY = window.scrollY;
}

add_new_admin_btn.addEventListener('click' , function(event) {
    add_new_admin.classList.remove('hide-sec')
})
cancel_add_new_admin.addEventListener('click' , function(){
    add_new_admin.classList.add('hide-sec')
})
admins.addEventListener('click' , function(event){
    admins.classList.add('selected');
    add.classList.remove('selected');
    cart.classList.remove('selected');
    dashboard.classList.remove('selected');


    dashboard_sec.classList.add('hide-sec');
    add_post_sec.classList.add('hide-sec');
    admins_sec.classList.remove('hide-sec');

});

add.addEventListener('click' , function(event){
    admins.classList.remove('selected');
    add.classList.add('selected');
    cart.classList.remove('selected');
    dashboard.classList.remove('selected');


    dashboard_sec.classList.add('hide-sec');
    add_post_sec.classList.remove('hide-sec');
    admins_sec.classList.add('hide-sec');

});

dashboard.addEventListener('click' , function(event){
    admins.classList.remove('selected');
    add.classList.remove('selected');
    cart.classList.remove('selected');
    dashboard.classList.add('selected');
    dashboard_sec.classList.remove('hide-sec');
    add_post_sec.classList.add('hide-sec');
    admins_sec.classList.add('hide-sec');

});

cart.addEventListener('click' , function(event){
    admins.classList.remove('selected');
    add.classList.remove('selected');
    cart.classList.add('selected');
    dashboard.classList.remove('selected');
});

action_button_delete.addEventListener('mouseover' , function(event){
    event.preventDefault();
    action_button_delete_info.style.display = 'block';
});
action_button_delete.addEventListener('mouseout' , function(event){
    event.preventDefault();

    action_button_delete_info.style.display = 'none';

});

action_button_promote.addEventListener('mouseover' , function(event){
    console.log('salsm')
    event.preventDefault();
    action_button_promote_info.style.display = 'block';
});
action_button_promote.addEventListener('mouseout' , function(event){
    event.preventDefault();

    action_button_promote_info.style.display = 'none';

});

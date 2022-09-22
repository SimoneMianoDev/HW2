var menu = 'close';

function MenuMobile(){
    var mobile_menu = document.getElementById('mobile_menu');
    var iconmenu = document.getElementById('iconmenu');

    if(menu== 'close'){
        mobile_menu.style.width='100%';
        nav_style.style.height= 'auto';
        menu='open';
        iconmenu.src='./images/menu-open.png';
    }else{
        mobile_menu.style.width='0%';
        nav_style.style.height= '75px';
        menu='close';
        iconmenu.src= './images/menu-close.png';
    }
}
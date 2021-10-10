const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabItem = $$('.tab-item');
const tabInfo = $$('.tab-info');
const tab_item_child = $$('.tab-item-child');
const tab_info_child = $$('.tab-info-child');
tabItem.forEach((tab,index) => {
    const info = tabInfo[index];
    tab.onclick = function(){
        const getTag = tab.getElementsByTagName('div');
        if($('.tab-item.nav-item')){
            $('.tab-item.nav-item').classList.remove('nav-item');
        }
        if($('.tab-item-child.nav-item')){
            $('.tab-item-child.nav-item').classList.remove('nav-item');
        }
        if($('.tab-info.active')){
            $('.tab-info.active').classList.remove('active');
        }
        if($('.tab-info-child.active')){
            $('.tab-info-child.active').classList.remove('active');
        }
        tab.classList.add('nav-item');
        info.classList.add('active');
        getTag[0].classList.toggle('active-list');
        getTag[0].onclick = function(e){
            e.stopPropagation();
        }
    }
});

tab_item_child.forEach((tab_child,index) => {
    const info = tabInfo[0];
    const info_child = tab_info_child[index];
    tab_child.onclick = function(){
        if($('.tab-item.nav-item')){
            $('.tab-item.nav-item').classList.remove('nav-item');
        }
        if($('.tab-item-child.nav-item')){
            $('.tab-item-child.nav-item').classList.remove('nav-item');
        }
        if($('.tab-info-child.active')){
            $('.tab-info-child.active').classList.remove('active');
        }
        if($('.tab-info.active')){
            $('.tab-info.active').classList.remove('active');
        }
        tab_child.classList.add('nav-item');
        info_child.classList.add('active');
        info.classList.remove('active');
    }
});
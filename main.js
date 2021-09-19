const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabItem = $$('.tab-item');
const tabInfo = $$('.tab-info');
tabItem.forEach((tab,index) => {
    const info = tabInfo[index];
    tab.onclick = function(){
        $('.nav-item.tab-item').classList.remove('nav-item');
        $('.tab-info.active').classList.remove('active');
        tab.classList.add('nav-item');
        info.classList.add('active');
    }
})
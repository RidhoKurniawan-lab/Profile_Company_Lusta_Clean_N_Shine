document.addEventListener('DOMContentLoaded', initApp);

function initApp() {
    animNav('#navMenu', '#bg-nav-item');      
    sidebar();
    animScroll();
    animScrollEl();
}

function animScrollEl() {
    const item = document.querySelectorAll('.anim-scroll');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('right') || entry.target.classList.contains('left')) {
                    entry.target.classList.add('X', 'shows');
                }else {
                    entry.target.classList.add('Y', 'shows');
                }
                observer.unobserve(entry.target);
                }
            
        })
    }, {threshold: 0.2});

     item.forEach(el => observer.observe(el));
}

function animNav(nav, bgNavitem){
    let index = 0;
    const navItem = document.querySelectorAll(`${nav} .nav-item`);
    const bgNav = document.querySelector(bgNavitem);
    const path = window.location.pathname;

    navItem.forEach(item => {
        item.addEventListener('click', () => {
            movebg(item, bgNav);  
            navItem.forEach(i => {
                i.classList.remove('on');
                i.classList.replace('text-black', 'text-white');
                i.classList.add('hover-btn');
            });
            item.classList.remove('hover-btn');
            item.classList.replace('text-white', 'text-black');
            item.classList.add('on');

            bgNav.addEventListener('transitionend', (e) => {
                if (e.propertyName === 'left') {
                    window.location.href = item.dataset.url;
                }
            });
        })  
    })

    if (path === '/user/product') {
        index = 1;
    }else if(path === '/user/about') {
        index = 2;
    }else if(path === '/user/contact') {
        index = 3;
    }else{
        index = 0;
    }

    if (navItem.length > 0) {
    const activeItem = navItem[index];
    const parentRect = activeItem.parentElement.getBoundingClientRect();
    const rect = activeItem.getBoundingClientRect();
    bgNav.style.transition = 'none';
    bgNav.style.width = rect.width + 'px';
    bgNav.style.left = rect.left - parentRect.left + 'px';

    setTimeout(() => {
        bgNav.style.transition = 'all 0.3s ease';
    }, 10);

    for(i = 0; i < navItem.length; i++){
        if (i !== index) {
            navItem[i].classList.replace('text-black', 'text-white');
            navItem[i].classList.add('hover-btn');
        }
    }
    }
}

function movebg(item, bgNav){
    const parentRect = item.parentElement.getBoundingClientRect(); // ambil rect ul
    const  rect = item.getBoundingClientRect(); // ambil rect item
    bgNav.style.width = rect.width + 'px';
    bgNav.style.left = rect.left - parentRect.left + 'px';

    setTimeout(() => {
        bgNav.style.transition = 'all 0.8s ease';
    }, 10);
}

function sidebar(){
    const sidebar = document.querySelector('#sidebar');
    const burger = document.querySelector('#burger');
    const close = document.querySelector('#close-burger');
    const overlay = document.querySelector('#overlay');
    const body = document.body;

    if(!burger) return;
    
    burger.addEventListener('click', () => {
        sidebar.style.transform = 'translateX(-370px)';
        overlay.classList.replace('d-none', 'd-block');
        body.classList.add('overflow-hidden');
        close.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(0px)';
            overlay.classList.replace('d-block', 'd-none')
            body.classList.remove('overflow-hidden');
        })
    });
}

function animScroll(){
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if(window.scrollY >= 140){
            nav.classList.add('bg-white');
        }else{
            nav.classList.remove('bg-white');
        }
    });
}
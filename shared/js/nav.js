document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.getElementById('nav-toggle');
    const navList = document.getElementById('nav__list--sp');
    const navLinks = document.querySelectorAll('#nav__list a');

    navToggle.addEventListener('click', function() {
        navList.classList.toggle('active');
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navList.classList.remove('active');
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var navItems = document.querySelectorAll("#nav__list--pc > li");

    navItems.forEach(function(navItem) {
        navItem.addEventListener("mouseenter", function() {
            var submenu = navItem.querySelector(".submenu");
            if (submenu) {
                submenu.style.display = "block";
            }
        });

        navItem.addEventListener("mouseleave", function() {
            var submenu = navItem.querySelector(".submenu");
            if (submenu) {
                submenu.style.display = "none";
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    // 全てのメインメニューを取得
    var mainMenus = document.querySelectorAll(".spnav-mainmenu");

    mainMenus.forEach(function(mainMenu) {
        mainMenu.addEventListener("click", function() {
            // 現在のサブメニューを取得
            var submenu = mainMenu.nextElementSibling;

            // サブメニューの表示/非表示を切り替える
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
                mainMenu.classList.toggle('active');
            } else {
                submenu.style.display = "block";
                mainMenu.classList.toggle('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var menus = document.querySelectorAll('.spnav-mainmenu');

    menus.forEach(function(menu) {
        menu.addEventListener('click', function() {
            // active クラスのトグル
            if (menu.classList.contains('active')) {
                menu.classList.remove('active');
            } else {
                menu.classList.add('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.getElementById('nav-toggle');
    const bars = document.querySelectorAll('.bar');

    navToggle.addEventListener('click', function () {
        bars.forEach(bar => bar.classList.toggle('transform'));
    });
});
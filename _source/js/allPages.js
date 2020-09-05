// init base functions and plugins
$(window).on('load', function () {
    //classOnBody($('main').attr('id'));
    scrollDirection();
    initGettersAndSetters();
    changeTouchClickText();
});
$(window).on('hashchange', function () {
    initGettersAndSetters();
});

// layout and sections scripts
// -> #
if ($('#page__home').length) {
    $('body').addClass('is-homePage');
} else {
    $('body').addClass('is-innerPage');
}
if ($('#page__inner').length) {
    $("#customer-type-person").on('change', function() {
        if(this.checked) {
            $('.customer-type.customer-type-company').hide();
            $('.customer-type.customer-type-person').slideDown();
        }
    });
    $("#customer-type-company").on('change', function() {
        if(this.checked) {
            $('.customer-type.customer-type-company').slideDown();
            $('.customer-type.customer-type-person').hide();
        }
    });
    $('.js-login-recoverpassword').on('click', function() {
        $('body').addClass('u-overflowBlocked');
        $('.l-modal__recovery').addClass('is-active');
    });
}

// -> l-
if ($('.l-nav').length) {
    var propsNav = {
        active: 'is-active',
        scrollInit: 0,
        scrollClassScrolled: 99,
        scrollClassMiddle: 600,
        body: $('body'),
        nav: $('.l-nav'),
        hamburguer: $('.l-nav .c-hamburguer'),
        contentHero: $('.l-nav__contentHero'),
        mask: $('.l-nav__maskMenu'),
        maskAll: $('.l-nav__maskMenu.maskAll'),
    };

    function checkResponsiveMode() {
        var resultCheck;
        var displayCheck = propsNav.hamburguer.css('display');
        if (displayCheck !== 'none') {
            resultCheck = 'is-responsive';
            propsNav.nav.removeClass('is-desktop');
            propsNav.nav.addClass('is-responsive');
        } else {
            resultCheck = 'is-desktop';
            propsNav.nav.removeClass('is-responsive');
            propsNav.nav.addClass('is-desktop');
        }
        return resultCheck;
    }
    function closeAllSubMenus() {
        $('.c-subMenu').removeClass('is-active');
    }
    function closeResponsiveMenu() {
        propsNav.hamburguer.removeClass(propsNav.active);
        propsNav.contentHero.removeClass(propsNav.active);
    }
    function hideMaskMenu() {
        propsNav.mask.removeClass(propsNav.active);
    }
    function disableOverflow() {
        propsNav.body.addClass('u-overflowBlocked');
    }
    function enableOverflow() {
        propsNav.body.removeClass('u-overflowBlocked');
    }


    // RESPONSIVE MENU
    // - open / close
    propsNav.hamburguer.on('click', function() {
        if ($(this).hasClass(propsNav.active)) {
            // close menu
            enableOverflow();
            $(this).removeClass(propsNav.active);
            propsNav.maskAll.removeClass(propsNav.active);
            propsNav.contentHero.removeClass(propsNav.active);
        } else {
            // open menu
            disableOverflow();
            $(this).addClass(propsNav.active);
            propsNav.maskAll.addClass(propsNav.active);
            propsNav.contentHero.addClass(propsNav.active);
        }
    });
    // - close
    propsNav.maskAll.on('click', function(){
        closeResponsiveMenu();
        hideMaskMenu();
        closeAllSubMenus();
        enableOverflow();
    });


    // RESPONSIVE MODE
    $(window).on('resize', function() {
        if (checkResponsiveMode() === "is-desktop") {
            if (propsNav.contentHero.hasClass(propsNav.active)) {
                closeAllSubMenus();
                closeResponsiveMenu();
                hideMaskMenu();
            }
        }
    });


    // SCROLL CHANGES
    $(window).on('load', function(event) {
        checkResponsiveMode();
        var scrollBody = $(this).scrollTop();
        if (scrollBody > 1) {
            propsNav.nav.addClass('scrolled');
        } else {
            propsNav.nav.removeClass('scrolled');
        }
    });
    $(window).on('scroll', function() {
        var scrollBody = $(this).scrollTop();
        // scroll up to 99
        if (scrollBody > propsNav.scrollClassScrolled) {
            propsNav.nav.addClass('scrolled');
        } else {
            propsNav.nav.removeClass('scrolled');
        }
        // middle class
        if (scrollBody > propsNav.scrollClassMiddle) {
            propsNav.nav.addClass('hidden');
            propsNav.nav.addClass('scrolledMiddle');
        } else {
            propsNav.nav.removeClass('hidden');
            propsNav.nav.removeClass('scrolledMiddle');
        }
        // scroll up or down
        if (scrollBody < propsNav.scrollInit) {
            propsNav.nav.removeClass('hidden');
            propsNav.nav.addClass('scrolledUp');
            propsNav.nav.removeClass('scrolledDown');
        } else {
            propsNav.nav.removeClass('scrolledUp');
            propsNav.nav.addClass('scrolledDown');
        }
        // close menus on hidden nav
        if(propsNav.nav.hasClass('hidden')) {
            closeAllSubMenus();
            hideMaskMenu();
        }
        // reference var
        propsNav.scrollInit = scrollBody;
    });


    // NAV SUPOORT SUB MENU
    $('.support__close').on('click', function() {
        $('.l-nav__support .c-subMenu').removeClass('is-active');
    })


    // SEARCH
    $('.l-nav__search').on('click', function () {
        $('body').addClass('u-overflowBlocked');
        $('.l-modal__search').addClass('is-active');
        setTimeout(function(){
            $('.l-modal .c-search input').focus();
        }, 500);
    })

}
if ($('.l-modal').length) {
    $('.l-modal__close').on('click', function() {
        $('.l-modal').removeClass('is-active');
        $('body').removeClass('u-overflowBlocked');
    });
}

// -> s-
if ($('.s-filters').length) {
    $('.facet-title').addClass('facet-closed');

    $('.facet-title').on('click', function () {
        $('.facet-title').addClass('facet-closed');
        $(this).removeClass('facet-closed');
    })
}
if ($('.s-cart').length) {
    $('.list__remove').on('click', function() {
        var confirmW = confirm("Deseja realmente remover este produto do carrinho?");
        var thisElement = $(this);
        if (confirmW == true) {
            thisElement.closest('.list__item').addClass('is-removed');
            setTimeout(function(){
                thisElement.closest('.list__item').remove();
            }, 1000);
        }
    })
}
if ($('.s-introProduct').length) {
    $('.s-introProduct .c-saleProduct__shopNow .c-btn').on('click', function() {
        $('.s-introProduct').addClass('is-active');
    });
    $('.s-introProduct .c-saleProduct__shopPair .c-btn').on('click', function() {
        $('.s-introProduct').addClass('is-active');
    });
    $('.s-introProduct .c-saleProduct__close').on('click', function() {
        $('.s-introProduct').removeClass('is-active');
    });
}
if ($('.s-mobileFixedProduct').length) {
    // position on scroll - fix nav android
    $(window).on('scroll', function() {
        if (is.mobile()) {
            if ($('.l-nav').hasClass('scrolledUp')) {
                $('.s-mobileFixedProduct').addClass('is-mobile');
            } else {
                $('.s-mobileFixedProduct').removeClass('is-mobile');
            }
        }
    });

    // toggle price
    $('.s-mobileFixedProduct__parts a').on('click', function(e) {
        e.preventDefault();
        $('.s-mobileFixedProduct__parts a').removeClass('is-active');
        $(this).addClass('is-active');
        //
        var hrefThis = $(this).attr('href');
        $('.s-mobileFixedProduct__price > div').addClass('u-dnone');
        $(hrefThis).removeClass('u-dnone');
    });

    // open modal
    $('.s-mobileFixedProduct__btn .c-btn').on('click', function () {
        $('body').addClass('u-overflowBlocked');
        $('.l-modal__mobileProductParts').addClass('is-active');
    })
}
if ($('.s-suggestionsProduct').length) {
    var splide__products = new Splide('.splide__products', {
        perPage: 3,
        focus  : 'center',
        arrows: false,
        pagination: false,
        breakpoints: {
            1070: {
                perPage: 2,
            },
            740: {
                padding: {
                    right: '50px',
                    left : '50px',
                },
                perPage: 1,
                pagination: true,
            }
        }
    }).mount();
}
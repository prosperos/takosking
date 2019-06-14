(function ($) {

    var constructor = {}

    function moveToSelected(element) {

        if (element == "next") {
            var selected = $(".selected").next();
        } else if (element == "prev") {
            var selected = $(".selected").prev();
        } else {
            var selected = element;
        }

        var next = $(selected).next();
        var prev = $(selected).prev();
        var prevSecond = $(prev).prev();
        var nextSecond = $(next).next();

        $(selected).removeClass().addClass("selected");

        $(prev).removeClass().addClass("prev");
        $(next).removeClass().addClass("next");

        $(nextSecond).removeClass().addClass("nextRightSecond");
        $(prevSecond).removeClass().addClass("prevLeftSecond");

        $(nextSecond).nextAll().removeClass().addClass('hideRight');
        $(prevSecond).prevAll().removeClass().addClass('hideLeft');

    }

// Eventos teclado
    $(document).keydown(function(e) {
        switch(e.which) {
            case 37: // left
                moveToSelected('prev');
                break;

            case 39: // right
                moveToSelected('next');
                break;

            default: return;
        }
        e.preventDefault();
    });


    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function(){

           // $(".fb-page").appendTo(".wpsl-direction-wrap");
            $(".followers").appendTo(".wpsl-direction-wrap");

            $('.wpsl-directions').text('BUILD A ROUTE');
            $('input[type=submit]#wpsl-search-btn').val('');
        }, 3000);
    }, false);


    $( window ).on( "load", function() {
        setTimeout(function () {
            var preloader = document.getElementById('page-loader');
            if ( !preloader.classList.contains('done')){
                preloader.classList.add('done');
            }
        }, 1000);
    })

    function resizeHandle(windowWidth) {

    }

    function resizeHandleConatiner(windowWidth) {

    }
    var action = false, clicked = false;
    var Owl = {

        init: function() {
            Owl.carousel();
        },

        carousel: function() {
            var owl;
            $(document).ready(function() {
                var windowWidth = $(window).width();
                resizeHandle(windowWidth);
                resizeHandleConatiner(windowWidth);

                if (windowWidth > 991) {
                    //$('div').removeClass('section ');

                    owl = $('.owlExample').owlCarousel({
                        items 	   : 2,
                        nav        : true,
                        dots       : true,
                        loop       : true,
                        dotsContainer: '.test',
                        rtl: true,
                        autoplay:true,
                        autoplayTimeout:3000,
                        autoplayHoverPause:true,
                        autoHeight: true,
                        onInitialized: coverFlowEfx,
                        onTranslate: coverFlowEfx,
                    });

                    $('.bookmarks').on('click', 'a', function(e) {
                        owl.trigger('to.owl.carousel', [$(this).index(), 300]);
                    });

                    function coverFlowEfx(e){
                        if ($('.owl-dots')) {
                            $('.owl-dots').remove();
                        }
                        idx = e.item.index;
                        $('.owl-item.big').removeClass('big');
                        $('.owl-item.medium').removeClass('medium');
                        $('.owl-item.mdright').removeClass('mdright');
                        $('.owl-item.mdleft').removeClass('mdleft');
                        $('.owl-item.smallRight').removeClass('smallRight');
                        $('.owl-item.smallLeft').removeClass('smallLeft');
                        $('.owl-item').eq(idx -1).addClass('medium mdleft');
                        $('.owl-item').eq(idx).addClass('big');
                        $('.owl-item').eq(idx + 1).addClass('medium mdright');
                        $('.owl-item').eq(idx + 2).addClass('smallRight');
                        $('.owl-item').eq(idx - 2).addClass('smallLeft');
                    }
                }
            });

            //mobile app gallery
            $('.owl-theme2').owlCarousel({
                center: true,
                loop: true,
                items: 2,
                onInitialized: coverFlowEfx2,
                onTranslate: coverFlowEfx2,
            });

            function coverFlowEfx2(a){
                idx = a.item.index;
                $('.owl-theme2 .owl-theme2 .owl-item.big').removeClass('big');
                $('.owl-theme2 .owl-item.medium').removeClass('medium');
                $('.owl-theme2 .owl-item.mdright').removeClass('mdright');
                $('.owl-theme2 .owl-item.mdleft').removeClass('mdleft');
                $('.owl-theme2 .owl-item').eq(idx -1).addClass('medium mdleft');
                $('.owl-theme2 .owl-item').eq(idx).addClass('big');
                $('.owl-theme2 .owl-item').eq(idx + 1).addClass('medium mdright');
            }
        }
    };

    function getObjectById(objects_property_name, id) {
        id = parseInt(id)
        var data = window.constructor_data
        if (!data) {
            console.error('No data provided')
            return;
        }
        return data[objects_property_name].find(function(object){ return object.id === id })
    }

    function getProductById(product_id) {
        return getObjectById('products', product_id)
    }

    function getIngridientById(ingiridient_id) {
        return getObjectById('ingridients', ingiridient_id)
    }

    function getIngridinentCategoryById(ingridient_category_id) {
        return getObjectById('ingridient_categories', ingridient_category_id)
    }

    function resetCurrentLineItem() {
        constructor.current_product = undefined
        constructor.ingridients = []
    }

    function addLineItem(product_id, ingridients) {
        constructor.line_items = constructor.line_items || []
        constructor.line_items.push({product_id: product_id, ingridients: ingridients, amount: 1})
        inspect_constructor()
    }

    function incrementLineItem(index) {
        var line_item = constructor.line_items[index]
        if (!line_item) {
            return;
        }
        line_item.amount += 1
        inspect_constructor()
    }

    function decrementLineItem(index) {
        var line_item = constructor.line_items[index]
        if (!line_item) {
            return;
        }
        line_item.amount -= 1
        inspect_constructor()
    }

    function removeLineItem(index) {
        if (index >= 0) {
            constructor.line_items.splice(index, 1);
        }
        inspect_constructor()
    }

    function getCurrentLineItem() {
        return constructor.line_items[constructor.line_items.length - 1]
    }

    function incrementIngridient(ingridient_id) {
        constructor.ingridients = constructor.ingridients || []
        var existing_ingridient = constructor.ingridients.find(function(ingridient) { return ingridient.id === ingridient_id })
        var ingridient_category = getIngridinentCategoryById(getIngridientById(ingridient_id).ingridient_category_id)

        var total_ingridients_amount = 0;
        for (var i = 0; i < constructor.ingridients.length; i++) {
            total_ingridients_amount += constructor.ingridients[i].amount
        }

        if (ingridient_category.type === 'radio') {
            var old_ingridient = constructor.ingridients.find(function(ingridient){
                return ingridient.id !== ingridient_id && getIngridientById(ingridient.id).ingridient_category_id === ingridient_category.id
            })
            if (old_ingridient) {
                constructor.ingridients = constructor.ingridients.filter(function(ingridient){
                    return ingridient.id !== old_ingridient.id
                })
            }
        }
        else {
            var max_amount;
            if (ingridient_category.max_amount_from_product_property) {
                max_amount = constructor.current_product[ingridient_category.max_amount_from_product_property]
                if (!max_amount) {

                }
            }

            constructor.ingridients = constructor.ingridients.filter(function(ingridient){
                return ingridient.id !== old_ingridient.id
            })
        }

        if (constructor.current_product.max_ingridients_amount <= total_ingridients_amount) {
            return;
        }
        if (existing_ingridient) {
            existing_ingridient.amount += 1
        }
        else {
            constructor.ingridients.push({id: ingridient_id, amount: 1})
        }

        showIngridientsAmount(ingridient_id)
    }

    function validateCurrentLineItem() {
        var res = {valid: true}
        if (false) {
            res.valid = false
            res.message = 'Please select all required ingridients'
        }
        return res
    }

    function decrementIngridient(ingridient_id) {
        constructor.ingridients = constructor.ingridients || []
        var existing_ingridient = constructor.ingridients.find(function(ingridient) { return ingridient.id === ingridient_id })
        if (!existing_ingridient) {
            return;
        }
        if (existing_ingridient.amount > 1) {
            existing_ingridient.amount -= 1
        }
        else {
            removeIngridient(ingridient_id)
        }
        showIngridientsAmount(ingridient_id)
    }

    function removeIngridient(ingridient_id) {
        constructor.ingridients = constructor.ingridients.filter(function(ingridient) { return ingridient.id !== ingridient_id })
        showIngridientsAmount(ingridient_id)
    }

    function showIngridientsAmount(ingridient_id) {
        var element = $('[data-ingridient-id=' + ingridient_id + ']').find('.ingridients_amount')
        var existing_ingridient = constructor.ingridients.find(function(ingridient) { return ingridient.id === ingridient_id })
        var amount;
        if (existing_ingridient) {
            amount = existing_ingridient.amount
        }
        else {
            amount = 0
        }
        element.text(amount)
    }

    function renderCartToString() {
        var res = ''
        for (var i = 0; i < constructor.line_items.length; i++) {

        }
        return res
    }

    $(document).ready(function () {
        var windowWidth = $(window).width();
        if (windowWidth > 767) {
        // variables
            var $isAnimatedSecond = $('.second .is-animated'),
                $isAnimatedThird = $('.third .is-animated'),
                $isAnimatedFourth = $('.fourth .is-animated'),
                $isAnimatedFive = $('.five .is-animated');
                $isAnimatedSix = $('.six .is-animated');

            $('#fullpage').fullpage({
                navigation: true,
                navigationPosition: 'right',
                responsiveWidth: 900,
                //fixedElements:'#colophon, .join_up_now',
                //normalScrollElements: '#colophon, .join_up_now',
                //scrollOverflow: true,
                css3:true,
                //scrollBar: true,
                //slidesNavigation: true,
                //offsetSections: true,
                verticalCentered: true,
                onLeave: function(index, nextIndex, direction) {

                    // Second animation
                    if( index == 1 && nextIndex == 2 ) {
                        $isAnimatedSecond.addClass('animated fadeInUpBig');
                        $isAnimatedSecond.eq(0).addClass('animated fadeIn').css('animation-delay', '.9s');
                        $isAnimatedSecond.eq(1).css('animation-delay', '.1s');
                        $isAnimatedSecond.eq(2).css('animation-delay', '.2s');
                        $isAnimatedSecond.eq(3).addClass('animated fadeIn').css('animation-delay', '1.1s');
                    }

                    // Third animation
                    else if( ( index == 1 || index == 2 ) && nextIndex == 3 ) {
                        $isAnimatedThird.eq(0).addClass('animated fadeIn').css('animation-delay', '1.0s');
                        $isAnimatedThird.eq(1).addClass('animated fadeInUp').css('animation-delay', '.3s');
                        $isAnimatedThird.eq(2).addClass('animated fadeInUp').css('animation-delay', '.6s');
                        $isAnimatedThird.eq(3).addClass('animated fadeIn').css('animation-delay', '1.0s');
                    }

                    // fourth animation
                    else if( ( index == 1 || index == 2 || index == 3 ) && nextIndex == 4 ) {

                        $isAnimatedFourth.eq(0).addClass('animated fadeInUp').css('animation-delay', '.3s');
                        $isAnimatedFourth.eq(1).addClass('animated fadeInUp').css('animation-delay', '.6s');
                        $isAnimatedFourth.eq(2).addClass('animated fadeInUp').css('animation-delay', '.6s');

                    }
                    // five animation
                    else if( ( index == 1 || index == 2 || index == 3 || index == 4 ) && nextIndex == 5 ) {
                        $isAnimatedFive.eq(0).addClass('animated fadeInUp').css('animation-delay', '.3s');
                        $isAnimatedFive.eq(1).addClass('animated fadeInUp').css('animation-delay', '.4s');

                    }
                    // six animation
                    else if( ( index == 1 || index == 2 || index == 3 || index == 4 || index ==5 ) && nextIndex == 6 ) {
                        $isAnimatedSix.eq(0).addClass('animated fadeInUp').css('animation-delay', '.3s');
                        $isAnimatedSix.eq(1).addClass('animated fadeIn').css('animation-delay', '1.0s');
                        $isAnimatedSix.eq(2).addClass('animated fadeInUp').css('animation-delay', '.9s');


                    }
                }
            });
            if($('.arrow_next_block')){
                document.querySelector('.arrow_next_block').addEventListener('click', function(e){
                    e.preventDefault();
                    $.fn.fullpage.moveSectionDown();
                });
            }
        }
        $('<span></span>').appendTo('ul.navbar-nav li a');
        // append NEAREST RESTAURANTS in our restorant page
        //$('.wpsl-stores').append("<h2>NEAREST RESTAURANTS</h2>");
        $("<h2>NEAREST RESTAURANTS</h2>").appendTo('.wpsl-stores ul');


        $('#rootwizard').bootstrapWizard({
                tabClass: 'nav nav-tabs',
                onNext: function(tab, navigation, index) {
                    var validation_result = validateCurrentLineItem()
                    if (!validation_result.valid) {
                        alert(validation_result.message)
                        return false
                    }
                    //alert('next');
                    if (index === 1) {
                        constructor.current_product = getProductById($('#tab1 .product_item').attr('data-product-id'))
                    }
                    else {
                        if (index === 2) {
                            addLineItem(constructor.current_product_id, constructor.ingridients)
                            var html =  renderCartToString()
                            $('.cart-container').html(html)
                        }
                        resetCurrentLineItem()
                    }
                }
            }
        );

        //add product on constructor ajax

        $( ".ajax_add_to_cart" ).empty();
        $( ".product_type_simple" ).empty();


        $('.add_to_cart_button').click(function(e){
            if($(this).attr('disabled')) e.preventDefault();
        });

        // $('.ingridients .wpapper_products').on('click', '.choose_product_button', function () {
        //     var product = $(this).closest('.product_item');
        //     var product_id = parseInt(product.attr('data-product-id'));
        //     var max_amount = parseInt(product.attr('data-max-ingrients-amount'))
        //     constructor.current_product = getProductById(product_id)
        // })

        $('.ingridients2 .wpapper_ingridients').on('click', '.add_ingridient', function () {
            $(this).addClass('remove_hover');
            console.log(this);
            var ingridient_item = $(this).closest('.ingridients_item');
            var ingridient_id = parseInt(ingridient_item.attr('data-ingridient-id'));
            incrementIngridient(ingridient_id)
            inspect_constructor()
        })

        $('.ingridients2 .wpapper_ingridients').on('click', '.increment_ingridient', function () {
            var ingridient_item = $(this).closest('.ingridients_item');
            var ingridient_id = parseInt(ingridient_item.attr('data-ingridient-id'));
            incrementIngridient(ingridient_id)
            inspect_constructor()
        })

        $('.ingridients2 .wpapper_ingridients').on('click', '.decrement_ingridient', function () {
            var ingridient_item = $(this).closest('.ingridients_item');
            var ingridient_id = parseInt(ingridient_item.attr('data-ingridient-id'));
            decrementIngridient(ingridient_id)
            inspect_constructor()
        })

        $('.ingridients2 .wpapper_ingridients').on('click', '.remove_ingridient', function () {
            var ingridient_item = $(this).closest('.ingridients_item');
            var ingridient_id = parseInt(ingridient_item.attr('data-ingridient-id'));
            removeIngridient(ingridient_id)
            inspect_constructor()
        })

        window.inspect_constructor = function() {
            console.log("constructor: ", constructor)
            //console.log("product: ", constructor.current_product)
            //console.log("ingridients: ", constructor.ingridients)
        }
        $(".choose_product_button").click(function(e){
            var price = $(this).text();
            var suma = price.slice(1);
            $('.total').empty().append(suma);
            $('.pizza').addClass('animated fadeIn');
        });


        Owl.init();
        $('#carousel div').click(function() {
            moveToSelected($(this));
        });

        $('#prev').click(function() {
            moveToSelected('prev');
        });

        $('#next').click(function() {
            moveToSelected('next');
        });


        $("#burger").click(function(){
            $(".navbar-nav").toggleClass("expand");
            $(".right").toggleClass("hide_pagination");
        });


        // Add and change quantity to express checkout button when the quantity is updated
        if($('.cart .qty').length){
            var originalUrl = $('#dc_express_checkout').attr('href');
            $('.cart .qty').change(function(){
                var url = originalUrl + '&quantity=' + $(this).val();
                $('#dc_express_checkout').attr('href', url);
            });
        }

        var swiper = new Swiper('.swiper-container.styling_container', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            slidesPerView: "auto",
            breakpoints: {
                476: {
                    cssWidthAndHeight: true,
                    slidesPerView: 1,
                    visibilityFullFit: true,
                    autoResize: false,
                    loop: true
                },
            }
        });

        //init swiper on franchisee page
        var swiper_franchisee = new Swiper('.swiper-container.franchisee_slider', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            slidesPerView: "auto",
            breakpoints: {
                476: {
                    cssWidthAndHeight: true,
                    slidesPerView: 1,
                    visibilityFullFit: true,
                    autoResize: false,
                    loop: true
                },
            }
        });
        //add class DEVELOPMENT OF FRANCHISE
        $(".card").click(function(e) {
            e.preventDefault();
            $(".card").removeClass('active');
            $(this).addClass('active');
        });




        $(window).scroll(function() {
            var box1 = $('.main-navigation').offset().top;
            /*Если сделали скролл на 100px задаём новый класс для header*/
            if(box1 > 100){
                $('header').addClass('header-fixed');
            } else{
                /*Если меньше 100px удаляем класс для header*/
                $('header').removeClass('header-fixed');
            }

        });

            var swiper_restorant = new Swiper('.swiper-container.restaurant_items_wrapper', {
                slidesPerView: 5,
                pagination: {
                    el: '.swiper-paginations.on_restorant',
                    clickable: true,
                },

                breakpoints: {
                    1600: {
                        slidesPerView: 4,
                    },
                    1200: {
                        slidesPerView: 3,
                    },
                    567: {
                        slidesPerView: 1,
                        centeredSlides: true,
                    },
                }
            });

            //font loader webfont
        WebFontConfig = {
            custom: {
                families: ['KGB', 'Open Sans'],
                urls: ['../css/kgbrokenvesselssketch.css']
            }
        };

        window.lazyLoadOptions = {
            elements_selector: ".lazy",
        };

        var swiper = new Swiper('.swiper-container.gallery_slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 5,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });

        $(".cff-posts-wrap.owl-carousel").owlCarousel({
                items:5,
                nav:true,
                responsive : {
                    0:{
                        items: 1
                    },
                    769:{
                        items: 5
                    },
                },
            }
        );


    });




})(jQuery);



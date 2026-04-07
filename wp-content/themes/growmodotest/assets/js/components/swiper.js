{
    const $ = jQuery

    $(() => {
        $('.js-swiper').each(function () {
            const $root = $(this)
            const $paginationDesktop = $root.find('.js-swiper-pagination.swiper-pagination--desktop')
            const $paginationMobile = $root.find('.js-swiper-pagination.swiper-pagination--mobile')
            const $prev = $root.find('.js-swiper-button-prev')
            const $next = $root.find('.js-swiper-button-next')

            let instance;

            function initSwiper() {
                if (instance) {
                    instance.destroy(true, true)
                }

                instance = new Swiper($root.get(0), {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    pagination: {
                        el: $paginationMobile.get(0),
                        type: 'custom',
                        renderCustom(swiper, current, total) {
                            let paddedCurrent = current
                            if (paddedCurrent < 10) {
                                paddedCurrent = `0${current}`
                            }
                            return `<span class="swiper-pagination-current">${paddedCurrent}</span> of <span class="swiper-pagination-total">${total}</span>`
                        }
                    },
                    navigation: {
                        nextEl: $next.get(0),
                        prevEl: $prev.get(0),
                        addIcons: false,
                    },
                    breakpoints: {
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                            pagination: {
                                el: $paginationDesktop.get(0),
                            },
                        },
                    },
                })
            }

            initSwiper()
            $(window).on('resize', GM_APP.Helpers.debounce(initSwiper))
        })
    })
}
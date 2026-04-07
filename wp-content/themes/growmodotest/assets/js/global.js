{
    const $ = jQuery;

    GM_APP.Helpers = {
        debounce(fn, delay = 100) {
            let timeoutId;
            return function (...args) {
                clearTimeout(timeoutId);
                timeoutId = setTimeout(() => fn.apply(this, args), delay);
            };
        },
    }

    GM_APP.TopBanner = {
        STORAGE_KEY: 'gm-top-banner-closed',

        $topBanner: null,
        $close: null,

        init() {
            this.$topBanner = $('.js-site-top-banner');
            this.$close = $('.js-site-top-banner-closer');

            this.$close.on('click', e => {
                sessionStorage.setItem(this.STORAGE_KEY, true)
                this.$topBanner.removeClass('is-active')
            })

            this.showBanner()
            this.calcHeight()
        },

        showBanner() {
            const initTimeout = setTimeout(() => {
                this.$topBanner.addClass('is-init')
                clearTimeout(initTimeout)
            }, 250)

            const activeTimeout = setTimeout(() => {
                if (!sessionStorage.getItem(this.STORAGE_KEY)) {
                    this.$topBanner.addClass('is-active')
                }
                clearTimeout(activeTimeout)
            }, 500)
        },

        calcHeight() {
            const calcHeight = () =>  {
                this.$topBanner.css({
                    '--height': `${this.$topBanner.outerHeight() / 16}rem`,
                })
            }

            calcHeight();
            $(window).on('resize', GM_APP.Helpers.debounce(calcHeight))
        }
    }

    GM_APP.MobileMenu = {
        $window: null,
        $opener: null,
        $closer: null,
        $menuModal: null,

        init() {
            this.$window = $(window)
            this.$opener = $('.js-mobile-menu-opener')
            this.$closer = $('.js-mobile-menu-modal-closer')
            this.$menuModal = $('.js-mobile-menu-modal')

            this.openModal = this.openModal.bind(this)
            this.closeModal = this.closeModal.bind(this)
            this.closeModalOnDesktop = this.closeModalOnDesktop.bind(this)

            this.$opener.on('click', this.openModal)
            this.$closer.on('click', this.closeModal)
            this.$window.on('resize', GM_APP.Helpers.debounce(this.closeModalOnDesktop))
        },

        openModal() {
            this.$menuModal.addClass('is-active')
        },

        closeModal() {
            this.$menuModal.removeClass('is-active')
        },

        closeModalOnDesktop() {
            if (this.$window.width() >= GM_APP.DESKTOP_BREAKPOINT) {
                this.closeModal()
            }
        }
    }

    $(() => {
        GM_APP.TopBanner.init()
        GM_APP.MobileMenu.init()
    })
}
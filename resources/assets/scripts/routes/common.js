export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

      var options = {
          loadingHtml: '<img src="/wp-content/themes/kkui2/dist/images/loading.svg" class="loading" alt="Loading" />',
          padding: 20,
          nextSelector: '.posts-navigation a:first',
          contentSelector: '.wrapper-list-article__inner',
          debug: true,
      };

      $('.wrapper-list-article').jscroll(options);

      var owlMenu = $('.menu-carousel');
      owlMenu.owlCarousel({
          //autoplay: true,
          margin: 6,
          nav: true,
          dots: false,
          mouseDrag: true,
          autoWidth:true,
          responsive: {
              0: {
                  items: 3,
                  slideBy: 1,
              },
              600: {
                  items: 0,
              },
              1000: {
                  items: 0,
              },
          },
      });

  },
};

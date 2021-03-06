<footer class="content-info footer mt-5 pt-4 pb-4 {{ (is_404())?'fixed-bottom':'' }}" id="footer">
  <div class="container">
    <div class="d-md-flex justify-content-between align-items-center text-center">
      <span>&copy; 2018</span>

      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'container_class' =>'footer-nav', 'menu_class' => 'nav text-center d-flex justify-content-center  align-items-center ', 'container_id' => 'container-footer-nav']) !!}
      @endif

      <div class="socm mt-4 mt-md-0 text-center d-flex justify-content-center  align-items-center">
        <a class="mr-2 btn-icon  d-flex justify-content-center  align-items-center text-center" href="https://facebook.com/" target="_blank" title="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn-icon  d-flex justify-content-center  align-items-center text-center" href="https://twitter.com/" target="_blank" title="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
    </div>
  </div>
</footer>

<header id="header" class="header">
  <div class="container">
    <div class="header__inner pt-3 pb-3 pt-md-4 pb-md-4 d-flex justify-content-between align-items-center">
      <a class="brand d-flex align-items-center" title=" {{ get_bloginfo('name', 'display') }}" href="{{ home_url('/') }}" >
        <img src="@asset('images/logo.png')" width="56" height="56" alt=" {{ get_bloginfo('name', 'display') }}" class="d-inline-block align-top mr-3">
      </a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' =>'primary-nav d-none d-md-block', 'menu_class' => 'nav']) !!}
      @endif
      <div class="socm d-flex align-items-center">
        <a class="mr-3" href="https://instagram.com/" target="_blank" title="Instagram">
          <img src="@asset('images/instagram_2.png')" width="24" height="24">
        </a>
        <a class="mr-3" href="https://facebook.com/" target="_blank" title="Facebook">
          <img src="@asset('images/facebook_2.png')" width="24" height="24">
        </a>
        <a class="mr-3" href="https://twitter.com/" target="_blank" title="Twitter">
          <img src="@asset('images/twitter_2.png')" width="24" height="20">
        </a>
      </div>
    </div>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' =>'primary-nav primary-m-nav d-block p-1 mb-4 d-md-none', 'menu_class' => 'nav owl-carousel owl-theme menu-carousel', 'container_id' => 'container-m-nav']) !!}
    @endif
  </div>
</header>

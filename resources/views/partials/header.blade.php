<header id="header" class="header">
  <div class="container">
    <div class="header__inner pt-3 pb-3  d-flex justify-content-between align-items-center">
      <div class="socm text-center d-none d-md-flex justify-content-center  align-items-center">
        <a class="mr-2 btn-icon  d-flex justify-content-center  align-items-center text-center" href="https://facebook.com/" target="_blank" title="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn-icon  d-flex justify-content-center  align-items-center text-center" href="https://twitter.com/" target="_blank" title="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
      <a class="brand d-flex align-items-center" title=" {{ get_bloginfo('name', 'display') }}" href="{{ home_url('/') }}" >
        <img src="@asset('images/logo.png')" width="33" height="32" alt=" {{ get_bloginfo('name', 'display') }}" class="d-inline-block align-top mr-1">
        {{ get_bloginfo('name', 'display') }}
      </a>
      <button data-toggle="modal" data-src="" data-target="#fullscreensearch" type="button" class="btn-header-search btn-icon "><i class="fas fa-search"></i></button>
      {{--@if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' =>'primary-nav d-none d-md-block', 'menu_class' => 'nav']) !!}
      @endif--}}
    </div>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' =>'primary-nav primary-m-nav p-1 mb-4', 'menu_class' => 'nav owl-carousel owl-theme menu-carousel', 'container_id' => 'container-m-nav']) !!}
    @endif
  </div>
</header>

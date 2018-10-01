<header id="header" class="header">
  <div class="container">
    <div class="header__inner pt-3 pb-3  d-flex justify-content-between align-items-center">
      <button data-toggle="modal" data-src="" data-target="#fullscreensearch" type="button" class="btn-header-search"><i class="fas fa-search"></i></button>
      <a class="brand d-flex align-items-center" title=" {{ get_bloginfo('name', 'display') }}" href="{{ home_url('/') }}" >
        <img src="@asset('images/logo.png')" width="24" height="24" alt=" {{ get_bloginfo('name', 'display') }}" class="d-inline-block align-top mr-1">
        {{ get_bloginfo('name', 'display') }}
      </a>
      <div class="socm  align-items-center d-md-flex">
        <a class="mr-2" href="https://facebook.com/" target="_blank" title="Facebook">
          <img src="@asset('images/facebook_2.png')" width="24" height="24">
        </a>
        <a class="mr-2" href="https://twitter.com/" target="_blank" title="Twitter">
          <img src="@asset('images/twitter_2.png')" width="24" height="20">
        </a>
      </div>
      {{--@if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' =>'primary-nav d-none d-md-block', 'menu_class' => 'nav']) !!}
      @endif--}}
    </div>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' =>'primary-nav primary-m-nav p-1 mb-4', 'menu_class' => 'nav owl-carousel owl-theme menu-carousel', 'container_id' => 'container-m-nav']) !!}
    @endif
  </div>
</header>

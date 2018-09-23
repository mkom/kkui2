<header id="header" class="header">
  <div class="container">
    <div class="header__inner pt-3 pb-5 pt-md-5 pb-md-5 d-flex justify-content-between align-items-center">
      <a class="brand d-flex align-items-center" title=" {{ get_bloginfo('name', 'display') }}" href="{{ home_url('/') }}" >
        <img src="@asset('images/logo.png')" width="56" height="56" alt=" {{ get_bloginfo('name', 'display') }}" class="d-inline-block align-top mr-3">
        {{ get_bloginfo('name', 'display') }}
      </a>
      <div class="socm d-flex align-items-center">
        <a class="mr-3" href="https://instagram.com/" target="_blank" title="Instagram">
          <img src="@asset('images/instagram.png')" width="24" height="24">
        </a>
        <a class="mr-3" href="https://facebook.com/" target="_blank" title="Facebook">
          <img src="@asset('images/facebook.png')" width="24" height="24">
        </a>
        <a class="mr-3" href="https://twitter.com/" target="_blank" title="Twitter">
          <img src="@asset('images/twitter.png')" width="24" height="20">
        </a>
      </div>
    </div>
  </div>
</header>

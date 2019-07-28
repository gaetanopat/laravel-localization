<header>
  <div class="container-fluid">
    <div class="header-left col-2">
      <a href="{{ route('home') }}">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Logo">
      </a>
    </div>
    <div class="header-right col-10">
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="nav-item">
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach

        <li><a href="#" onclick="return false" class="sign-up ml-2">@lang('general.subscribe')</a></li>
      </ul>
    </div>
  </div>
</header>

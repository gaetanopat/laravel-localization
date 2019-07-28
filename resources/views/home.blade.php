@extends('layouts.app')

@section('content')
  {{-- per la sezione bianca della homepage --}}
  <section class="white-section">
    <div class="container">
      <div class="section-left col-4">
        <h1>@lang('general.homeh1')</h1>
        <p>@lang('general.homep1')</p>
        <a href="#" onclick="return false" class="read_more">@lang('general.homea')</a>
      </div>
      <div class="section-right col-8">
        <img src="https://www.boolean.careers/images/common/mac2x.png" alt="Boolean Logo">
      </div>

    </div>
  </section>
@endsection

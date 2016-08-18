@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.

                </div>

            </div>
            <div class="panel panel-default">
            <div class="panel-body">
                {{ LaravelLocalization::getCurrentLocaleName()}}
            </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <nav class="navbar navbar-right">
                        <ul class="language_bar_chooser">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                        {{{ $properties['native'] }}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <hr>
                        <ul class="language_bar_chooser">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                        {{ $localeCode }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

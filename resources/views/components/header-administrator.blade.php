<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="{{ route('dashboard') }}" class="menu-link">
        <span class="menu-text">{{ __('dashboard.dashboard') }}</span>
    </a>
</li>
<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
    <a href="{{ route('user.index') }}" class="menu-link">
        <span class="menu-text">{{ __('dashboard.users') }}</span>
    </a>
</li>
{{--<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
    <a href="{{ route('audit.index') }}" class="menu-link">
        <span class="menu-text">{{ __('dashboard.audit_trail') }}</span>
    </a>
</li>--}}
<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
    <a href="{{ route('country.index') }}" class="menu-link">
        <span class="menu-text">{!! trans('header-menu.menu-country') !!}</span>
    </a>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="{{ route('city.index') }}" class="menu-link">
        <span class="menu-text">{!! trans('header-menu.menu-city') !!}</span>
    </a>
</li>
<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
    <a href="{{ route('category.index') }}" class="menu-link">
        <span class="menu-text">{!! trans('header-menu.menu-category') !!}</span>
    </a>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="{{ route('tag.index') }}" class="menu-link">
        <span class="menu-text">{!! trans('header-menu.menu-tag') !!}</span>
    </a>
</li>
{{--<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
    <a href="{{ route('pack.index') }}" class="menu-link">
        <span class="menu-text">{!! trans('header-menu.menu-pack') !!}</span>
    </a>
</li>--}}
{{--<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
    <a href="{{ route('user.index') }}" class="menu-link">
        <span class="menu-text">{!! trans('header-menu.menu-event') !!}</span>
    </a>
</li>--}}
<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
    <a href="{{ route('post.index') }}" class="menu-link">
        <span class="menu-text">{!! trans('header-menu.menu-post') !!}</span>
    </a>
</li>

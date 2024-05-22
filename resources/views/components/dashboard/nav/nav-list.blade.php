@props([
    'label' => '',
    'icon' => '',
])
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="bx {{ $icon }}"></i>
        <span key="t-maps">{{ $label }}</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        {{$slot}}
    </ul>
</li>

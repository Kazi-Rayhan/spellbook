@props([
    'dropdown' => true,
    'label' => '',
    'icon' => '',
    'href' => '#',
])


<li>
    <a href="{{ $href }}" class="{{ $dropdown ? '' : 'waves-effect' }}">
        <i class="bx {{ $icon }}"></i>
        <span key="t-{{ strtolower(str_replace(' ', '', $label)) }}">{{ $label }}</span>
    </a>
</li>

@props(['icon' => '' , 'link'])

<li {{$attributes->merge(['class' => 'sidebar-item'])}}>
    <a class="sidebar-link" href="{{$link}}">
        <i class="align-middle" @if($icon != '') data-feather="{{$icon}}" @endif></i> 
        <span class="align-middle">{{$slot}}</span>
    </a>
</li>


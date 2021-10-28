@props(['id', 'icon' , 'elements'])
<li {{$attributes->merge(['class' => 'sidebar-item'])}}>
	<a data-target="#{{$slot}}" data-toggle="collapse" class="sidebar-link collapsed">
        <i class="align-middle" data-feather="{{$icon}}"></i> 
        <span class="align-middle">{{$slot}}</span>
    </a>
    <ul id="{{$slot}}" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
        {{$elements}}
    </ul>
</li>
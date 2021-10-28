@extends('layouts.main')

@section('sidbar')
<x-nav>

    <x-nav-link icon='sliders' link="{{route('admin.dashboard', Auth::user())}}" >
        Dashboard
    </x-nav-link>
        <x-nav-collapse  icon='users'>
        Users
        <x-slot name="elements">
            <x-nav-link link="{{route('admin.add.users', Auth::user())}}">
                Add
            </x-nav-link>
             <x-nav-link link="{{route('admin.edite.users', Auth::user())}}">
                edite
            </x-nav-link>
          
        </x-slot>
      
    </x-nav-collapse>
    <x-nav-collapse   icon='alert-circle'>
        Infections
        <x-slot name="elements">
            <x-nav-link link="{{route('admin.add.infections', Auth::user())}}" class='active'>
                Add
            </x-nav-link>
             <x-nav-link link="{{route('admin.edite.infections', Auth::user())}}">
                edite
            </x-nav-link>
             
        </x-slot>
      
    </x-nav-collapse>

    <x-nav-link icon='user' link="{{route('admin.profile', Auth::user())}}">
        Profile
    </x-nav-link> 
 
</x-nav-collapse>
   
@endsection
@section('body')
    <main class="content">
        <div class="container-fluid p-0">

            <x-infection-form />

        </div>
    </main>


   
@endsection

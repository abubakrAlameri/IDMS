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
             <x-nav-link link="{{route('admin.edite.users', Auth::user())}}" class='active'>
                edite
            </x-nav-link>
             
        </x-slot>
      
    </x-nav-collapse>
    <x-nav-collapse   icon='alert-circle'>
        Infections
        <x-slot name="elements">
            <x-nav-link link="{{route('admin.add.infections', Auth::user())}}" >
                Add
            </x-nav-link>
             <x-nav-link link="{{route('admin.edite.infections', Auth::user())}}" >
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">List of users</h5>
                        <p class='text-success'>
                            {{session()->pull('message')}}
                        </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Action</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Adress</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Height</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Privilege</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td class="table-action">
                                        <form action="{{ route('admin.user.edit', $user)}}" method="get">
                                            @csrf
                                            <button  class="btn"><i class="align-middle" data-feather="edit-2"></i></button>
                                        </form>
                                        <form action="{{ route('admin.user.destroy', $user)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn "><i class="align-middle" data-feather="trash"></i></button>
                                        </form>
                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->adress}}</td>
                                        <td>{{$user->gender}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->countery}}</td>
                                        <td>{{$user->age}}</td>
                                        <td>{{$user->height}}</td>
                                        <td>{{$user->weight}}</td>
                                        <td>
                                            @if ($user->privilege == 1)
                                                User
                                            @elseif($user->privilege == 2)
                                                Prof
                                            @else
                                                Admin
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
               
               <x-pagination :items="$users"/>
            </div>
        </div>

    </div>
</main>



@endsection

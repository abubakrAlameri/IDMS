@props(['user'=> null])


@php
if ($user != null) {
    $routeName = 'admin.user.update';
    $name = $user->name;
    $email = $user->email;
    // $password = $user->password;
    // $password_confirmation =  $user->password;
    $adress = $user->adress;
    $gender = $user->gender;
    $phone = $user->phone;
    $countery = $user->countery;
    $age = $user->age;
    $height = $user->height;
    $weight = $user->weight;
    $privilege = $user->privilege;
 
}else{
    $routeName = 'admin.user.store';

    $name = '';
    $email = '';
    $password = '';
    $password_confirmation = '';
    $adress = '';
    $gender = '';
    $phone = '';
    $countery = '';
    $age = '';
    $height = '';
    $weight = '';
    $privilege = '';
}
    
@endphp
<div class="row">
    <div class="col-12 col-xl-10 m-auto ">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center text-bold">Add Users</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div>
                        <div class=".text-danger">
                            {{ __('an error has occurred') }}
                        </div>

                        <ul class="text-danger">
                            @foreach ($errors->all() as $error)
                                <li class="">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            
                @endif
                <div class="text-success">{{session()->pull('message')}}</div>
                                            
                <form method="POST" action="{{ route($routeName,$user)}}" enctype="multipart/form-data">
                    @isset($user)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="name" value="{{$name}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$email}}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">adress</label>
                        <input type="text" class="form-control" name="adress" placeholder="adress" value="{{$adress}}">
                    </div>
                
                    <div>
                        <label class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="male" {{$gender == "male" ? 'checked' : ''}}>
                            <span class="form-check-label">
                                Male
                            </span>
                        </label>
                        <label class="form-check">
                            <input class="form-check-input" name="gender" type="radio" value="female" {{$gender == "fmale" ? 'checked' : ''}}>
                            <span class="form-check-label">
                                Female
                            </span>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="phone" value="{{$phone}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label">country</label>
                        <input type="text" class="form-control" name="countery" placeholder="country" value="{{$countery}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">age</label>
                        <input type="text" class="form-control" name="age" placeholder="age" value="{{$age}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">height</label>
                        <input type="text" class="form-control" name="height" placeholder="height" value="{{$height}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">weight</label>
                        <input type="text" class="form-control" name="weight" placeholder="weight" value="{{$weight}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Privilege</label>
                        {{$privilege}}
                        <select class="form-select form-select-sm" name="privilege" >
                            <option {{ $privilege == '' ? ' selected' : ''}}>Open this select menu</option>
                            <option value="1" {{ $privilege == 1 ? 'selected' : ''}}>User</option>
                            <option value="2" {{ $privilege == 2 ? 'selected' : ''}}>Prof</option>
                            <option value="3" {{ $privilege == 3 ? 'selected' : ''}}>Admin</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">Image</label>
                        <input type="file" name="attachment">
                        @isset($user)
                            <img src="{{asset($user->attachment)}}" width="100" >
                        @endisset
                    </div>
                    
                    <button type="submit" class="btn btn-primary">{{$user ? 'Update' : 'Create'}}</button>
                </form>
            </div>
        </div>
    </div>

</div>
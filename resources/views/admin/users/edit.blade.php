@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center">Edit User</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif



            <form action="{{route('users.update',$user->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="form-group  row">
                    <label for="" class="col-md-2 col-form-label">Name : </label>

                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-2 col-form-label">Email : </label>
                    <div class="col-md-10">
                        <input type="email" disabled class="form-control" value="{{$user->email}}">
                    </div>
                </div>

                <div>
                    <div class="checkbox row">
                        <label class="col-form-check-label col-2" for="roles[]" class="px-2">
                            Super Admin : </label>
                        <div class="col-10">
                            <input type="checkbox" name="roles[]" value="super_admin" {{$user->hasRole('super_admin') ?
                            'checked' :''}} >
                        </div>
                    </div>
                    <div class="checkbox row">
                        <label class="col-form-check-label col-2" for="roles[]" class="px-2">
                            Manager : </label>
                        <div class="col-10">
                            <input type="checkbox" name="roles[]" value="manager" {{$user->hasRole('manager') ?
                            'checked' :''}} >
                        </div>
                    </div>
                    <div class="checkbox row">
                        <label class="col-form-check-label col-2" for="roles[]" class="px-2"> User : </label>

                        <div class="col-10">
                            <input type="checkbox" name="roles[]" value="user" {{$user->hasRole('user') ? 'checked'
                            :''}} >
                        </div>
                    </div>

                </div>


                <div class="orm-group mt-5">
                    <button class="btn btn-primary" type='submit'>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

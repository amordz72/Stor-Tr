@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Users</h1>

            <table class="table table-bordred response text-center" style="font-size: 20px">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody style="font-size: 16px">
                    @foreach($users as $key => $item)
                    <tr>
                        <td scope="row">{{$key+1}}</td>
                        <td scope="row">{{$item->name}}</td>
                        <td scope="row">{{$item->email}}</td>
                        <td scope="row">
                            @foreach ($item->roles as $role_key => $role)
                            @if ($role_key>0)

                           // {{$role->display_name}}

                            @else
                            {{$role->display_name}}


                            @endif
                            @endforeach
                        </td>
                        <td scope="row"><a class="btn btn-small btn-info"
                                href="{{route('users.edit',$item->id)}}">Edit</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

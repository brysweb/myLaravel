@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users <br>
                    <a href="users/create"> add users</a>
                    </div>
                <div class="card-body">
                <table border='1' cellpadding="25">
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>imageFileName</td>
                        <td></td>
                    </tr>
                
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['imageFileName'] }}</td>
                        <td><a href="/users/edit/{{ $user["id"] }}">Edit</a></td>
                    </tr>    
                    @endforeach
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
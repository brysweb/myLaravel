@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Room <br>
                    <a href="rooms/create"> add room</a>
                    </div>
                <div class="card-body">
                <table border='1' cellpadding="25">
                    <tr>
                        <td>Room Name</td>
                        <!-- <td>System ID</td> -->
                        <td>Comments</td>
                        <td></td>
                    </tr>
                
                    @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room['name'] }}</td>
                        <!-- <td>{{ $room['systemID'] }}</td> -->
                        <td>{{ $room['comments'] }}</td>
                        <td><a href="/rooms/edit/{{$room['id']}}">Edit</a></td>
                    </tr>    
                    @endforeach
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
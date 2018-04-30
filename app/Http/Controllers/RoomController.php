<?php

namespace App\Http\Controllers;

use App\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index() {

        $rooms = Room::where('systemID', app('system')->id)->get();
        return view('rooms.index', compact('rooms'));

    }

    public function create() {
        return view ("rooms.create");
    }

    public function store(Request $request){
        
        //dd($request->all());
        $newRoom = Room::create([
            'name' => $request['name'],
            'comments' => $request['comments'],
            'systemID' => app('system')->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('rooms');
    }
    
    public function edit($id) {
        //return ($id);
        $room = Room::find($id);
        return view('rooms.edit')->with('room',$room);
    }

    public function update(Request $request){
        
       // dd($request->all());

        $room = Room::find($request['id']);

            $room->name = $request['name'];
          //  $room->systemID = $request['systemID'];
            $room->comments = $request['comments'];
            $room->updated_at = Carbon::now()->toDateTimeString();
            $room->save();

        

        return redirect('rooms');
    }

    public function destroy ($id) {
        //return ($id);
        Room::destroy($id);

        $room = Room::all();
        return view('rooms.index', compact('rooms'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\SerialNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('serialnumber.index');
    }

    public function confirm_sno(Request $request)
    {
        $serial_number = $request->input('serialnumber');
        $result = SerialNumber::where('serial_number', '=', $serial_number)->first();
        if ($result === null) {

            return response()->json(['errors' => 'Serial Number does not exists']);
        } else {

            return response()->json([

                'success' => 'VERIFIED.',
                'serial_number' => $result->serial_number,
                'description' => $result->description

            ]);
        }
    }


    public function Sendemail(Request $request)
    {


        $rules = [
            'email' => 'required',
            'fname' => 'required',
            'topic' => 'required',

        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return Response::json(['errors' => $error->errors()->all()]);
        }
        $data = [
            'fname' => $request->input('fname'),
            'email' => $request->input('email'),
            'company' => $request->input('company'),
            'lname' => $request->input('lname'),
            'bphone' => $request->input('bphone'),
            'jtitle' => $request->input('jtitle'),
            'street1' => $request->input('street1'),
            'street2' => $request->input('street2'),
            'street3' => $request->input('street3'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'postal_code' => $request->input('postal_code'),
            'country' => $request->input('country'),
            'topic' => $request->input('topic'),
            'desc' => $request->input('desc'),
            'contact_method' => $request->input('contact_method'),
        ];
        if ($this->send($data)) {
            return response()->json([

                'success' => 'Your Message has been sent Successfully.',

            ]);
        } else {
            return response()->json([

                'error' => 'Message not Sent.',

            ]);
        }
    }
   public function send($data)
    {
        Mail::send('mail.email', $data, function ($message) use ($data) {
            $message->to('condororiental@gmail.com')->subject($data['topic']);
            $message->from("ceo@condororiental.com", $data['fname'] . " " . $data['lname']);
        });
        return true;
    }


    public function AdminIndex()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }
    public function AdminStore(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ];

        DB::table('users')->insert($data);
        return redirect()->back();
    }
    public function AdminUpdate(Request $request)
    {
        $user = User::findOrFail($request->category_id);
        $user->update([

            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),

        ]);

        return back();
    }

    public function AdminDestroy(Request $request)
    {
        $user = User::findOrFail($request->category_id);
        $user->delete();

        return back();
    }


    public function generateUniqueFileName($file, $destinationPath)
    {
        $initial = "condoriental_";
        $name = $initial . bin2hex(random_bytes(8)) . time() . '.' . $file->getClientOriginalExtension();
        if ($file->move(public_path() . $destinationPath, $name)) {
            return $name;
        } else {
            return null;
        }
    }
    public function gallery()
    {
        $images = Gallery::all();
        return view('gallery.index', compact('images'));
    }
    public function galleryFront()
    {
        $images = Gallery::all();
        return view('gallery', compact('images'));
    }
    public function galleryDestroy(Request $request, $id)
    {
        $images = Gallery::findOrFail($id);
        $images->delete();

        return back();
    }
    public function galleryStore(Request $request)
    {
        if ($request->hasFile('image')) {
            $filePath = $request->file('image');
            $imagefolder = '/Gallery';
            foreach ($filePath as $img) {
                $gallery = new Gallery();
                $gallery->image = $this->generateUniqueFileName($img, $imagefolder);
                $gallery->save();
            }
        }

        return redirect()->back();
    }
}

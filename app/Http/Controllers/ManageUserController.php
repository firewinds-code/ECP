<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use App\Models\PlaceMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;

require_once 'vendor/autoload.php';













class ManageUserController extends Controller
{
    public function list(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = User::select('*');
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($user) {
                        if ($user->id == Auth::user()->id) {
                            $btn = '<a onclick="editUser(' . $user->id . ')" href="#"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default-lg-edit"><i class="nav-icon fa fa-edit" style="padding:2px"></i></a>';
                        } else {
                            $btn = '<a onclick="editUser(' . $user->id . ')" href="#"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default-lg-edit"><i class="fa fa-edit" style="padding: 2px"></i></a>
                            <a href="#"  onclick="deleteUser(' . $user->id . ')" class="btn btn-danger btn-sm">  <i class="fa fa-trash" style="padding:2px"></i></a>';
                        }
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('manageuser.list');
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function add()
    {
        try {
            $pradeshData = PlaceMaster::select('pradesh')->distinct('pradesh')->get();
            $pradeshValues = $pradeshData->pluck('pradesh')->toArray();
            $html = view('manageuser.add', compact('pradeshValues'))->render();
            return response()->json(['html' => $html, 'success' => true]);
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function postadd(Request $request)
    {
        try {
            $user = new User;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->designation = $request->designation;
            $user->booth = $request->booth;
            $user->mandal_name = $request->mandal_name;
            $user->vidhan = $request->vidhan;
            $user->zila = $request->zila;
            $user->sambhag = $request->sambhag;
            $user->pradesh = $request->pradesh;

            $user->password = Hash::make($request->password);
            $user->usertype = $request->usertype;
            //Check if the email already exists in the database
            // $existingUser = User::where('email', $request->email)->first();
            // if ($existingUser) {
            //     return back()->with('error', 'Email already exists');
            // }

            $user->email = $request->email;
            $condition = $user->save();

            if ($condition) {

                $subject  = "User Registration";
                $body = "User Registered Successfully !";

                $data = ['email_body' => $body];
                $mail = $subject;
                $to = $request->email;

                // Define the closure for sending the email
                $emailClosure = function ($message) use ($mail, $to) {
                    $message->to($to);
                    $message->subject($mail);
                };
                $sent = Mail::send('emails.mail', $data, $emailClosure);

                if ($sent) {
                    return back()->with('success', 'User Registered Successfully and Email sent');
                } else {
                    if (!$sent) {
                        return back()->with('error', 'Email not sent');
                    }
                    return back()->with('success', 'User Registered Successfully');
                }
            }
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function editUser(Request $request)
    {
        try {
            $id = $request->id;
            $data = User::find($id);
            $pradeshData = PlaceMaster::select('pradesh')->distinct('pradesh')->get();
            $pradeshList = $pradeshData->pluck('pradesh')->toArray();
            $sambhaglist = PlaceMaster::select('sambhag')->distinct('sambhag')->get();
            $sambhag = $sambhaglist->pluck('sambhag')->toArray();
            $zilalist = PlaceMaster::select('zila')->distinct('zila')->get();
            $zila = $zilalist->pluck('zila')->toArray();
            $boothlist = PlaceMaster::select('booth')->distinct('booth')->get();
            $booth = $boothlist->pluck('booth')->toArray();
            $vidhanlist = PlaceMaster::select('vidhan')->distinct('vidhan')->get();
            $vidhan = $vidhanlist->pluck('vidhan')->toArray();
            $mandallist = PlaceMaster::select('mandal_name')->distinct('mandal_name')->get();
            $mandal = $mandallist->pluck('mandal_name')->toArray();
            $html = view('manageuser.edit', compact('data', 'pradeshList', 'sambhag', 'zila', 'booth', 'vidhan', 'mandal'))->render();
            return response()->json(['html' => $html, 'success' => true]);
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function update(Request $request)
    {
        try {
            $user = User::find($request->id_edit);
            $user->email = $request->email;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->designation = $request->designation;
            $user->booth = $request->booth;
            $user->mandal_name = $request->mandal_name;
            $user->vidhan = $request->vidhan;
            $user->zila = $request->zila;
            $user->sambhag = $request->sambhag;
            $user->pradesh = $request->pradesh;

            if ($request->password != NULL) {
                $user->password = Hash::make($request->password);
            }
            $user->usertype = $request->usertype;
            $user->update();
            return back()->with('success', 'User Updated Successfully');
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function delete(Request $request)
    {
        try {
            $delete =  User::where('id', $request->id)->delete();
            if ($delete) {
                return response()->json(['message' => 'User Deleted Succesfully', 'status' => 'success']);
            }
            return response()->json(['message' => 'User Deleted Failed', 'status' => 'error']);
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }


    public function changepassword(Request $request)
    {
        try {
            $id = Auth::user()->id;
            $data = user::find($id);
            $html = view('manageuser.changepassword', compact('data'))->render();
            return response()->json(['html' => $html, 'success' => true]);
        } catch (Exception $e) {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function updatepassword(Request $request)
    {
        try {
            $id = Auth::user()->id;
            $data = user::find($id);
            if (Hash::check($request->oldpassword, $data->password)) {
                $data->password = Hash::make($request->newpassword);
                $data->save();
                return back()->with('success', 'Password Updated Successfully');
            } else {
                return back()->with('error', 'Your old password does not match');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function sambhag(Request $req)
    {
        $pradeshval = $req;
        $sambhag = PlaceMaster::select('sambhag')->where('pradesh', $pradeshval['pradesh_val'])->distinct('sambhag')->get();
        return $sambhag;
    }

    public function zila(Request $req)
    {
        $sambhagval = $req;
        $zila = PlaceMaster::select('zila')->where('sambhag', $sambhagval['sambhag_val'])->distinct('zila')->get();
        return $zila;
    }

    public function booth(Request $req)
    {
        $zilaval = $req;
        $booth = PlaceMaster::select('booth')->where('zila', $zilaval['zila_val'])->distinct('booth')->get();
        return $booth;
    }

    public function vidhan(Request $req)
    {
        $boothval = $req;
        $vidhan = PlaceMaster::select('vidhan')->where('booth', $boothval['booth_val'])->distinct('vidhan')->get();
        return $vidhan;
    }
    public function mandal(Request $req)
    {
        $vidhanval = $req;
        $mandal_name = PlaceMaster::select('mandal_name')->where('vidhan', $vidhanval['vidhan_val'])->distinct('mandal_name')->get();
        return $mandal_name;
    }
}

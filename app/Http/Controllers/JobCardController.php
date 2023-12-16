<?php

namespace App\Http\Controllers;

use App\Models\UploadData;
use Exception;
use Carbon\Carbon;
use App\Models\PlaceMaster;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class JobCardController extends Controller
{
    public function jobCard(Request $request)
    {
        try {
            return view('searchData.jobcardday');
        } catch (\Exception $ex) {
            $notification = array('message' => $ex->getMessage() . ' Line: ' . $ex->getLine(), 'alert-type' => 'error');
            return back()->with($notification);
        }
    }

    public function jobCardSuggestion(Request $request)
    {
        try {
            $jobcard = array_keys($request->all())[0];
            $lists = UploadData::where('gov_id_no', 'LIKE', '%' . $jobcard . '%')->where('status', 0)->select('gov_id_no')->get();
            if (count($lists) > 0) {
                return  response()->json(['response' => view('searchData.job_card_list', compact('lists'))->render(), 'status', '200', 'success' => true]);
            }
            return  response()->json(['response' => '', 'status', '200', 'error' => true]);
        } catch (\Exception $ex) {
            $notification = array(
                'message' => $ex->getMessage() . ' Line: ' . $ex->getLine(),
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }

    public function jobCardHistory(Request $request)
    {
        try {
            $jobcard = $request->job_card_number_search;
            $records = DB::table('upload_data')
                ->select("*")
                ->where('upload_data.gov_id_no', $jobcard)
                ->first();

            if (isset($records)) {
                return  response()->json(['response' => view('searchData.jobcardhistory', compact('records'))->render(), 'status', '200', 'success' => true]);
            }
            return  response()->json(['response' => '', 'status', '200', 'error' => true]);
        } catch (\Exception $ex) {
            $notification = array(
                'message' => $ex->getMessage() . ' Line: ' . $ex->getLine(),
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }


    public function save(Request $request)
    {
        try {
            $goveID = $request->govId;
            $phoneValue = $request->phoneValue;
            $emailValue = $request->emailValue;
            $updateStatus = UploadData::where('gov_id_no', $goveID)
                ->update(['email' => $emailValue, 'phone' => $phoneValue]);
            if ($updateStatus) {
                return response()->json(['success' => true, 'message' => 'Details updated successfully!']);
            } else {
                return response()->json(['error' => true, 'message' => 'Details Can not be updated!']);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => true, 'message' => 'Retry!']);
        }
    }

    public function updateStatus($goveID)
    {
        try {
            $updateStatus = UploadData::where('gov_id_no', $goveID)->update(['status' => 1]);
            if ($updateStatus) {
                $details = UploadData::where('gov_id_no', $goveID)
                    ->where('status', 1)
                    ->select("*")
                    ->first();

                $to = $details->email;

                // Check if the email address is valid
                if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
                    $subject  = "Voting Details";
                    $body = "Voted Successfully !";

                    $data = ['email_body' => $body];
                    $mail = $subject;

                    // Define the closure for sending the email
                    $emailClosure = function ($message) use ($mail, $to) {
                        $message->to($to);
                        $message->subject($mail);
                    };

                    $sent = Mail::send('emails.mail', $data, $emailClosure);
                    if ($sent) {
                        return response()->json(['success' => true, 'message' => 'Voter Voted successfully and Email sent!']);
                    } else {
                        return response()->json(['error' => true, 'message' => 'Email Can not be sent!']);
                    }
                } else {
                    return response()->json(['error' => true, 'message' => 'Invalid email address']);
                }
                return response()->json(['success' => true, 'message' => 'Voter Voted successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'message' => 'Retry!']);
        }
    }


    public function add()
    {
        try {
            $pradeshData = PlaceMaster::select('pradesh')->distinct('pradesh')->get();
            $pradeshValues = $pradeshData->pluck('pradesh')->toArray();
            $html = view('searchData.add', compact('pradeshValues'))->render();
            return response()->json(['html' => $html, 'success' => true]);
        } catch (Exception $e) {
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function postadd(Request $request)
    {
        try {
            // dd($request->all());
            $user = new UploadData();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->father_name = $request->father_name;
            $user->age = $request->age;
            $user->sex = $request->sex;
            $user->phone = $request->phone;
            $dob = Carbon::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d');
            $user->dob = $dob;
            $user->address = $request->address;
            $user->pincode = $request->pincode;
            $user->district = $request->zila;
            $user->state = $request->pradesh;
            $user->gov_id_type = $request->gov_id_type;
            // Check if the email already exists in the database
            $existingUser = UploadData::where('gov_id_no', $request->gov_id_no)->first();
            if ($existingUser) {
                return back()->with('error', 'Person already exists');
            }
            $user->gov_id_no = $request->gov_id_no;
            $condition = $user->save();

            if ($condition) {

                $subject  = "Voter Registration";
                $body = "You are Registered Successfully for Voting!";


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
                    return back()->with('success', 'Voter Registered Successfully and Email sent');
                } else {
                    return back()->with('error', 'Email not sent');
                }
                return back()->with('success', 'Voter Registered Successfully');
            }
            return back()->with('success', 'User Created Successfully');
        } catch (Exception $e) {
            // dd($e->getMessage());
            return back()->with("error", "Something Went Wrong");
        }
    }

    public function district(Request $req)
    {
        $pradeshval = $req;
        $zila = PlaceMaster::select('zila')->where('pradesh', $pradeshval['pradesh_val'])->distinct('zila')->get();
        return $zila;
    }
}
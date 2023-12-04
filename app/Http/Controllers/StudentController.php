<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = [
            'first' => $request->first,
            'last' => $request->last,
            'gender' => $request->gender,
            'dob'=> $request->dob,
            'Category'=>$request->Category,
            'membership'=>$request->membership,
            'address'=>$request->address,
        ];

        $insert=new Student($data);
        $insert->save();
        return redirect()->route('student.show')->with('status', 'succesfully Inserted');
        // return view('pages.student.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {



        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-beta.p.rapidapi.com/timezone",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: api-football-beta.p.rapidapi.com",
                "X-RapidAPI-Key: af21c29a94mshd2fdb4200607b89p1ebabbjsn6db0a522ffa7"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {



             $data=json_decode($response, true);
             $response = $data;

            // Now, $response contains the array of timezones
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            $searchTimezone = "Africa/Banjul";

            if (in_array($searchTimezone, $data)) {
                echo $searchTimezone . " is in the array.";
            } else {
                echo $searchTimezone . " is not in the array.";
            }
        }
        $students=Student::get();
        // return view('pages.student.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}

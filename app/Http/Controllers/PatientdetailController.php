<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patientdetail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatientdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
      try{
          $patients = Patientdetail::all();
          $statusCode = 200;
          $response = [
             'patient details' => []
          ];

          foreach ($patients as $patient) {
              $response['patient details'][] = [
                'id' => (int) $patient->id,
                'PatientName' => $patient->PatientName,
                'Address' => $patient->Address,
                'City' => $patient->City,
                'Zip' => $patient->Zip,
                'PhoneNum' => $patient->PhoneNum,
                'GUID' => $patient->GUID,
                'Company' => $patient->Company,
                'RiskCategory' => $patient->RiskCategory,
                'PrimaryPhysician' => $patient->PrimaryPhysician,
                'DOB' => $patient->DOB,
                'DIAG1CODE' => $patient->DIAG1CODE,
                'DIAG1DESC' => $patient->DIAG1DESC,
                'SUBABUSEIND' => $patient->SUBABUSEIND,
                'SPL1CODE' => $patient->SPL1CODE,
                'SPL1DESC' => $patient->SPL1DESC,
                'SPL2CODE' => $patient->SPL2CODE,
                'SPL2DESC' => $patient->SPL2DESC,
                'SPL3CODE' => $patient->SPL3CODE,
                'SPL3DEV' => $patient->SPL3DEV,
                'COMORBIDIND' => $patient->COMORBIDIND,
                'LASTMODDATE' => $patient->LASTMODDATE,
                'GENDER' => $patient->GENDER,
              ];
          }
      }catch(Exception $e){
          $statusCode = 400;
      }
      finally{
            return response()->json($response, $statusCode);
        }
      
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
        $detail = Patientdetail::create($request->all());

        return response()->json($detail, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $patientdetail
     * @return \Illuminate\Http\Response
     */
    public function show($patientdetail)
    {
        // return Patientdetail::find($id);
        try{
          $detail = Patientdetail::find($patientdetail);
          $statusCode = 200;
          $response = [ "detail" => [
            'id' => (int) $detail->id,
            'PatientName' => $detail->PatientName,
            'Address' => $detail->Address,
            'City' => $detail->City,
            'Zip' => $detail->Zip,
            'PhoneNum' => $detail->PhoneNum,
            'GUID' => $detail->GUID,
            'Company' => $detail->Company,
            'RiskCategory' => $detail->RiskCategory,
            'PrimaryPhysician' => $detail->PrimaryPhysician,
            'DOB' => $detail->DOB,
            'DIAG1CODE' => $detail->DIAG1CODE,
            'DIAG1DESC' => $detail->DIAG1DESC,
            'SUBABUSEIND' => $detail->SUBABUSEIND,
            'SPL1CODE' => $detail->SPL1CODE,
            'SPL1DESC' => $detail->SPL1DESC,
            'SPL2CODE' => $detail->SPL2CODE,
            'SPL2DESC' => $detail->SPL2DESC,
            'SPL3CODE' => $detail->SPL3CODE,
            'SPL3DEV' => $detail->SPL3DEV,
            'COMORBIDIND' => $detail->COMORBIDIND,
            'LASTMODDATE' => $detail->LASTMODDATE,
            'GENDER' => $detail->GENDER
          ]];
      }catch(Exception $e){
          $response = [
            "error" => "Detail doesn't exist"
            ];
            $statusCode = 404;
      }
      finally{
            return response()->json($response, $statusCode);
        }
        // return response()->json($detail, 200);
        // return $patientdetail;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Patientdetail::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detail = Patientdetail::findOrFail($id);
        $detail->update($request->all());

        return $detail;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Patientdetail::findOrFail($id);
        $detail->delete();

        return 204;
    }
}

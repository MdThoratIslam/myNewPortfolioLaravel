<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use App\Models\PoliceStation;
use App\Models\PostOffice;
use App\Models\Reasoncv;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Support\Facades\Http;

class PDFController extends Controller
{
    protected $config;
    protected $filesystem;
    protected $view;
    public function __construct(Repository $config, Filesystem $filesystem,ViewFactory $view)
    {
        $this->config = $config;
        $this->filesystem = $filesystem;
        $this->view = $view;
    }

    public function generatePDF()
    {
        $dompdf = new \Dompdf\Dompdf(); // Create a new Dompdf instance
        $pdf = new PDF($dompdf, $this->config, $this->filesystem, $this->view, 'UTF-8', true); // Instantiate the Barryvdh\DomPDF\PDF class
        $users = User::with('userPersonalDetail')->get();

        $data = [
            'title' => 'Md Thorat Islam',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf->loadView('web_site.cv_pdf.myPDF', $data);
        $pdf->setPaper('A4', 'Portrait');
        $pdf->setOptions(['isPhpEnabled' => true]);
        //i want return open pdf file another teb not download
        //return $pdf->download('myPDF.pdf');
        $filename = 'tr_'.time().'_cv.pdf';
        return $pdf->stream($filename);
    }

    public function downloadCV()
    {
        $pdfPath = public_path('Md_Thorat_Islam_CV.pdf');
        if (file_exists($pdfPath)) {
            return response()->download($pdfPath, 'cv.pdf');
        } else {
            // If file does not exist, return 404
            abort(404);
        }
    }
    public function downloadReason(Request $request)
    {

        $request->validate([
            'device_id'                 => 'nullable|string',
            'device_type'               => 'nullable|string',
            'device_name'               => 'nullable|string',
            'device_model'              => 'nullable|string',
            'device_os'                 => 'nullable|string',
            'device_os_version'         => 'nullable|string',
            'device_browser'            => 'nullable|string',
            'device_browser_version'    => 'nullable|string',
            'device_is_mobile'          => 'nullable|string',
            'device_is_tablet'          => 'nullable|string',
            'device_is_desktop'         => 'nullable|string',
            'reason'                    => 'required|string',  // Making reason required
            'status'                    => 'nullable|string'
        ]);
       // dd($request->all());
        if ($request->input('reason_type') != 'Professional')
        {
            return response()->json([
                'success' => false,
                'message' => 'Not a professional reason type'
            ]);
        }else
        {
            $reason = new Reasoncv();
            $reason->ip_address             = $request->ip();
            $reason->device_id              = $request->input('device_id');
            $reason->device_type            = $request->input('device_type');
            $reason->device_name            = $request->input('device_name');
            $reason->device_model           = $request->input('device_model');
            $reason->device_os              = $request->input('device_os');
            $reason->device_os_version      = $request->input('device_os_version');
            $reason->device_browser         = $request->input('device_browser');
            $reason->device_browser_version = $request->input('device_browser_version');
            $reason->device_is_mobile       = $request->input('device_is_mobile');
            $reason->device_is_tablet       = $request->input('device_is_tablet');
            $reason->device_is_desktop      = $request->input('device_is_desktop');
            $reason->device_manufacturer    = $request->input('device_brand');
            $reason->reason                 = $request->input('reason');
            $reason->status                 = $request->input('status');
            $reason->save();

            // Respond with the URL to download the CV and a success message
            return response()->json([
                'cvUrl' => route('downloadCV'),  // Make sure the route is defined in your routes/web.php
                'success' => true,  // Set success to true after saving
                'message' => 'Reason stored successfully. Proceeding to download.'
            ]);
        }

    }
   /* public function get_data(Request $request)
    {
        $policeStationIds = PoliceStation::pluck('id');
        foreach ($policeStationIds as $policeStationId)
        {
            $apiUrl = 'https://ekdak.com/thikana/pocode/post-offices?t=' . $policeStationId;
            $response = Http::withHeaders([
                'Authorization' => 'Token 1c4dc27192141d9c2e674b52e3bf8ae0d0afc3bd',
            ])->get($apiUrl);

            if ($response->successful()) {
                $responseData = $response->json();

                // Check if the 'data' key exists and is an array
                if (isset($responseData['data']) && is_array($responseData['data'])) {
                    $postOffices = $responseData['data'];

                    foreach ($postOffices as $postOffice) {
                        if (is_array($postOffice)) {
                            PostOffice::updateOrCreate(
                                [
                                    'en_name' => $postOffice['en_name']
                                ],
                                [
                                    'police_stations_id' => $policeStationId,
                                    'bn_name' => $postOffice['bn_name'],
                                    'slug' => $postOffice['slug'],
                                    'code' => $postOffice['code'],
                                    'lat' => $postOffice['lat'] ?? null,
                                    'long' => $postOffice['long'] ?? null,
                                    'url' => $postOffice['url'] ?? null,
                                    'status_active' => 1,
                                    'is_delete' => 0,
                                    'created_by' => null,
                                    'updated_by' => null,
                                ]
                            );
                        } else {
                            return redirect()->back()->with('error', 'Invalid post office data format.');
                        }
                    }
                } else {
                    return redirect()->back()->with('error', 'Unexpected API response format for police station ID ' . $policeStationId);
                }
            } else {
                return redirect()->back()->with('error', 'Failed to fetch post offices for police station ID ' . $policeStationId);
            }
        }

        return redirect()->back()->with('success', 'Post offices have been successfully fetched and stored.');
    }*/
}

<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory as ViewFactory;

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
        $users = User::get();
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf->loadView('web_site.cv_pdf.myPDF', $data);
        $pdf->setPaper('A4', 'Portrait');
        $pdf->setOptions(['isPhpEnabled' => true]);
        //i want return open pdf file another teb not download
        //return $pdf->download('myPDF.pdf');
        return $pdf->stream('myPDF.pdf');
    }
}

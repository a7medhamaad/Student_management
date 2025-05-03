<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ReportController extends Controller
{

    public function report1($pid)
    {
    // جلب بيانات الدفع المطلوبة
    $payment = Payment::findOrFail($pid);

    // إنشاء ملف PDF من الـ View
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('reports.payment', compact('payment'));

    // تحميل الملف مباشرة
    // return $pdf->download('payment_report_'.$payment->id.'.pdf');

    // أو لعرضه في المتصفح:
    return $pdf->stream('payment_report_'.$payment->id.'.pdf');
    }
  
}
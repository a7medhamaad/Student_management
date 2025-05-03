<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payment Report</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Payment Report</h2>

    <p><strong>Payment ID:</strong> {{ $payment->id }}</p>
    <p><strong>Student Name:</strong> {{ $payment->enrollment->student->name }}</p>
    <p><strong>Amount:</strong> {{ $payment->amount }}</p>
    <p><strong>Paid Date:</strong> {{ $payment->paid_date }}</p>
    <p><strong>Date:</strong> {{ $payment->created_at->format('Y-m-d') }}</p>
    <p><strong>Enrollment Num:</strong> {{ $payment->enrollment->enroll_num }}</p>
    <p><strong>Batch Name:</strong> {{ $payment->enrollment->batche->name }}</p>


</body>
</html>

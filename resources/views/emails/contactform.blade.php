<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7fafc;
            color: #1e293b;
            margin: 0;
            padding: 20px;
        }

        .container {
            background: #ffffff;
            border-radius: 8px;
            max-width: 650px;
            margin: auto;
            padding: 30px 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h2 {
            color: #0ea5e9;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            border-bottom: 2px solid #0ea5e9;
            padding-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin: 12px 0;
            line-height: 1.5;
        }

        .label {
            color: #334155;
            font-weight: 600;
            width: 130px;
            display: inline-block;
        }

        .message-box {
            background-color: #f1f5f9;
            padding: 15px;
            border-radius: 6px;
            margin-top: 10px;
            white-space: pre-wrap;
            border-left: 4px solid #0ea5e9;
        }

        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #64748b;
            text-align: center;
        }

        @media screen and (max-width: 480px) {
            .container {
                padding: 20px;
            }
            p {
                font-size: 14px;
            }
            .label {
                width: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Form Submission</h2>

        <p><span class="label">Name:</span> {{ $data['name'] }}</p>
        <p><span class="label">Email:</span> {{ $data['email'] }}</p>
        <p><span class="label">Phone:</span> {{ $data['phone'] }}</p>
        <p><span class="label">City:</span> {{ $data['city'] }}</p>
        <p><span class="label">State:</span> {{ $data['state'] }}</p>
        <p><span class="label">Program:</span> {{ $data['program'] }}</p>

        <p><span class="label">Message:</span></p>
        <div class="message-box">
            {{ $data['message'] }}
        </div>

        <div class="footer">
            Submitted on {{ now()->format('F j, Y, g:i A') }}
        </div>
    </div>
</body>
</html>

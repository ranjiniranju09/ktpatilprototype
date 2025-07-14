@extends('layouts.app')

@section('content')

<style>
    .contact-form {
        background: linear-gradient(to right, #f1f5f9, #e2e8f0);
        padding: 100px 20px;
        font-family: 'Segoe UI', sans-serif;
    }

    .container.contact-form {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        padding: 100px 50px;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .contact-form h2 {
        text-align: center;
        font-size: 32px;
        color: #1e293b;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .contact-form ul {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
    }

    .contact-form li {
        margin-bottom: 15px;
        font-size: 18px;
        color: #334155;
        background-color: #f8fafc;
        padding: 12px 18px;
        border-left: 4px solid #0ea5e9;
        border-radius: 6px;
    }

    .contact-form li strong {
        color: #0f172a;
        margin-right: 8px;
    }

    .success-message {
        text-align: center;
        font-size: 18px;
        color: #16a34a;
        font-weight: 600;
        margin-top: 20px;
    }
</style>

<div class="container contact-form">
    <h2>Submitted Contact Details</h2>
    <ul>
        <li><strong>Name:</strong> {{ $validated['name'] }}</li>
        <li><strong>Email:</strong> {{ $validated['email'] }}</li>
        <li><strong>Phone:</strong> {{ $validated['phone'] }}</li>
        <li><strong>City:</strong> {{ $validated['city'] }}</li>
        <li><strong>Program:</strong> {{ $validated['program'] }}</li>
        <li><strong>State:</strong> {{ $validated['state'] }}</li>
        <li><strong>Message:</strong> {{ $validated['message'] ?? 'No message provided' }}</li>
    </ul>
    <p class="success-message">Thank you! We have received your details.</p>
</div>

@endsection

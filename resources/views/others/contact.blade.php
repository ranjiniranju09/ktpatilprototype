@extends('layouts.app') {{-- Use your layout file (change as per your setup) --}}

@section('content')
<style>
    .contact-form {
        background: linear-gradient(to right, #f1f5f9, #e2e8f0);
        padding: 60px 20px;
        font-family: 'Segoe UI', sans-serif;
    }

    .container_contact {
        max-width: 900px;
        margin: 0 auto;
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .contact-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .contact-header h2 {
        font-size: 40px;
        font-weight: 800;
        color: #1e293b;
        margin: 0;
    }

    .contact-header span {
        font-size: 18px;
        color: #64748b;
    }

    form {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
    }

    @media (min-width: 768px) {
        form {
            grid-template-columns: 1fr 1fr;
            gap: 24px 40px;
        }
    }

    label {
        font-size: 15px;
        color: #0f172a;
        margin-bottom: 8px;
        display: block;
        font-weight: 600;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select,
    textarea {
        width: 100%;
        padding: 12px 14px;
        font-size: 16px;
        color: #1e293b;
        background-color: #f8fafc;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        transition: 0.3s;
    }

    input:focus,
    select:focus,
    textarea:focus {
        outline: none;
        border-color: #0ea5e9;
        box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.2);
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .full-width {
        grid-column: span 2;
    }

    .button-container {
        margin-top: 20px;
        grid-column: span 2;
        display: flex;
        justify-content: center;
    }

    button[type="submit"] {
        background-color: #0ea5e9;
        color: white;
        font-size: 16px;
        font-weight: 600;
        padding: 12px 32px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0284c7;
    }

    .text-danger {
        color: red;
        font-size: 14px;
    }
</style>

<section class="contact-form">
    <div class="container_contact">
        <div class="contact-header">
            <h2>Contact Us</h2>
            <span>We’re here to help you with your queries</span>
        </div>

        @if(session('success'))
            <div style="color: green; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif


        <form method="POST" action="{{ route('contact.submit') }}">
            @csrf

            <div class="form-group">
                <label for="name">Your Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="email">Your Email *</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="phone">Your Phone Number *</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number" required>
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="city">Your City *</label>
                <select id="city" name="city" required>
                    <option value="">-- Select your city --</option>
                    <option value="Dharashiv" {{ old('city') == 'Dharashiv' ? 'selected' : '' }}>Dharashiv</option>
                    <option value="Pune" {{ old('city') == 'Pune' ? 'selected' : '' }}>Pune</option>
                    <option value="Mumbai" {{ old('city') == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
                    <option value="Aurangabad" {{ old('city') == 'Aurangabad' ? 'selected' : '' }}>Aurangabad</option>
                </select>
                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="program">Select Program *</label>
                <select id="program" name="program" required>
                    <option value="">-- Select a program --</option>
                    <option value="B.Tech CSE" {{ old('program') == 'B.Tech CSE' ? 'selected' : '' }}>B.Tech - Computer Science</option>
                    <option value="B.Tech EEE" {{ old('program') == 'B.Tech EEE' ? 'selected' : '' }}>B.Tech - Electrical & Electronics</option>
                    <option value="B.Tech Civil" {{ old('program') == 'B.Tech Civil' ? 'selected' : '' }}>B.Tech - Civil Engineering</option>
                    <option value="B.Tech Mech" {{ old('program') == 'B.Tech Mech' ? 'selected' : '' }}>B.Tech - Mechanical</option>
                </select>
                @error('program') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="state">Your State *</label>
                <select id="state" name="state" required>
                    <option value="">-- Select your state --</option>
                    <option value="Maharashtra" {{ old('state') == 'Maharashtra' ? 'selected' : '' }}>Maharashtra</option>
                    <option value="Karnataka" {{ old('state') == 'Karnataka' ? 'selected' : '' }}>Karnataka</option>
                    <option value="Tamil Nadu" {{ old('state') == 'Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu</option>
                    <option value="Kerala" {{ old('state') == 'Kerala' ? 'selected' : '' }}>Kerala</option>
                    <option value="Gujarat" {{ old('state') == 'Gujarat' ? 'selected' : '' }}>Gujarat</option>
                    <option value="Uttar Pradesh" {{ old('state') == 'Uttar Pradesh' ? 'selected' : '' }}>Uttar Pradesh</option>
                    <option value="Madhya Pradesh" {{ old('state') == 'Madhya Pradesh' ? 'selected' : '' }}>Madhya Pradesh</option>
                    <option value="Rajasthan" {{ old('state') == 'Rajasthan' ? 'selected' : '' }}>Rajasthan</option>
                    <option value="Telangana" {{ old('state') == 'Telangana' ? 'selected' : '' }}>Telangana</option>
                    <option value="Andhra Pradesh" {{ old('state') == 'Andhra Pradesh' ? 'selected' : '' }}>Andhra Pradesh</option>
                </select>
                @error('state') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group full-width">
                <label for="message">Your Message *</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required>{{ old('message') }}</textarea>
                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="button-container full-width">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- رابط CSS الخاص بـ Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة عرض جديد</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .container { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 2px 2px 10px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; margin: 10px 0; padding: 8px; border: 1px solid #ccc; border-radius: 5px; }
        button { background: blue; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; width: 100%; }
        button:hover { background: darkblue; }
        .error-message { color: red; font-size: 14px; margin-top: -8px; }
    </style>
</head>
<body>

    <div class="container">
        <h2>إضافة عرض جديد</h2>

        @if (Session::has('success'))
            
        
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
          </div>
        @endif

        <form action="{{ route('offers.store') }}" method="POST">
            @csrf

            <label>الاسم:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="error-message">{{ $message }}</div>
            @enderror
        
            <label>السعر:</label>
            <input type="number" name="price" value="{{ old('price') }}" required>
            @error('price')
                <div class="error-message">{{ $message }}</div>
            @enderror
        
            <label>التفاصيل:</label>
            <textarea name="detels" required>{{ old('detels') }}</textarea>
            @error('detels')
                <div class="error-message">{{ $message }}</div>
            @enderror
        
            <button type="submit">إضافة العرض</button>
        </form>
        
    </div>

</body>
</html>

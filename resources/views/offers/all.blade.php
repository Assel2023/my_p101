<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- رابط CSS الخاص بـ Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة عرض جديد</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        input,
        textarea {
            width: 100%;
            margin: 10px 0;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: blue;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: darkblue;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: -8px;
        }
    </style>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Offer Name</th>
                <th scope="col">Offer Price</th>
                <th scope="col">Offer Details</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($offers as $offer)
                <tr>
                    <th scope="row">{{ $offer->id }}</th>
                    <td>{{ $offer->name }}</td>
                    <td>{{ $offer->price }}</td>
                    <td>{{ $offer->detels }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>

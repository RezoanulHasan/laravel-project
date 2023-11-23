@extends('layouts.app')

@section('content')
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100  ">

    <div class="max-w-md mx-auto bg-white rounded p-8">

        <h2 class="text-2xl text-center   text-red-600 font-semibold mb-6">Contact <Span class="text-black"> ME<Span></h2>

        <form action="#" method="post">

            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2" required>
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2" required>
            </div>

            <!-- Phone Input -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                <input type="tel" id="phone" name="phone" class="w-full border rounded px-3 py-2" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: 123-456-7890" required>
           
            </div>

       
       <!-- Message Input -->
       <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                <textarea id="message" name="message" rows="4" class="w-full border rounded px-3 py-2" required></textarea>
</div>     <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="  btn text-red-500 px-4 py-2 rounded">Submit</button>
            </div>
        </form>
    </div>

</body>


@endsection

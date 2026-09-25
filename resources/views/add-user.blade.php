
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h2 class="text-3xl font-bold text-gray-800 text-center mb-2">
            Add New User
        </h2>

        <p class="text-gray-500 text-center mb-8">
            Enter user details below
        </p>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-5">
                {{ session('success') }}
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-5">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/add-user" method="get">
            @csrf

            {{-- Name --}}
            <div class="mb-5">
                <label for="name"
                    class="block text-sm font-medium text-gray-700 mb-2">
                    Full Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter your name"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg
                    focus:outline-none focus:ring-2 focus:ring-blue-500
                    focus:border-blue-500"
                >
            </div>

            {{-- Email --}}
            <div class="mb-5">
                <label for="email"
                    class="block text-sm font-medium text-gray-700 mb-2">
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="example@email.com"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg
                    focus:outline-none focus:ring-2 focus:ring-blue-500
                    focus:border-blue-500"
                >
            </div>

            {{-- Password --}}
            <div class="mb-6">
                <label for="password"
                    class="block text-sm font-medium text-gray-700 mb-2">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter password"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg
                    focus:outline-none focus:ring-2 focus:ring-blue-500
                    focus:border-blue-500"
                >
            </div>

            {{-- Submit Button --}}
            <button
               
                class="w-full bg-blue-600 text-white font-semibold py-3
                rounded-lg hover:bg-blue-700 transition duration-200
                focus:outline-none focus:ring-2 focus:ring-blue-500
                focus:ring-offset-2"
            >
                Add User
            </button>

        </form>
    </div>

</body>
</html>
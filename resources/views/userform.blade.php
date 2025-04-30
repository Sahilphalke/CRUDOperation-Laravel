<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="size-lvh w-full bg-blue-50 ">
        <div>
            <div class="flex justify-center items-center h-screen">
                <div>
                    @if(session('success'))
                        <div class=" mb-2  p-3 text-center rounded-lg bg-orange-50 ">
                            {{ session('success') }}
                            <a href="/list" class=" p-2 ml-2 bg-indigo-400 hover:bg-indigo-300 rounded-lg">User List</a>
                        </div>
                    @elseif(session('error'))
                        <div class="mb-2  p-2 text-center rounded-lg bg-orange-50 ">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div
                        class="bg-white border-2 border-b-amber-300 border-t-blue-300 border-l-fuchsia-300 border-r-pink-300 p-6 rounded-lg shadow-md ">
                        <h2 class="text-xl  font-serif uppercase mb-4">User Form</h2>
                        <form action="" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700">Name:</label>
                                <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Email:</label>
                                <input type="email" name="email" id="email" class="border rounded w-full py-2 px-3"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700">Password:</label>
                                <input type="password" name="password" id="password"
                                    class="border rounded w-full py-2 px-3" required>
                            </div>
                            <button type="submit"
                                class="capitalize bg-purple-600 hover:bg-purple-500 hover:shadow hover:text-black  text-white py-2 px-4 rounded">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
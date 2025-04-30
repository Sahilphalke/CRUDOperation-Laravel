<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="size-lvh w-full bg-blue-50 ">
        <div>

            <div class="flex justify-center items-center h-screen">
                <div>
                    @if(session('updatemessage'))
                        <div class=" mb-2  p-3 text-center rounded-lg bg-orange-50 ">
                            {{ session('updatemessage') }}
                            <a href="/list" class=" p-2 ml-2 bg-indigo-400 hover:bg-indigo-300 rounded-lg">Check List</a>
                        </div>
                    @elseif(session('updateerror'))
                        <div class="mb-2  p-2 text-center rounded-lg bg-orange-50 ">
                            {{ session('updateerror') }}
                        </div>
                    @endif
                    <div
                        class="bg-white border-2 w-full border-b-amber-300 border-t-blue-300 border-l-fuchsia-300 border-r-pink-300       p-6 rounded-lg shadow-md ">
                        <h2 class="text-xl font-serif uppercase mb-4">User Update Form</h2>
                        <form action="/userupdate/{{ $user->id }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700">Name:</label>
                                <input value="{{ $user->name }}" type="text" name="name" id="name"
                                    class="border rounded w-full py-2 px-3" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Email:</label>
                                <input type="email" value="{{ $user->email }}" name="email" id="email"
                                    class="border rounded w-full py-2 px-3" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700">Password:</label>
                                <input type="password" value="{{ $user->password }}" name="password" id="password"
                                    class="border rounded w-full py-2 px-3" required>
                            </div>
                            <button type="submit"
                                class="capitalize  bg-blue-500 text-white py-2 px-4 rounded">Update</button>
                            <a href="/list" class="rounded py-2.5 px-5 ml-5 bg-red-200 hover:bg-red-300">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
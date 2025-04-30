<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="size-lvh w-full bg-blue-50 ">
        <div>
            <div class="flex justify-center items-center h-screen">
                <div>
                    <div>
                        @if(session('successDelete'))
                            <div class=" mb-2  p-3 text-center rounded-lg bg-orange-50 ">
                                {{ session('successDelete') }}
                                <a href="/form" class=" p-2 ml-2 bg-indigo-400 hover:bg-indigo-300 rounded-lg">Register
                                    Again</a>
                            </div>
                        @elseif(session('errorDelete'))
                            <div class="mb-2  p-2 text-center rounded-lg bg-orange-50 ">
                                {{ session('errorDelete') }}
                            </div>
                        @endif
                    </div>
                    <div
                        class="bg-white border-2 border-b-amber-300 border-t-blue-300 border-l-fuchsia-300 border-r-pink-300       p-6 rounded-lg shadow-md ">
                        <h2 class="text-xl font-serif  uppercase mb-4">User List</h2>
                        <table class="table-auto w-full">
                            <thead class="text-gray-700 bg-gray-200 text-sm font-serif uppercase">
                                <tr>
                                    <th class="px-4 py-2">Id</th>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Password</th>
                                    <th class="px-4 py-2">Created_At</th>
                                    <th class="px-4 py-2">Updated_At</th>
                                    <th class="px-4 py-2">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr class="border-b-2 border-gray-200 hover:bg-gray-100">
                                        <td class="px-4 py-3">{{ $key + 1 }}</td>
                                        <td class="px-4 py-3">{{ $user->name }}</td>
                                        <td class="px-4 py-3">{{ $user->email }}</td>
                                        <td class="px-4 py-3">{{ $user->password }}</td>
                                        <td class="px-4 py-3">{{ $user->created_at }}</td>
                                        <td class="px-4 py-3">{{ $user->updated_at }}</td>
                                        <td>
                                            <a href="{{ 'list/' . $user->id }}"
                                                class=" text-center p-2 rounded-lg bg-red-300 text-gray-800 pr-5 pl-5  hover:bg-red-200 hover:text-gray-950">Delete</a>
                                            <a href="{{ 'find/' . $user->id }}"
                                                class=" text-center p-2 rounded-lg bg-emerald-300  text-gray-800 pr-5 pl-5 ml-5  hover:bg-emerald-200 hover:text-gray-950">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Add New User</h1>
    <form action="" method="POST">

        <div class="bg-white shadow-md rounded p-6">
            <div class="mb-4">
                <label for="profile" class="block text-sm font-medium text-gray-700">Profile</label>
                <input type="text" id="profile" name="profile" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="flex justify-between mt-6">
                <a href="" class="text-gray-500 hover:underline">Back</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
            </div>
        </div>
    </form>
</div>


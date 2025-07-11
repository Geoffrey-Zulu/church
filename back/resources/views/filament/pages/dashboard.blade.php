<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
        <div class="bg-white dark:bg-gray-900 rounded-xl shadow p-6 flex flex-col items-center justify-center">
            <h2 class="text-2xl font-bold mb-2">Welcome to Church Admin</h2>
            <p class="text-gray-600 dark:text-gray-300 mb-4">Manage your church, members, and admins with ease.</p>
            <div class="flex gap-4">
                <a href="/admin/members" class="px-4 py-2 bg-amber-500 text-white rounded hover:bg-amber-600 transition">View Members</a>
                <a href="/admin/users" class="px-4 py-2 bg-amber-500 text-white rounded hover:bg-amber-600 transition">View Users</a>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="bg-white dark:bg-gray-900 rounded-xl shadow p-6">
            <h3 class="text-xl font-semibold mb-2">Logs (Coming Soon)</h3>
            <p class="text-gray-500">This section will show system logs and activity in the future.</p>
        </div>
    </div>
</x-filament-panels::page>

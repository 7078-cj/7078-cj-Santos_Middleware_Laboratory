@vite(['resources/css/app.css'])

<div class="flex items-center justify-center h-screen bg-blue-50">
    <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md text-center">
        <!-- Guest Header -->
        <h2 class="text-2xl font-bold text-[#1e0e4b]">GUEST PANEL</h2>
        <p class="text-gray-600 mt-2">Welcome, <span class="text-blue-500 font-semibold">{{ Auth::user()->name }}</span></p>

        <!-- Logout Form -->
        <form action="/logout" method="POST" class="mt-6">
            @csrf
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-md text-sm font-medium transition-all">
                LOGOUT
            </button>
        </form>
    </div>
</div>

@vite(['resources/css/app.css'])

<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md text-center">
        
        <h2 class="text-2xl font-bold text-[#1e0e4b]">ADMIN PANEL</h2>
        <p class="text-gray-600 mt-2">Welcome, <span class="text-[#7747ff] font-semibold">{{ Auth::user()->name }}</span></p>

        
        <form action="/logout" method="POST" class="mt-6">
            @csrf
            <button type="submit"
                class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-md text-sm font-medium transition-all">
                LOGOUT
            </button>
        </form>
    </div>
</div>

@vite(['resources/css/app.css'])
<div  class="flex items-center justify-center h-screen ">
    
    <div class="max-w-md relative flex flex-col p-4 rounded-md text-black bg-white">
        <div class="text-2xl font-bold mb-2 text-[#1e0e4b] text-center">Welcome back to <span class="text-[#7747ff]">App</span></div>
        <div class="text-sm font-normal mb-4 text-center text-[#1e0e4b]">Create your account</div>
    <form class="flex flex-col gap-3" action="/register" method="POST">
        @csrf
        <div class="block relative"> 
        <label for="username" class="block text-gray-600 cursor-text text-sm leading-[140%] font-normal mb-2">Username</label>
        <input type="text" name="name" class="rounded border border-gray-200 text-sm w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2  ring-gray-900 outline-0">
        
        </div>
        <div class="block relative"> 
            <label for="email" class="block text-gray-600 cursor-text text-sm leading-[140%] font-normal mb-2">Email</label>
            <input type="email" name="email" class="rounded border border-gray-200 text-sm w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2  ring-gray-900 outline-0">
            
            </div>
        
         <div class="block relative">
            <label for="role" class="block text-gray-600 cursor-text text-sm leading-[140%] font-normal mb-2">
                Select Role
            </label>
            <select name="role" required
                class="rounded border border-gray-200 text-sm w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                <option value="guest">Guest</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        
        
        <div class="block relative"> 
        <label for="password" class="block text-gray-600 cursor-text text-sm leading-[140%] font-normal mb-2">Password</label>
        <input type="password" name="password" class="rounded border border-gray-200 text-sm w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
        
        </div>
        
        <button type="submit" class="bg-[#7747ff] w-max m-auto px-6 py-2 rounded text-white text-sm font-normal">Submit</button>
    
    </form>
    <div class="text-sm text-center mt-[1.6rem]">Already have an account? <a class="text-sm text-[#7747ff]" href="/login">Login</a></div>
    </div>
</div>

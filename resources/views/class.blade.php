<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-[#F8F9Fd]">
    @livewireScripts
    <nav class="flex items-center justify-between bg-white py-3.5 pr-5 lg:pl-8 lg:pr-12">
        <div class="flex items-center gap-x-4 px-8">
            <img src="{{ asset('assets/images/kompas_logo.jpeg') }}" alt="Logo Kompas" class="w-56"/>
        </div>
        <div class="dropdown inline-block">
            <button class="py-2 flex items-center gap-x-3 ">
                <img src="{{ asset('assets/images/default_photo.png') }}" alt="Photo Profile" class="w-10 h-10 object-cover rounded-full">
            </button>
            <div class="dropdown-menu absolute min-w-[170px] hidden bg-white rounded-xl pt-3 p-5 -pl-10 mr-24">
                <a href="{{route('profile.show')}}" class="dropdown-item rounded-t-xl text-left">
                    <p>Profil</p>
                </a>
                <hr/>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button type="submit" class="w-full dropdown-item rounded-b-xl text-left">
                        <p>Keluar</p>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mx-auto flex flex-col gap-y-10">
        <div class="flex flex-col text-center">
            <h1 class="font-semibold text-4xl text-sky-600 mb-4 mt-10">Teknologi Layanan Jaringan (TLJ)</h1>
            <h1 class="font-semibold text-lg text-sky-900 mb-4">Daftar Kelas Teknologi Layanan Jaringan</h1>
        </div>
        @livewire('show-class')
    </div>

</body>
<script>
    var dropdown = document.querySelector(".dropdown");
    dropdown?.addEventListener("click", toggleDropdownMenu);

    function toggleDropdownMenu() {
        const dropdownMenu = document.querySelector(".dropdown-menu");
        dropdownMenu.classList.toggle("hidden");
    }
</script>
</html>

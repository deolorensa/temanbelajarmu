<div>
    <div class="flex-none md:flex mt-2 gap-x-5 mx-5">
        <div class="basis-1/3 flex-col">
            @foreach ($class as $item)
            <button wire:click="getIdQuiz({{$item->id}})" class="flex w-full p-5 gap-x-3 bg-white rounded-2xl shadow-xl applicant-card max-h-20 mb-5 hover:text-sky-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-bar-chart-2"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><path d="M12 18v-6"/><path d="M8 18v-1"/><path d="M16 18v-3"/></svg>
                <p class="font-medium hover:text-sky-600 text-xl ">{{$item->name}}</p>
            </button>
            @endforeach
            <a href="{{route('home')}}" class="flex w-full p-5 gap-x-3 font-medium bg-white text-xl rounded-2xl shadow-xl applicant-card max-h-20 mb-5 hover:text-sky-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
                Quiz
            </a>
        </div>
        <div class="basis-2/3">
            @if($detailQuiz)
            <div class="p-10 bg-white rounded-2xl shadow-xl applicant-card text-center md:text-left">
                <p class="font-medium text-sky-600 text-4xl mb-5">{{$detailQuiz->name}}</p>
                <hr>
                <h2 class="mt-5 text-2xl font-bold text-gray-600">Deskripsi Pembelajaran</h2>
                <p class="text-gray-500 text-left">{{ $detailQuiz->description }}</p>
                <h2 class="text-2xl font-bold text-gray-600 mt-5">Materi Pembelajaran</h2>
                <div class="mb-5">
                    <div class="mt-5 max-h-screen">
                        <object
                            data="{{ asset('storage/pdf/'.$detailQuiz->pdf) }}"
                            type="application/pdf"
                            width="100%"
                            height="100%"
                            class="h-[800px]">
                            <iframe
                                src="{{ asset('storage/pdf/'.$detailQuiz->pdf) }}"
                                width="100%"
                                height="100%"
                                style="border: none;">
                                <p>
                                    Your browser does not support PDFs.
                                    <a href="{{ asset('storage/pdf/'.$detailQuiz->pdf) }}">Download the PDF</a>
                                </p>
                            </iframe>
                        </object>
                    </div>
                </div>
            </div>
            @else
            <div class="w-full mx-auto bg-white p-10 rounded-2xl shadow-xl">

                <p class="text-center">Pilih Salah Satu Daftar Kelas</p>
            </div>
            @endif
        </div>
    </div>
</div>

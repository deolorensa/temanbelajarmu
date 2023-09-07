<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="h-screen flex items-center justify-center">
        <form autocomplete="off" class="flex flex-col gap-y-6 w-[500px]" action="{{route('upload.pdf', $quiz->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <input type="hidden" name="id" value="{{$quiz->id}}" id="">
                <input type="hidden" name="name" value="{{$quiz->name}}" id="">
                <input type="hidden" name="description" value="{{$quiz->description}}" id="">
                <input type="hidden" name="minutes" value="{{$quiz->minutes}}" id="">
                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " id="pdf" name="pdf" required type="file" accept="application/pdf">
                @error('pdf')
                    <div class="capitalize-first text-sm text-red mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex justify-end -mr-2">
                <a href="{{ url()->previous() }}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</a>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Upload</button>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>

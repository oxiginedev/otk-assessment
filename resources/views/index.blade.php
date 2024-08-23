<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OTK Group Assessment</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <h2 class="text-xl">OTK Assessment Task</h2>
            </div>
        
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                @session('success')
                    <div class="mb-4 p-4 border border-green-300 bg-green-50 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession
                
                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div>
                        <x-label for="name" :value="__('Name')" />
                        <x-input 
                            id="name" 
                            class="block mt-1 w-full" 
                            type="text" 
                            name="name" 
                            :value="old('name')"
                            required 
                            autofocus 
                        />
                        @error('name')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <x-label for="name" :value="__('Email Address')" />
                        <x-input 
                            id="name" 
                            class="block mt-1 w-full" 
                            type="email" 
                            inputmode="email"
                            name="email" 
                            :value="old('email')"
                            required 
                            autofocus
                        />
                        @error('email')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <x-button type="submit">
                            Submit
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

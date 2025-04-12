<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Proyecto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-8 text-gray-800 dark:text-gray-200">{{ __('Crear Proyecto') }}</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-8">
                    {{ __('Completa los campos para agregar un nuevo proyecto. Solo la primera imagen es obligatoria.') }}
                </p>

                <form method="POST" action="{{ route('proyectos.store') }}" enctype="multipart/form-data" class="space-y-8">
                    @csrf

                    <!-- Título -->
                    <div class="space-y-2">
                        <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Título') }}</label>
                        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                        @error('titulo')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Descripción -->
                    <div class="space-y-2">
                        <label for="descripcion" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Descripción') }}</label>
                        <textarea name="descripcion" id="descripcion" rows="4" required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">{{ old('descripcion') }}</textarea>
                        @error('descripcion')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Imágenes -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __('Imágenes del Proyecto') }}</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            {{ __('Sube hasta 6 imágenes. Solo la primera imagen es obligatoria y debe ser en formato JPEG, PNG o JPG con un tamaño máximo de 2MB.') }}
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @for ($i = 1; $i <= 6; $i++)
                                <div class="space-y-2">
                                    <div class="relative group">
                                        <!-- Image Preview Container -->
                                        <div id="preview_container_{{ $i }}" class="w-full h-48 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center overflow-hidden border-2 border-dashed border-gray-300 dark:border-gray-600 mb-2">
                                            <div id="placeholder_{{ $i }}" class="text-center p-4">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ __('Imagen ') . $i }}</p>
                                            </div>
                                            <img id="preview_{{ $i }}" class="hidden w-full h-full object-cover" src="#" alt="Preview">
                                        </div>
                                        
                                        <!-- File Input -->
                                        <input type="file" name="imagen_{{ $i }}" id="imagen_{{ $i }}" 
                                            @if ($i == 1) required @endif accept="image/jpeg,image/png,image/jpg"
                                            class="absolute inset-0 w-full h-48 opacity-0 cursor-pointer z-10"
                                            onchange="previewImage(this, {{ $i }})">
                                            
                                        <!-- Overlay for hover effect -->
                                        <div class="absolute inset-0 w-full h-48 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 rounded-lg flex items-center justify-center">
                                            <span class="text-white opacity-0 group-hover:opacity-100 font-medium">{{ __('Seleccionar imagen') }}</span>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between">
                                        <label for="imagen_{{ $i }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Imagen ') . $i }}</label>
                                        <button type="button" onclick="clearImage({{ $i }})" id="clear_{{ $i }}" class="hidden text-xs text-red-500 hover:text-red-700">
                                            {{ __('Eliminar') }}
                                        </button>
                                    </div>
                                    
                                    @error("imagen_$i")
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Botón de guardar -->
                    <div class="flex justify-end mt-10">
                        <button type="submit"
                            class="px-8 py-3 bg-indigo-600 text-white text-sm font-medium rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                            {{ __('Guardar Proyecto') }}
                        </button>
                    </div>
                </form>
        </div>
    </div>

    <script>
        function previewImage(input, index) {
            const preview = document.getElementById(`preview_${index}`);
            const placeholder = document.getElementById(`placeholder_${index}`);
            const clearButton = document.getElementById(`clear_${index}`);
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                    clearButton.classList.remove('hidden');
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        function clearImage(index) {
            const input = document.getElementById(`imagen_${index}`);
            const preview = document.getElementById(`preview_${index}`);
            const placeholder = document.getElementById(`placeholder_${index}`);
            const clearButton = document.getElementById(`clear_${index}`);
            
            input.value = '';
            preview.src = '#';
            preview.classList.add('hidden');
            placeholder.classList.remove('hidden');
            clearButton.classList.add('hidden');
        }
    </script>

    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('descripcion'); // Replace 'descripcion' with the ID of your textarea
    </script>

    @push('styles')
        <style>
            .espacio {
                padding: 100px !important;
            }
        </style>
        
    @endpush
</x-app-layout>

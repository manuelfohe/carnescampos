<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M80 48a48 48 0 1 1 96 0A48 48 0 1 1 80 48zm64 193.7v65.1l51 51c7.1 7.1 11.8 16.2 13.4 26.1l15.2 90.9c2.9 17.4-8.9 33.9-26.3 36.8s-33.9-8.9-36.8-26.3l-14.3-85.9L66.8 320C54.8 308 48 291.7 48 274.7V186.6c0-32.4 26.2-58.6 58.6-58.6c24.1 0 46.5 12 59.9 32l47.4 71.1 10.1 5V160c0-17.7 14.3-32 32-32H384c17.7 0 32 14.3 32 32v76.2l10.1-5L473.5 160c13.3-20 35.8-32 59.9-32c32.4 0 58.6 26.2 58.6 58.6v88.1c0 17-6.7 33.3-18.7 45.3l-79.4 79.4-14.3 85.9c-2.9 17.4-19.4 29.2-36.8 26.3s-29.2-19.4-26.3-36.8l15.2-90.9c1.6-9.9 6.3-19 13.4-26.1l51-51V241.7l-19 28.5c-4.6 7-11 12.6-18.5 16.3l-59.6 29.8c-2.4 1.3-4.9 2.2-7.6 2.8c-2.6 .6-5.3 .9-7.9 .8H256.7c-2.5 .1-5-.2-7.5-.7c-2.9-.6-5.6-1.6-8.1-3l-59.5-29.8c-7.5-3.7-13.8-9.4-18.5-16.3l-19-28.5zM2.3 468.1L50.1 348.6l49.2 49.2-37.6 94c-6.6 16.4-25.2 24.4-41.6 17.8S-4.3 484.5 2.3 468.1zM512 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm77.9 348.6l47.8 119.5c6.6 16.4-1.4 35-17.8 41.6s-35-1.4-41.6-17.8l-37.6-94 49.2-49.2z"></path>

                </svg>
                <span class="ml-3 text-2xl">Proveedors</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('proveedor.index')}}">Regresar</a>
            </nav>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Formulario de registro de proveedores
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Ingrese los campos solicitados

                    <form method="POST" action="{{ route('proveedor.store') }}">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <x-input-label for="nombre" :value="__('Nombre')" />
                                <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre')" required autofocus autocomplete="nombre" placeholder="Ingresa nombre completo" />
                                <x-input-error class="mt-2" :messages="$errors->get('nombre')" />
                            </div>

                            <div>
                                <x-input-label for="rfc" :value="__('RFC')" />
                                <x-text-input id="rfc" name="rfc" type="text" class="mt-1 block w-full" :value="old('rfc')" required autocomplete="rfc" placeholder="Ingresa rfc" />
                                <x-input-error class="mt-2" :messages="$errors->get('rfc')" />
                            </div>

                            <div>
                                <x-input-label for="telefono" :value="__('Teléfono')" />
                                <x-text-input id="telefono" name="telefono" type="number" class="mt-1 block w-full" :value="old('telefono')" required autocomplete="telefono" placeholder="Ingresa teléfono" />
                                <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
                            </div>
                            <div>
                                <x-input-label for="correo" :value="__('Correo')" />
                                <x-text-input id="correo" name="correo" type="email" class="mt-1 block w-full" :value="old('correo')" required autocomplete="correo" placeholder="Ingresa correo" />
                                <x-input-error class="mt-2" :messages="$errors->get('correo')" />
                            </div>
                        </div>
                        <div>
                            <div class="mb-6 ">
                                <x-input-label for="direccion" :value="__('Dirección')" />
                                <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value="old('direccion')" required autocomplete="direccion" placeholder="Ingresa dirección" />
                                <x-input-error class="mt-2" :messages="$errors->get('direccion')" />
                            </div>


                        </div>
                        </p>
                        <div class="flex justify-center">
                            <div class="text-center lg:text-center">
                                <a href="{{route('proveedor.index')}}">
                                    <x-secondary-button class="ml-3">
                                        cancelar
                                    </x-secondary-button>
                                </a>
                            </div>
                            <div class="text-center lg:text-center">
                                <x-primary-button class="ml-3">
                                    Guardar
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
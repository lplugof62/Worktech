@extends('layouts.footer')
<x-guest-layout>

    <style>
        [x-cloak] {
            display: none;
        }

        .svg-icon {
            width: 1em;
            height: 1em;
        }

        .svg-icon path,
        .svg-icon polygon,
        .svg-icon rect {
            fill: #333;
        }

        .svg-icon circle {
            stroke: #4691f6;
            stroke-width: 1;
        }

    </style>

    <script>
        function dropdown() {
            return {
                options: [],
                selected: [],
                show: false,
                open() {
                    this.show = true
                },
                close() {
                    this.show = false
                },
                isOpen() {
                    return this.show === true
                },
                select(index, event) {

                    if (!this.options[index].selected) {

                        this.options[index].selected = true;
                        this.options[index].element = event.target;
                        this.selected.push(index);

                    } else {
                        this.selected.splice(this.selected.lastIndexOf(index), 1);
                        this.options[index].selected = false
                    }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);


                },
                loadOptions() {
                    const options = document.getElementById('select').options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute('selected') != null ? options[i].getAttribute(
                                'selected') : false
                        });
                    }


                },
                selectedValues() {
                    return this.selected.map((option) => {
                        return this.options[option].value;
                    })
                }
            }
        }

    </script>
    <div class="flex items-center justify-center p-4 mt-10 ">
        <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
            <h2 class="text-gray-800" style="text-align: center; font-size:x-large; font-weight:bold">Editar mi
                perfil</h2>
            <h3 class="text-gray-800" style="text-align: center;  font-weight:bold">Desarrollador</h3><br>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class='flex items-center justify-center w-full'>
                    <label for="photo"
                        class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                Cargue una imagen jpg o png, máximo 200KB</p>
                        </div>
                        <input type='file' id="photo" name="photo" class="hidden" />
                    </label>
                </div>
                <div class="flex flex-wrap m-4 border-b-2 border-green-100 ">
                    <div class=" p-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-1">
                        <x-jet-label for="experience" value="{{ __('Años de experiencia:') }}" />
                        <x-jet-input id="experience" class="block mt-1 w-full text-sm text-gray-500" type="number"
                            name="experience" :value="old('experience')"
                            placeholder="Digite el número de años de experiencia" required autofocus />
                    </div>

                    <div class=" w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6">
                        <x-jet-label for="educationDev" value="{{ __('Educación:') }}" />
                        <x-jet-input id="educationDev" class="block mt-1 w-full text-sm text-gray-500" type="text"
                            name="educationDev" :value="old('educationDev')" placeholder="Estudio realizado" required
                            autofocus />

                        <x-jet-label class="mt-4 pt-4" for="level" value="{{ __('Nivel de educación:') }}" />
                        <select id="level" class="mt-1 rounded block w-full text-sm text-gray-500" type="text"
                            name="level" :value="old('level')" placeholder="Selecciona un nivel" required>
                            <option value="1">Técnico</option>
                            <option value="2">Tecnólogo</option>
                            <option value="2">Profesional</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-wrap m-4 border-b-2 border-green-100">
                    <div class="p-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-1">
                        <x-jet-label class="pt-4" for="skillsDev" value="{{ __('Habilidades:') }}" />
                        <select id="skillsDev" class="mt-1 rounded block w-full text-sm text-gray-500" type="text"
                            name="skillsDev" :value="old('skillsDev')" placeholder="Digita o selecciona tus habilidades"
                            required>
                            <option value="1">Líder</option>
                            <option value="2">Autodidacta</option>
                            <option value="2">Trabajo en equipo</option>
                        </select>

                        <x-jet-label class="mt-4 pt-4" for="portfolio" value="{{ __('Portafolio:') }}" />
                        <x-jet-input id="portfolio" class="block mt-1 w-full text-sm text-gray-500" type="text"
                            name="portfolio" :value="old('portfolio')" placeholder="Ingrese la URL de su portafolio"
                            required autofocus />

                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6">
                        <x-jet-label class="pt-4" for="techsDev"
                            value="{{ __('Tecnologías o lenguajes de programación:') }}" />
                        <select id="techsDev" class="mt-1 rounded block w-full text-sm text-gray-500" type="text"
                            name="techsDev" :value="old('techsDev')" placeholder="Digita o selecciona tus habilidades"
                            required>
                            <option value="1">Illustrator</option>
                            <option value="2">Java</option>
                            <option value="2">PHP</option>
                        </select>

                        <x-jet-label class="mt-4 pt-4" for="project" value="{{ __('Proyectos destacados:') }}" />
                        <x-jet-input id="project" class="block mt-1 w-full text-sm text-gray-500" type="text"
                            name="project" :value="old('project')" placeholder="Ingrese la URL de su proyecto destacado"
                            required autofocus />

                    </div>
                </div>
                <div class="flex flex-wrap m-4 border-b-2 border-green-100">
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6">
                        <x-jet-label class="pt-4" for="aboutme" value="{{ __('Sobre mi:') }}" />
                        <textarea
                            class="form-textarea block mt-1 w-full text-sm text-gray-500 resize-none border rounded-md"
                            name="aboutme" id="aboutme" rows="8"
                            placeholder="Ingrese información general de su perfil..."></textarea>
                    </div>
                    <div class=" p-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-6">
                        <x-jet-label for="certification" value="{{ __('Certificaciones:') }}" />
                        <x-jet-input id="certification" class="block mt-1 w-full text-sm text-gray-500" type="text"
                            name="certification" :value="old('certification')"
                            placeholder="Digite el nombre de la certificación" required autofocus />

                        <x-jet-label class="mt-4 pt-4" for="language" value="{{ __('Seleccione el idioma:') }}" />
                        <select id="level" class="mt-1 rounded block w-full text-sm text-gray-500" type="text"
                            name="level" :value="old('level')" placeholder="Selecciona un nivel" required>
                            <option value="1">Inglés</option>
                            <option value="2">Portugués</option>
                            <option value="2">Alemán</option>
                        </select>

                        <x-jet-label class="mt-4 pt-4" for="levelLang" value="{{ __('Seleccione el nivel:') }}" />
                        <select id="levelLang" class="mt-1 rounded block w-full text-sm text-gray-500" type="text"
                            name="levelLang" :value="old('levelLang')" placeholder="Selecciona un nivel" required>
                            <option value="1">Básico</option>
                            <option value="2">Intermedio</option>
                            <option value="2">Avanzado</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center m-4 border-b-2 border-green-100">
                    <div class="p-4 w-full sm:w-1/1 md:w-1/1 lg:w-1/1 xl:w-1/1 mb-6 ">
                        <x-jet-label class="mt-4 pt-4" for="curriculum" value="{{ __('Hoja de vida:') }}" />
                        <p class='text-sm w-full text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider my-2'>
                            Cargue un archivo pdf, máximo 1MB</p>
                        <input type='file' id="curriculum" name="curriculum" class="w-full" />
                    </div>
                </div>




                <select x-cloak id="select">
                    <option value="1">php</option>
                    <option value="2">Java</option>
                    <option value="3">Javascript</option>
                    <option value="4">Python</option>
                    <option value="5">MySQL</option>
                    <option value="6">React</option>
                    <option value="7">C#</option>
                    <option value="8">MongoDB</option>
                </select>

                <div x-data="dropdown()" x-init="loadOptions()"
                    class="w-full md:w-1/2 flex flex-col items-center h-64 mx-auto">
                    <input name="values" type="hidden" x-bind:value="selectedValues()">
                    <div class="inline-block relative w-64">
                        <div class="flex flex-col items-center relative">
                            <div x-on:click="open" class="w-full">
                                <div class="my-2 p-1 flex border border-gray-200 bg-white rounded">
                                    <div class="flex flex-auto flex-wrap">
                                        <template x-for="(option,index) in selected" :key="options[option].value">
                                            <div
                                                class="flex justify-center items-center m-1 font-medium py-1 px-1 bg-white rounded bg-gray-100 border">
                                                <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                                    options[option] x-text="options[option].text"></div>
                                                <div class="flex flex-auto flex-row-reverse">
                                                    <div x-on:click.stop="remove(index,option)">
                                                        <svg class="fill-current h-4 w-4 " role="button"
                                                            viewBox="0 0 20 20">
                                                            <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                           c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                           l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                           C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                        </svg>

                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                        <div x-show="selected.length == 0" class="flex-1">
                                            <input placeholder="Select a option"
                                                class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800"
                                                x-bind:value="selectedValues()">
                                        </div>
                                    </div>
                                    <div
                                        class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">

                                        <button type="button" x-show="isOpen() === true" x-on:click="open"
                                            class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                            <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                  c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                  L17.418,6.109z" />
                                            </svg>

                                        </button>
                                        <button type="button" x-show="isOpen() === false" @click="close"
                                            class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                  c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                  " />
                                            </svg>

                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div x-show.transition.origin.top="isOpen()"
                                    class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select"
                                    x-on:click.away="close">
                                    <div class="flex flex-col w-full overflow-y-auto h-64">
                                        <template x-for="(option,index) in options" :key="option" class="overflow-auto">
                                            <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                @click="select(index,$event)">
                                                <div
                                                    class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                    <div class="w-full items-center flex justify-between">
                                                        <div class="mx-2 leading-6" x-model="option"
                                                            x-text="option.text"></div>
                                                        <div x-show="option.selected">
                                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                                                <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
                              C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
                              L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <br>
                <div class="flex items-center justify-center mt-4">
                    <x-jet-button type="submit" style="background-color: #fd6d16" class="ml-4">
                        {{ __('Guardar cambios') }}
                    </x-jet-button>
                </div>

                <br><br>
            </form>
        </div>
    </div>

</x-guest-layout>
@section('footer')

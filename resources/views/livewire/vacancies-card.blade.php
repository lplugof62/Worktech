<div>
    @foreach ($vacancies as $vacancy)
        <div class="bg-gray-200 text-gray-800 mx-10 rounded-md items-center border-2 border-blue-300 my-6">
            <a href="job-single.html" class="">
                {{ $vacancy->id }}
                <div class="p-4">
                    <h2 class="text-2xl tracking-tight font-semibold">{{ $vacancy->title }}</h6>
                        <div class="flex justify-between items-center mt-2">
                            <div class="text-sm">Publicado el {{ $vacancy->updated_at->format('d M Y') }}</div>
                            <div class="text-xl text-green-600 font-semibold">{{ $vacancy->currency }}
                                {{ $vacancy->salary }}</div>
                        </div>
                        <div class="mt-2">
                            <p>
                                {{ $vacancy->get_excerpt}}...
                                <span class="text-blue-600 font-semibold"> Ver más</span>
                            </p>
                        </div>
                        <div class="flex justify-between mt-3">
                            <div>
                                <span class="bg-blue-600 text-white rounded-3xl px-3 py-1">MySQL</span>
                                <span class="bg-blue-600 text-white rounded-3xl px-3 py-1">PHP</span>
                            </div>
                            <div>
                                <i class="fa fa-map-marker"></i> Colombia
                            </div>
                        </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

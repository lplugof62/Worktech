<div>
    @foreach ($vacancies as $vacancy)
        <x-vacancy-card :vacancy="$vacancy"></x-vacancy-card>
    @endforeach
</div>

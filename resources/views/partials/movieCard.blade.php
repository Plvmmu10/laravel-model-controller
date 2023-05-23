<div>
    <div class="row d-flex justify-content-center">
        <div class="col-3">
            <img src="{{ $movie->image }}" alt="{{ $movie->name }}" class="w-100 h-100 movieImg">
        </div>

        <div class="col-6 text-white movieDesc d-flex flex-column">
            <h1>{{ $movie->title }}</h1>
            <h4>Titolo originale: {{ $movie->original_title }}</h4>
            <p>Nazionalità: {{ $movie->nationality }}</p>
            <p>Data di uscita: {{ $movie->date }}</p>
            <p>Rating: {{ $movie->vote }}</p>

            <div class="d-flex align-self-start">
                <button class="btn btn-danger"><a href="{{ route('home') }}"
                        class="text-decoration-none text-white">Homepage</a></button>
            </div>
        </div>
    </div>
</div>


<style scoped>
    .movieDesc,
    .movieImg {
        background-color: #2b3035;
    }
</style>

<div class="col-3 p-2">
    <div class="card">
        <div class="card-header">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="w-100 h-100">
        </div>
        <div class="card-body">
            <h4>
                {{ $movie->title }}
            </h4>

            <button class="btn btn-danger"><a href="{{ route('movie.show', ['id' => $movie->id]) }}"
                    class="text-decoration-none text-white">Info</a></button>
        </div>
    </div>
</div>


<style scoped>
    .card {
        background: #2b3035;
        color: white;
    }

    .card-header {
        height: 80%;
        width: 100%;
        border: 0;
    }

    .card-body {
        height: 20%;
    }
</style>

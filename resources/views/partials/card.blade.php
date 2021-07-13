<div class="card-container">
    @foreach ($characters as $item)
    <div class="card">
        <img src="{{ $item["thumb"] }}" alt="">
        <h5>{{ $item["title"] }}</h5>
    </div>
    @endforeach
</div>
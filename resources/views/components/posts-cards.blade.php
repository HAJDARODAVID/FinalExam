<div class="row">
    @foreach ($posts as $post)
    <div class="col-sm-6" style = "margin-bottom: 20px">
        <div class="card" style = "height: 160px">
            <div class="card-body">
                <h5 class="card-title" style="margin: 0">{{ $post->post_title }}</h5>
                <p class="card-text" style="margin-top: 5px">
                    {{ Str::limit($post->post_body, 155, $end='...') }}
                </p>
                <a href="{{ route('showPost', $post->id) }}" class="btn btn-primary">Show full</a>
            </div>
        </div>
    </div>
    @endforeach
    {{ $posts->links() }}
</div>
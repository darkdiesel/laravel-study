<ul>
    @forelse($posts As $post)
        <li>{{$post->title}}</li>
    @empty
        <p>Sorry, but there is no news else.</p>
    @endforelse
</ul>

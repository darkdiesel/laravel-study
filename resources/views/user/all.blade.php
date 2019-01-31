@if(!$users->isEmpty())
    <ul>
    @foreach ($users as $user)
        <li>This is user {{ $user->id }}</li>
    @endforeach
    </ul>
@else
    <p>No users found.</p>
@endif




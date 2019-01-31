@if(!$users->isEmpty())
    <ul>
    @foreach ($users as $user)
        <li>This is user {{ $user->first_name }} {{$user->last_name}}</li>
    @endforeach
    </ul>
@else
    <p>No users found.</p>
@endif




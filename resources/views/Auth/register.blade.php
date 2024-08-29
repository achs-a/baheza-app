{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<h1>REGISTER HERE &DownArrow;</h1>
<form action="{{ route('register') }}" method="post" >

    @csrf
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="username" required placeholder="Enter your name">

    <label for="name">Your Email</label>
    <input type="email" id="name" name="email" required placeholder="Enter your email">

    <label for="name">Password</label>
    <input type="password" id="password" name="password" required placeholder="Enter your password">

    <label for="name">Confirmation Password</label>
    <input type="password" id="password" name="password_confirmation" required placeholder="Confirm the password">
    
    <select name="role" required>
        <option value="admin">Admin</option>
        <option value="collector">Collector</option>
        <option value="client">Client</option>
    </select>

    <button type="submit">Register now</button>

@include('partials.navbar')
@section('content')

<!-- Content -->
<div class="container p-5 my-5">
    <h1>Hello, {{ Auth::user()->fullname }} &#128075;</h1>
    
</div>
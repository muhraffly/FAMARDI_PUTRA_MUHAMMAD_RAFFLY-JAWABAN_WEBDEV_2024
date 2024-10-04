@include('partials.navbar')
@section('content')

<div class="container py-5 department">
    <h1>Daftar Department</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->name }}</td>
                <td>
                    <!-- Tombol Edit -->
                    
                    <!-- Tombol Delete -->
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

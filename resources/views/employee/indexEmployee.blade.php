@include('partials.navbar')
@section('content')

<div class="container py-5 employee">
    <h1>Daftar Employee</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->departmentid }}</td>
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

@include('partials.navbar')
@section('content')

<div class="container py-5 spending">
    <h1>Daftar Employee</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Date</th>
                <th>Value</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spendings as $spending)
            <tr>
                <td>{{ $spending->employee_id }}</td>
                <td>{{ $spending->date }}</td>
                <td>{{ $spending->value }}</td>
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

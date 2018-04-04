
@include('includes.header')
<table class="table table-striped table-bordered table-hover" id="data-table">
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone No.</th>
            <th>Email</th>
            <th>Address</th>
            <th>Nationality</th>
            <th>D.O.B</th>
            <th>Education Background</th>
            <th>Preferred Contact</th>
        </tr>
    </thead>
    <tbody>
    	@if(isset($csvData))
    	@foreach($csvData as $val)
        <tr>
            <td>{{ $val->id }}</td>
            <td>{{ $val->name }}</td>
            <td>{{ $val->gender }}</td>
            <td>{{ $val->phoneno }}</td>
            <td>{{ $val->email }}</td>
            <td>{{ $val->address }}</td>
            <td>{{ $val->nationality }}</td>
            <td>{{ $val->dob }}</td>
            <td>{{ $val->education_background }}</td>
            <td>{{ $val->choose_preferred_contact }}</td>
        </tr>
        @endforeach
        @endif
        
    </tbody>
</table>

<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success pull-right">Download CSV</button></a>
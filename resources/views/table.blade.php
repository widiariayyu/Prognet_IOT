@extends('include')
@section('table')
<div class="container">
    <form action="">
        <input type="text" name="start" class="form-control" id="">
    </form>
    <div class="table-responsive">
        <table id="example" class="table table-dark " width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Wind</th>
                    <th>Rainfalls</th>
                    <th>Humidities</th>
                    <th>Temperatures</th>
                    <th>Intensity</th>
                    <th>Rain Status</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>50</td>
                    <td>1030</td>
                    <td>27.40</td>
                    <td>82.80</td>
                    <td>1.0</td>
                    <td>1</td>
                    <td>2018-06-29 02:48:03</td>
                </tr>
            </tbody>	
        </table>
    </div>		
</div>
	
<script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pageLength": 5
            });
            
        });
</script>    
@endsection
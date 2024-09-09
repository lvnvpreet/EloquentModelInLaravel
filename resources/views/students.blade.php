<center>
    <h1>Student Data</h1>

    <!-- <pre>{{ print_r($stdkey, true) }}</pre> -->

    <table>
        <thead>
            <tr>
                
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Batch</th>
            </tr>
        </thead>
        <tbody>
            <!-- in this array loop data save in user veriable one by one this this data we print in table using $user  -->
            @foreach($stdkey as $std)
            <tr>
                <td>{{$std->stName}}</td>
                <td>{{$std->stEmail}}</td>
                <td>{{$std->stBatch}}</td>
               
            </tr>
           @endforeach
        </tbody>
    </table>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>


</center>
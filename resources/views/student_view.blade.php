<table border = "1">
    <tr>
        
        <td>STUDENT NAME</td>
        <td>ADDRESS</td>
        <td>PHONE NUMBER</td>
    </tr>
    <tr>
        <td>{{$student->db_student_name}}</td>
        <td>{{$student->db_student_address}}</td>
        <td>{{$student->db_phone_number}}</td>
        <td>
            <!-- <form action="{{ route('student.edit', [ 'student' => $student->id ]) }}" method="GET|HEAD">
                @csrf
                
                <input type="submit" value="EDIT">
            </form> -->
            <a href="{{route('student.edit', [ 'student' => $student->id])}}">Edit</a>
        </td>
        <td>
            
        </td>
    </tr>

</table>
<p><a href="/student/list">return</a></p>
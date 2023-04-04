<header>STUDENT LIST</header>

<table border = "1">
    <tr>
        
        <td>STUDENT NAME</td>
        <td>ADDRESS</td>
        <td>PHONE NUMBER</td>
       
        
        
    </tr>
    @foreach($students as $student)
    <tr>
        
        <td>{{$student['db_student_name']}}</td>
        <td>{{$student['db_student_address']}}</td>
        <td>{{$student['db_phone_number']}}</td>
        <td><a href={{"/student/".$student['id']}} method="GET|HEAD">VIEW</a>
        
        
    </tr>
    @endforeach
    
</table>
<h><a href=> (1) </a></h><h><a href=> (2) </a></h><h><a href=> (3) </a></h>
<br>
<br>
<Header><a href="/student/create" method="GET|HEAD">Add Student</a></Header>
<br>
<br>
<p><a href="/dashboard">return</a></p>
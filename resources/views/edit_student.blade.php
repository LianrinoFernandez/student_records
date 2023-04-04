<HTML>
<form action="{{route('student.update', [ 'student' => $student->id ])}}" method="POST">
@csrf
@method('PUT')
<label for="studentname"><b>Name</b></label>
            <input type="text" placeholder="Enter student name" name="student_name" value="{{$student->db_student_name}}"><br>
                @error('student_name')
                    <div style="color:red;">{{ $message }}</div>
                @enderror

<label for="studentaddress"><b>Address</b></label>
            <input type="text" placeholder="Enter student address" name="student_address"  value="{{$student->db_student_address}}"><br>
                @error('student_address')
                    <div style="color:red;">{{ $message }}</div>
                @enderror

<label for="phonenumber"><b>Phone</b></label>
            <input type="text" placeholder="Enter phone number" name="phone_number" value="{{$student->db_phone_number}}"><br>
                @error('phone_number')
                  <div style="color:red;">{{ $message }}</div>
             @enderror
        <br>
    <input type="submit" value="UPDATE"><br>
    </form>
    <br>
    <form action="{{route('student.delete', [ 'student' => $student->id ])}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="REMOVE">
            </form>

<p><a href="/student/list">CANCEL</a></p>
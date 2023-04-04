<HTML>
    <form action="{{ route('student.store') }}" method="POST">
    <h1>STUDENT FORM</h1>
    <p>Please fill in this form to add a student.</p>
    @csrf

        <label for="studentname"><b>Name</b></label>
            <input type="text" placeholder="Enter Student name"  name="student_name" >
            @error('student_name')
                <div style="color:red;">{{ $message }}</div>
            @enderror
            
            <br>

        <label for="studentaddress"><b>Address</b></label>
             <input type="text" placeholder="Enter Address"  name="student_address"><br>
             @error('student_address')
                <div style="color:red;">{{ $message }}</div>
            @enderror

        <label for="phonenumber"><b>Phone number</b></label>
            <input type="text" placeholder="Enter Phone number"  name="phone_number" ><br>
            @error('phone_number')
                <div style="color:red;">{{ $message }}</div>
            @enderror

            <div class="clearfix">
            <br>

            <br>
            <input type="submit" name="submit" value="ADD"><br>
        </form>
    <br>
<br>


<br>
<br>
<p><a href="/student/list">return</a></p>
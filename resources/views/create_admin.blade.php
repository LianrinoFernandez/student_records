<h>REGISTER AN ACCOUNT</h>
<form action="{{ route('admin.store') }}" method="POST">
    @csrf
        <br>
            <label for="admin_username"><b>Username</b></label>
                 <input type="text" placeholder="Username"  name="admin_username" >
                     <br>
                        @error('admin_username')
                            <div style="color:red;">{{ $message }}</div>
                         @enderror
                        <br>

            <label for="admin_password"><b>Password</b></label>
                <input type="text" placeholder="password"  name="admin_password" >
                    <br>
                        @error('admin_password')
                            <div style="color:red;">{{ $message }}</div>
                        @enderror
                        <br>

            <label for="confirm_password"><b>Confirm Password</b></label>
                <input type="text" placeholder="confirm password"  name="confirm_password" >
                    <br>
                        @error('confirm_password')
                            <div style="color:red;">{{ $message }}</div>
                        @enderror
                        <br>
                     

            
                        <input type="submit" name="submit" value="REGISTER"><br>
            </form>
<p></p>
<h><a href="/">return</a></h>
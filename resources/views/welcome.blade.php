@extends('welcomebody')

@section('content')
<center><a href="{{url('/showall')}}" style="color:green;">Show All Details</a>
<h2><center>Basic Contact Detail Form </center></h2>
                <form method="post" action="{{route('form.submit')}}">
                    {{csrf_field()}}
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" value="{{old('name')}}"><br>
                    
                    <label for="gender">Gender:</label><br>
                    <input type="radio" id="gender" name="gender" value="Male"  {{-- if(old('gender') =='Male') checked @endselect --}}>Male
                    <input type="radio" id="gender" name="gender" value="Female"  {{-- if(old('gender') =='Female') checked @endselect --}} >Female  <br>
                    
                    <label for="number">Phone number (10 Digits):</label><br>
                    <input type="number" id="number" name="number" value="{{old('number')}}" required><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email"  value="{{old('email')}}" required> <br>

                    <label for="address">Address:</label><br>
                    <input type="text" id="address" name="address" value="{{old('address')}}" required> <br>

                    <label for="nationality">Nationality:</label><br>
                    <input type="text" id="nationality" name="nationality" value="{{old('nationality')}}" required> <br>

                    <label for="dob">Date Of Birth:</label><br>
                    <input type="date" id="dob" name="dob" value="{{old('dob')}}" required> <br>

                    <label for="education_background">Education Background</label><br>
                    <select id="education_background" name="education_background"  required>
                        <option value="Masters" {{-- if(old('email') =='Masters') selected @endselect  --}}>Masters</option>
                        <option value="Bachelors" {{-- if(old('email') =='Bachelors') selected @endselect  --}}>Bachelors</option>
                        <option value="HigherSecondary" {{--  if(old('email') =="HigherSecondary") selected @endselect  --}}>Higher Secondary</option>
                        <option value="Secondary" {{-- if(old('Secondary') == "Secondary") selected @endselect  --}}>Secondary</option>
                    </select><br>

                    <label for="preferred_contact">Preferred Contact</label><br>
                    <select id="preferred_contact" name="preferred_contact" required>
                        <option value="Email" {{-- if(old('email') =='Email') selected @endselect --}}>Email</option>
                        <option value="Phone" {{-- if(old('phone') =='Phone') selected @endselect  --}}>Phone</option>
                        <option value="None" {{-- if(old('hone') =='None') selected @endselect  --}} >None</option>
                    </select><br>
                    <input type="submit" value="Submit" style='width:150px'>
                </form>

@endsection()
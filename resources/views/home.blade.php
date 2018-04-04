@include('includes.header')
<div class="container">
    <form class="form-horizontal" onsubmit="return validateForm()" name="myform" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <fieldset>

            <legend style="text-align: center;">Registration Form</legend>

            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="col md-8 alert alert-danger">{{$error}}</div>
                @endforeach
            @endif 
            
            @if(session('response'))
                <div class="col-md-8 alert alert-success">
                    {{session('response')}}
                </div>
            @endif

            <div class="form-group">
                <label for="inputName" class="col-lg-2 control-label">Name:</label>
                <div class="col-lg-8">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                    <span id="usernameid" class="text-danger font-weight-bold"></span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Gender:</label>
                <div class="col-lg-8" id="gender">
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="Female">
                            Female
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="Male">
                            Male
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="numberphone" class="col-lg-2 control-label">Phone Number:</label>
                <div class="col-lg-8">
                    <input type="text" name="phoneno" class="form-control" id="numberphone" placeholder="98...">
                    <span id="phonenumber"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
                <div class="col-lg-8">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress" class="col-lg-2 control-label">Address:</label>
                <div class="col-lg-8">
                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress" class="col-lg-2 control-label">Nationality:</label>
                <div class="col-lg-8">
                    <input type="text" name="nationality" class="form-control" id="inputAddress" placeholder="Nationality">
                </div>
            </div> 

            <div class="form-group">
                <label for="inputPhone" class="col-lg-2 control-label">Date of Birth:</label>
                <div class="col-lg-8">
                    <input type="datepicker"  name="dob" class="form-control" id="datepicker" placeholder="DOB">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress" class="col-lg-2 control-label">Education background:</label>
                <div class="col-lg-8">
                    <input type="text" name="education_background" class="form-control" id="inputAddress" placeholder="Education background">
                </div>
            </div>

            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Preferred mode of contact:</label>
                <div class="col-lg-8">
                    <select class="form-control" name="choose_preferred_contact" id="select">
                        <option value="phone">Phone</option>
                        <option value="email">Email</option>
                        <option value="none">None</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-8 col-lg-offset-2">
                    <button type="submit" value="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
@include('includes.footer')
<!DOCTYPE html>
<html>
<head>
	<title>Registration file</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="{{ url('css/yeti-theme.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/jquery-ui.js') }}"></script>
    <link rel="shortcut icon" href="#">

    	
	<script>
      $( function()
      {
        $( "#datepicker" ).datepicker();
        } );
	</script>

    <script type="text/javascript">  

        function validateForm()
        {  

            //for name validation
            var name = document.getElementById('inputName').value;

            if (name==null || name=="")
            {  
                alert("Name can't be blank");  
                return false;  
            }
            if ((name.length < 3) || (name.length > 20))
            {
                alert('Invalid length! Minimum length 3');
                return false;
            }
            if (!isNaN(name))
             {
                alert('Invalid Input');
                return false;
            }

            //for gender validation
            var gender = document.getElementsByName('gender');
            var formValid = false;

            var i = 0;
            while (!formValid && i < gender.length) 
            {
                if (gender[i].checked) formValid = true;
                i++;        
            }
            if (!formValid) alert("Must check some option!");

            //for phone number
            var phoneno = document.myform.phoneno.value;
            if(phoneno == "")
            {
                document.getElementById('phonenumber').innerHTML = "Please fill the Phone Number";
                return false;
            }
            if(phoneno.length!=10)
            {
                document.getElementById('phonenumber').innerHTML = "Mobile number should be 10 digits";
                return false;
            }
            if(isNaN(phoneno))
            {
                document.getElementById('phonenumber').innerHTML = "Mobile number should contain only digits";
                return false;
            }

            //for email validation
            var x=document.myform.email.value;  
            var atposition=x.indexOf("@");  
            var dotposition=x.lastIndexOf(".");

            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
            {  
                alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                return false;  
            } 

            //for address validation
            var address=document.myform.address.value;  

            if (address==null || address=="")
            {  
                alert("Address can't be blank");  
                return false;  
            } 

            //for nationality validation
            var nationality=document.myform.nationality.value;  
            
            if (nationality==null || nationality=="")
            {  
                alert("Nationality can't be blank");  
                return false;  
            }

            //for datepicker
            var dob = document.getElementById('datepicker').value;

            if ((dob==null) || (dob=="")) 
            {
                alert("Please pick your date of birth!");
                return false;
            }


            //for education background validation
            var education_background=document.myform.education_background.value;  
                
            if (education_background==null || education_background=="")
            {  
                alert("Education background can't be blank");  
                return false;  
            }

            //Preffered mode of contacts
            var choose_preffered_contact = document.getElementById('select').value;

            if ((choose_preffered_contact) == null || (choose_preffered_contact="")) 
            {
                alert("Choose any preffered mode of contact ");
                return false;
            }
        }  
    </script>  
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel Registration Form</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="candidate">Information</a></li>
                </ul>
            </div>
        </div>
    </nav>
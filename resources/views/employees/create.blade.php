<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<h3 class="text-center m-3">Project Management System</h3>
<div class="container">
    <div class="col-md-12">
        <form method="post" action="{{route('employee.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Employee Name</label>
                        <input type="text" name="name" class="form-control" id="" placeholder="Enter Project Title">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" id="" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="number" name="phone" class="form-control" id="" placeholder="Enter Phone Number">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" name="designation" class="form-control" id="" placeholder="Enter Designation">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Department</label>
                        <input type="text" name="department" class="form-control" id="" placeholder="Enter Departmert">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Joining Date</label>
                        <input name="joining_date" type="date" class="form-control" id="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input type="file" class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Employment Status</label>
                        <input type="" class="form-control" id="">
                    </div>
                </div>
            </div>

            <button type="submit" id="save" class="btn btn-info">Add Employee</button>
        </form>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>

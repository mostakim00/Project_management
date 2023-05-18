<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Project Management System</title>
</head>
<body>

<h3 class="text-center m-3">Project Management System</h3>
<div class="container">
    <div class="row">
        @foreach($data as $data)
            <div class="card" style="width: 18rem; margin-right: 4px;">
                <div class="card-body">
                    <h5 class="card-title">{{$data->title}}</h5>
                    <p class="card-text">
                        <span class="text-info">Total Employees: 5 </span><br>
                        <span class="text-warning">On going Tasks: 12 </span><br>
                        <span class="text-success">Completed Tasks: 23 </span><br>
                        <span class="text-danger">Deadline: 18 June, 2023</span>
                    </p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="form-group mt-3">
            <select class="form-control">
                <option value="">Select Employee</option>
                <option value="1">Mostakim</option>
                <option value="2">Ragib</option>
                <option value="3">Saddam</option>
            </select>
        </div>
        <div class="form-group m-3">
            <select class="form-control">
                <option value="">Select Project</option>
                <option value="1">BPPshop</option>
                <option value="2">Parcel Star</option>
                <option value="3">POS System</option>
            </select>
        </div>
        <button class="btn-sm btn-primary m-3 ">Search</button>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task Name</th>
            <th scope="col">Project</th>
            <th scope="col">Assignee</th>
            <th scope="col">Start Date</th>
            <th scope="col">Finish Date</th>
            <th scope="col">Deadline</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Add to cart functionality</td>
            <td>BPPshop</td>
            <td>Mostakim</td>
            <td>17-05-2023 11:40 am</td>
            <td>--</td>
            <td>23-05-2023</td>
        </tr>
        </tbody>
    </table>
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

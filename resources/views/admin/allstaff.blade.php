@include('admin.css')
@include('admin.sidebar')
@include('admin.navbar')

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Status</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                            </th>
                            <th>Image</th>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Phone </th>
                            <th> Email </th>
                            <th> DOB </th>
                            <th> Address </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $users)
                        <tr>
                            <td>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <img src="assets/images/faces/face1.jpg" alt="image" />
                            </td>
                            <td> {{$users->firstname}} </td>
                            <td> {{$users->lastname}} </td>
                            <td> {{$users->phone}} </td>
                            <td> {{$users->email}} </td>
                            <td> {{$users->dob}} </td>
                            <td> {{$users->address}} </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')

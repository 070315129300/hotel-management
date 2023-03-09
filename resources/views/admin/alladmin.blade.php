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
                            <th> Admin Name </th>
                            <th> Email </th>

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
                            <td> {{$users->name}} </td>
                            <td> {{$users->email}} </td>
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

@include('admin.css')
@include('admin.sidebar')
@include('admin.navbar')


    <section class="header">
        <h2>ADD STAFF</h2>
    </section>
    <section class="form-container">
        <form action="{{url('insertstaff')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid">
                <input
                    type="text"
                    name="firstname"
                    id="username"
                    required
                    placeholder="Firstname"
                    maxlength="10"
                />

                <input
                    type="text"
                    name="lastname"
                    id="username"
                    required
                    placeholder="Lastname"
                    maxlength="10"
                />

                <input
                    type="email"
                    name="email"
                    id="email"
                    required
                    placeholder="Email Address"
                />
                <input
                    type="text"
                    name="phone"
                    id="phone"
                    required
                    placeholder="Phone"
                />
                <input
                    type="text"
                    name="dob"
                    id="dob"
                    required
                    placeholder="Date Of Birth"
                />
                <input
                    type="text"
                    name="address"
                    id="address"
                    required
                    placeholder="House Address"
                />
                <label class="label" for="inputTag">
                    Select Profile Image <br />
                    <i class="fa fa-camera"></i>
                    <input  name="file" type="file" required />

                    <br />
                    <span id="imageName"></span>
                </label>
            </div>

            <div class="submit"><button type="submit">Submit</button></div>
        </form>
    </section>


@include('admin.footer')

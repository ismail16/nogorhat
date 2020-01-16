
@extends('author/layouts/dashboard')

@section('author-content')
<div class="col-sm-10 col-sm-offset-1 card">
    <div class="row">
        <div class="container emp-profile p-2">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" class="img-fluid" alt=""/>
                        </div>
                        <br>
                        <h5> Kshiti Ghelani</h5>
                        <h6>Web Developer and Designer</h6>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <label class="col-md-2">Name </label>
                                    <p class="col-md-10">{{ $user->name }}</p>
                                    <label class="col-md-2">Email </label>
                                    <p class="col-md-10">{{ $user->email }}</p>
                                    <label class="col-md-2">Phone </label>
                                    <p class="col-md-10">{{ $user->Phone }}</p>
                                    <label class="col-md-2">Address </label>
                                    <p class="col-md-10">{{ $user->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

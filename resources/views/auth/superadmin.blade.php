
@extends('layout.auth')

@section('content')

    <div class="hero min-h-screen bg-base-200 ">
        <div class="hero-content flex-col lg:flex-row align-items-center ">

            <div class="card shrink-0 w-full shadow-2xl bg-base-100">
                <form class="card-body w-96 ">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Employee ID</span>
                        </label>
                        <input type="empId" placeholder="Employee ID" class="input input-bordered" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="Password" class="input input-bordered" required />

                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
@endsection


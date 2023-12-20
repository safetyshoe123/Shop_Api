
@extends('layout.auth')

@section('content')
    <div class="hero min-h-screen  bg-base-200">
        <div class="hero-content flex-col lg:flex-row align-items-center ">
            <!-- <div class="text-center lg:text-left">
          <h1 class="text-1xl font-bold">Login now!</h1>
          <p class="py-6"></p>
        </div> -->
            <div class="card bg-base-100">
                <form class="card-body w-96 ">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Branch ID</span>
                        </label>
                        <input type="branchId" placeholder="Branch ID" class="input input-bordered" required />
                    </div>
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
                        <label class="label">
                            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

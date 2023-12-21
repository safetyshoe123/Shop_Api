@extends('layout.app')
@section('content')
    <!-- component -->
    <!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> -->

    <div class="hero min-h-screen  bg-base-200">
    <div class="hero-content flex-col lg:flex-row align-items-center ">
    <section class=" py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg border-0">
                <div class="rounded-t  mb-0 px-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-xl font-bold">
                            Register Employee
                        </h6>
                      
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-5 pt-0">
                    <form>
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            <!-- User Information -->
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Employee ID
                                    </label>
                                    <input class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Employee ID" class="input input-bordered" required />
                                </div>
                            </div>
                        </div> 
                        
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Last Name
                                    </label>
                                    <input class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Last Name" class="input input-bordered" required />
                                </div>
                            </div>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        First Name
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="First Name" class="input input-bordered" required
                                        >
                                </div>
                            </div>
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Middle Name
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Middle Name" class="input input-bordered" required
                                        >
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Date Hired
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Date Hired" class="input input-bordered" required
                                        >
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Status
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Status" class="input input-bordered" required
                                        >
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Salary
                                    </label>
                                    <input class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Salary" class="input input-bordered" required />
                                </div>
                            </div>
                            
                        </div>

                        <!-- <hr class="mt-6 border-b-1 border-blueGray-300"> -->

                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Notes
                                    </label>
                                    <textarea type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Notes" class="input input-bordered" required
                                        rows="4"></textarea>
                                </div>
                            </div>
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Remark
                                    </label>
                                    <textarea type="text" 
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Remark" class="input input-bordered" required
                                        rows="4"></textarea>
                                </div>
                            </div>
                        <div class="w-full lg:w-12/12 px-4">        
                        <div class="form-control mt-6">
                        <button class="btn btn-primary">Register</button>
                        </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
    </div>

</div>
@endsection
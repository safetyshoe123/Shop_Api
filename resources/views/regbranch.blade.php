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
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg border-0">
                <div class="rounded-t  mb-0 px-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-xl font-bold">
                            Register Branch
                        </h6>
                        <!-- <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
          Settings
        </button> -->
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
                                        Branch ID
                                    </label>
                                    <input class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Branch ID" class="input input-bordered" required />
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <!-- <div class="relative w-full mb-3">

              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Branch Name
              </label>
              <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Delsan">
            </div> -->

                 </div> 
                        
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Branch Name
                                    </label>
                                    <input class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Branch Name" class="input input-bordered" required />
                                    <!-- <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        > -->
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                               
                            </div>
                        </div>

                        
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Address 1
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Address 1" class="input input-bordered" required
                                        >
                                </div>
                            </div>
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Address 2
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Address 2" class="input input-bordered" required
                                        >
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Date Opened
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Date Opened" class="input input-bordered" required
                                        >
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Type
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" placeholder="Type" class="input input-bordered" required
                                        >
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">

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
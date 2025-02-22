@extends('admin.layouts.app', ['title' => 'Supplier-Create'])
@section('content')
    <!-- ===== Form Area Start ===== -->
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-center m-6">
            <h2 class="text-title-md2 font-bold text-black dark:text-white text-center">
                Add Supplier    
            </h2>
        </div>
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
            <div class="p-6.5">
                <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                    <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Name <span class="text-meta-1">*</span>
                        </label>
                        <input type="text" placeholder="Enter your Name" name="name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        @error('name')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Phone no. <span class="text-meta-1">*</span>
                        </label>
                        <input type="tel" placeholder="Enter your Phone No." name="phone" max="10"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        @error('phone')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </div>

                <div class="mb-4.5">
                    <label class="mb-2.5 block text-black dark:text-white">
                        Company name <span class="text-meta-1">*</span>
                    </label>
                    <input type="text" placeholder="Enter your Company Name" name="company_name"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                    @error('company_name')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4.5">
                    <label class="mb-2.5 block text-black dark:text-white">
                        Address <span class="text-meta-1">*</span>
                    </label>
                    <input type="text" placeholder="Enter Password" name="address"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                    @error('address')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button class="flex w-100 float-right rounded bg-primary p-3 font-medium text-gray m-5">
                Submit
            </button>
        </form>
    </div>

    <!-- ===== Form Area End ===== -->
@endsection

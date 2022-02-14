@extends('layouts.admin')

@section('content')

    index

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8 col-md-12 grid-margin">--}}
{{--                <div class="d-flex justify-content-between flex-wrap">--}}
{{--                    <div class="align-items-end flex-wrap">--}}
{{--                        <div class="w-50">--}}
{{--                            <img src="{{ auth()->user()->img_admin }}" alt="" class="rounded-circle">--}}
{{--                        </div>--}}
{{--                        <div class="mr-md-3 mr-xl-5 p-3">--}}
{{--                            <h2 class="fs-1">{{ auth()->user()->name }} </h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="p-3">--}}
{{--                    <h3>Detail</h3>--}}
{{--                    <hr>--}}
{{--                    <div class="d-flex">--}}
{{--                        <div class="w-25">--}}
{{--                            <span class="mb-md-2">No Reg</span>--}}
{{--                        </div>--}}
{{--                        <div class="">--}}
{{--                            <span>:</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex">--}}
{{--                        <div class="w-25">--}}
{{--                            <span class="mb-md-2 w-25">Username</span>--}}
{{--                        </div>--}}

{{--                        <div class="">--}}
{{--                            <span>:{{ auth()->user()->username }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex">--}}
{{--                        <div class="w-25">--}}
{{--                            <span class="mb-md-2 w-25">Username</span>--}}
{{--                        </div>--}}

{{--                        <div class="">--}}
{{--                            <span>:{{ auth()->user()->jenis_kelamin }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex">--}}
{{--                        <div class="w-25">--}}
{{--                            <span class="mb-md-2 w-25">Email</span>--}}
{{--                        </div>--}}
{{--                        <div class="">--}}
{{--                            <span>:{{ auth()->user()->email }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex">--}}
{{--                        <div class="w-25">--}}
{{--                            <span class="mb-md-2 w-25">No Telpon</span>--}}
{{--                        </div>--}}

{{--                        <div class="w-25">--}}
{{--                            <span>:{{ auth()->user()->telp }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex">--}}
{{--                        <div class="w-25">--}}
{{--                            <span class="mb-md-2">No Whatsapp</span>--}}
{{--                        </div>--}}
{{--                        <div class="">--}}
{{--                            <span>:{{ auth()->user()->hp }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex">--}}
{{--                        <div class="w-25">--}}
{{--                            <span class="mb-md-2 w-25">Alamat</span>--}}
{{--                        </div>--}}
{{--                        <div class="">--}}
{{--                            <span>:{{ auth()->user()->alamat }}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="p-3">--}}
{{--                    <a href="/editadmin/{{ auth()->user()->id }}" class="btn btn-success">Edit Profile</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

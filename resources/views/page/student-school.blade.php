<div class="row g-6 mb-6 g-xl-9 mb-xl-9">
<!--begin::Followers-->
<!--begin::Col-->
@for ($x = 1; $x <= 6; $x++)
    <div class="col-md-6 col-xxl-4">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body d-flex flex-center flex-column p-9">
                <!--begin::Avatar-->
                <div class="symbol symbol-150px symbol-circle mb-5">
                    <img src="{{ asset('home/') }}/assets/media//avatars/300-{{$x}}.jpg" alt="image" />
                </div>
                <!--end::Avatar-->
                <!--begin::Name-->
                <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Patric Watson</a>
                <!--end::Name-->
                <!--begin::Position-->
                <div class="fw-bold text-gray-400 mb-6">Art Director at Novica Co.</div>
                <!--end::Position-->
                <!--begin::Follow-->
                <a href="#" class="btn btn-sm btn-light-primary">
                <i class="fa-solid fa-circle-info"></i> See Student</a>
                <!--end::Follow-->
            </div>
            <!--begin::Card body-->
        </div>
        <!--begin::Card-->
    </div>
@endfor
<!--end::Col-->
<!--end::Followers-->
</div>
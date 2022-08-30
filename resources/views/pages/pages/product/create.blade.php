<x-base-layout>

    <form action="/store/.{{ $slug }}" method="post">
        @csrf
        <!--begin::Input group-->
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">code</span>
            <input type="text" name="code" required class="form-control" placeholder="code" aria-label="code"
                aria-describedby="basic-addon1" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">local_name</span>
            <input type="text" name="local_name" required class="form-control" placeholder="local_name"
                aria-label="local_name" aria-describedby="basic-addon1" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">latin_name</span>
            <input type="text" name="latin_name" required class="form-control" placeholder="latin_name"
                aria-label="latin_name" aria-describedby="basic-addon1" />
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="input-group mb-5">
            <input type="hidden" name="type" class="form-control" value="{{ $slug }}"
                placeholder="latin_name" aria-label="latin_name" aria-describedby="basic-addon1" />
        </div>
        <!--end::Input group-->
        <button type="submit" class="btn btn-light-success">Success</button>
    </form>
<p>
    product?type=program

    product?type=attachment

    product?type=purchase

    product?type=purchaseattach
</p>

</x-base-layout>

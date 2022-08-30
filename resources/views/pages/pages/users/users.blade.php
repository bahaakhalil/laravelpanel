<x-base-layout>

    <form action="/users" method="post">
        @csrf
    <!--begin::Input group-->
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">first_name</span>
            <input type="text" name="first_name" required class="form-control" placeholder="first_name" aria-label="first_name" aria-describedby="basic-addon1"/>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">last_name</span>
            <input type="text" name="last_name" required class="form-control" placeholder="last_name" aria-label="last_name" aria-describedby="basic-addon1"/>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">email</span>
            <input type="text" name="email" required class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1"/>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">password</span>
            <input type="password" name="password" required class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1"/>
        </div>
        <!--end::Input group-->
        <button type="submit" class="btn btn-light-success">Success</button>
    </form>


</x-base-layout>

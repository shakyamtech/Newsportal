<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Company create</h4>
                    <a href="{{ route('admin.company.index') }}" class="btn btn-primary">Go back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.company.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-6 mb-2">
                                <lable for="name">Enter Company Name <span class="text-danger">*</span></lable>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="email">Enter Company Email<span class="text-danger">*</span></lable>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="phone">Enter Company Phone<<span class="text-danger">*</span>/lable>
                                        <input type="text" name="phone" id="phone" class="form-control">
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="address">Enter Company Address<span class="text-danger">*</span></lable>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="facebook">Enter Company Facebook link</lable>
                                <input type="text" name="facebook" id="facebook" class="form-control">
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="youtube">Enter Company Youtube link</lable>
                                <input type="text" name="youtube" id="youtube" class="form-control">
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="logo">Enter Company Logo<span class="text-danger">*</span></lable>
                                <input type="file" name="logo" id="logo" class="form-control">
                            </div>

                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-success">Save Record</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


for color
{{-- primary-blue
danger-red
success- green
info-skyblue --}}

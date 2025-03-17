<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Category Create</h4>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Go back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="row">
                            <div class="col-6 mb-2">
                                <lable for="nep_title">Enter Nepali  Title<span class="text-danger">*</span></lable>
                                <input type="text" name="nep_title" id="nep_title" class="form-control" value="{{ $category->nep_title}}">
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="eng_title">Enter English Title<span class="text-danger">*</span></lable>
                                <input type="text" name="eng_title" id="eng_title" class="form-control"value="{{ $category->eng_title}}">
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="meta_keywords">Enter Meta Keywords (seperated by commas) </lable>
                                <textarea name="meta_keywords" id="meta_keywords" class="form-control">
                                    {{$category->meta_keywords}}
                                </textarea>
                            </div>

                            <div class="col-6 mb-2">
                                <lable for="meta_description">Enter Meta Description (seperated by commas) </lable>
                                <textarea name="meta_description" id="meta_description" class="form-control">
                                    {{$category->meta_description}}
                                </textarea>
                            </div>
                            
                            <div class="col-6 mb-2">
                                <lable for="status">Change Status</lable>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" {{$category->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{$category->status == 0 ? 'selected' : '' }}>In Active</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-success">Update Record</button>
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

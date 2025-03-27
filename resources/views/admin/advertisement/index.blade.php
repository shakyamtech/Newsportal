<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Advertisement</h4>
                    <a href="{{ route('admin.advertisement.create') }}" class="btn btn-primary">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        SN
                                    </th>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($advertisement)


                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <img width="120" src="{{asset($advertisement->logo)}}" alt="">
                                    </td>
                                    <td>
                                        {{$advertisement->name}}
                                    </td>
                                    <td>
                                        {{$advertisement->email}}
                                    </td>
                                    <td>
                                        {{$advertisement->phone}}
                                    </td>
                                    <td>
                                        {{$advertisement->address}}
                                    </td>
                                    <td>


                                        <form action="{{route('admin.advertisement.destroy', $advertisement->id)}}"method="post">
                                            @csrf
                                            @method("DELETE")
                                            <a href="{{route('admin.advertisement.edit', $advertisement->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


for color`
{{-- primary-blue
danger-red
success- green
info-skyblue --}}

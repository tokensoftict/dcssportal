<div>

    <div class="row y-gap-30">
        <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-5">
                <table class="table" style="width: 100%">
                    <thead class="text-13">
                    <tr>
                        <th class="text-center">#</th>
                        <th  class="text-center">First Name</th>
                        <th  class="text-center">Other Names</th>
                        <th  class="text-center">User Type</th>
                        <th  class="text-center">Phone Number</th>
                        <th  class="text-center">Email Address</th>
                        <th  class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($this->users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->othernames }}</td>
                            <td>{{ $this->userType[$user->is_admin] }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a class="text-purple-1" href="{{ route('administrator.edit_user', $user->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

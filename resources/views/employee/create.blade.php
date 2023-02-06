@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add employee</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('employee.store') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Photo</button>
                    <div class="form-group">
                        <label for="employee_name">Name :*</label>
                        <input type="text" class="form-control" name="employee_name"/>
                    </div>
                    <div class="form-group">
                        <label for="employee_phone">Phone nubmer:*</label>
                        <input type="text" class="form-control" name="employee_phone"/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:*</label>
                        <input type="text" class="form-control" name="email"/>
                    </div>

                    <div class="form-group">
                        <label for="salary">Salary:</label>
                        <input type="text" class="form-control" name="salary"/>
                    </div>
                    <div class="form-group">
                        <label for="date">Employment date:</label>
                        <input type="date" class="form-control" name="date"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

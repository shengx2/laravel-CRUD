<!--  -->

@extends('layouts.app')

@section('content')
    <h1>Create User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-1">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="optionMale">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="optionFemale">
                <label class="form-check-label" for="inlineRadio1">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="optionOther">
                <label class="form-check-label" for="inlineRadio1">Other</label>
            </div>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="hoi" id="flexCheckDisabled1">
                <label class="form-check-label" for="flexCheckDisabled">
                    I accept to receive free emails.
                </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="hoi2" id="flexCheckChecked2">
                <label class="form-check-label" for="flexCheckCheckedDisabled">
                    I accept <u>terms and conditions</u>
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Go Back to Users page </a>
    </form>
@endsection

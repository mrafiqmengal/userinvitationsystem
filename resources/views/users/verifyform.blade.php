@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Verify User
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('verifyuser', request()->token)}}">
                            @csrf

                            <div class="form-group">
                                <label for="verificationcode">Verification Code</label>
                                <input type="number" class="form-control" id="verificationcode" name="verifyusertoken" aria-describedby="emailHelp" placeholder="6 Digit Verification Code">
                                </div>
                            <button type="submit" class="btn btn-success">Verify</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

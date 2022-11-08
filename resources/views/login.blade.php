@extends("layouts.main_login")

@section('title', 'Đăng nhập')

@section('content')
    <section class="vh-90">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{ route('login') }}" method="post">
                    @csrf
                    @method('POST')
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Tài khoản</label>
                            <input type="text" name="u" class="form-control form-control-lg" placeholder="Username" />
                        </div>

                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Mật khẩu</label>
                            <input type="password" name="p" class="form-control form-control-lg" placeholder="*******" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="log" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

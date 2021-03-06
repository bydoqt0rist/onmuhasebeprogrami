@extends("front.master.master")
@section("title","Kullanıcı Kayıt");
@section("content")
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Kullanıcı Kayıt Ekranı</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data" authcomplete="off" action="{{route("user.store")}}">
                    <div class="row p-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputClientCompany">Kullanıcı İsmi</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputClientCompany">Kullanıcı Mail</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputClientCompany">Şifre</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputClientCompany">Yetki Belirleme</label>
                                @foreach(config("app.permission") as $key => $permisson)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="permission[]" id=""
                                            value="{{$key}}" checked>
                                        {{$permisson}}
                                    </label>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
            </div>
            @csrf
            <div class="col-12 mr-3 mb-3">
                <input type="submit" value="Yeni Kullanıcı Ekle" class="btn btn-success float-right">
            </div>
            </form>
        </div>
        <!-- /.card -->
    </div>

    </div>
</section>
@endsection
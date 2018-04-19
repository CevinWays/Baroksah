@extends('layout.layout')

@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->
<div class="container">
    <div class="row">
        @if (session()->has('success_message'))
        <div class="alert alert-primary animate-in" data-anim-delay="300" data-anim-type="fade-in-down">
        <span>
            <i class="fa fa-thumbs-o-up"></i>
        </span>
        {{ session()->get('success_message') }}
        </div>
        @endif 

        @if(count($errors) > 0)
        <div class="alert alert-danger animate-in" data-anim-delay="400" data-anim-type="fade-in-down">
        {{-- <span><i class="fa fa-info"></i></span> --}}
        <ul>
            @foreach ($errors->all() as $error)
            <li><span class="fa fa-info-circle"></span> {!! $error !!}</li>
            @endforeach
        </ul>
        </div>
        @endif
    </div>
</div>

<div class="container">
    <div class="col-12">
        <div class="row m-top-2">
            <div class="col-sm-12 m-bot-2">
                <img src="/storage/{{$user->avatar}}" alt="" style="width:150px; height:150px; float:left; margin-right:25px; border-radius: 50%">
                <h2>{{$user->name}} Profile</h2>
                <form enctype="multipart/form-data" action="{{route('profile.update')}}" method="POST">
                    <label>Update gambar</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="btn btn-sm btn-primary m-top-1" value="update">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="section-md">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12" data-anim-type="fade-in-down" data-anim-delay="100">
                <div class="row">
                    <div class="feature-col-02 sty-01 active" style="padding: 20px; margin: 10px">
                        <h4 class="uppercase white" ><span class="fa fa-user"></span> User Information</h4>
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{$user->address}}</td>
                            </tr>
                            <tr>
                                <td>Kota</td>
                                <td>:</td>
                                <td>{{$user->city}}</td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>:</td>
                                <td>{{$user->province}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12" data-anim-type="fade-in-down" data-anim-delay="100">
                <div class="row">
                    <div class="feature-col-02 sty-01 active" style="padding: 20px;margin: 10px;background-color: crimson;border-color: white;">
                        <h4 class="uppercase white" ><span class="fa fa-clock-o"></span> Other Information</h4>
                        <table>
                            <tr>
                                <td>Kode Pos</td>
                                <td>:</td>
                                <td>{{$user->postalcode}}</td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td>:</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                            <tr>
                                <td>Member Sejak</td>
                                <td>:</td>
                                <td>{{$user->created_at}}</td>
                            </tr>
                            <tr>
                                <td>Terakhir Dilihat</td>
                                <td>:</td>
                                <td>{{$user->updated_at}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12" data-anim-type="fade-in-down" data-anim-delay="100">
                <div class="row">
                    <div class="feature-col-02 sty-01 active" style="padding: 20px;margin: 10px; background-color: #FFA000;border-color: white;">
                        <h4 class="uppercase white" ><span class="fa fa-money"></span> Billing Information</h4>
                        <table>
                            <tr>
                                <td>Nama Pembayar</td>
                                <td>:</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{$user->address}}</td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td>:</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title','Data Contact')

@section('content')

<div class="container">
    
   
   <div class="row">
    
        <div class="col-md-8 offset-md-2">
            @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
        @endif
            {{-- method untuk memanggil --}}
            <form action="/admin/contact/{{ $contact->id }}"   method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                {{-- form --}}
                <div class="form-group">
                     <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="name" placeholder="Judul" value="{{ $contact->name }}">

                </div>
                @error('name')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{--  --}}
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" >{{ $contact->description }}</textarea>

               </div>
               @error('description')
               <small style="color: red">{{ $message }}</small>
               @enderror

               {{--  --}}
               <div class="form-group">
                <label for="">Alamat</label>
               <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $contact->alamat }}">

               </div>
               @error('alamat')
               <small style="color: red">{{ $message }}</small>
               @enderror

               {{--  --}}
               <div class="form-group">
                <label for="">Email</label>
               <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $contact->email }}">

               </div>
               @error('email')
               <small style="color: red">{{ $message }}</small>
               @enderror
                {{--  --}}
                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                   <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="{{ $contact->telepon }}">
    
                   </div>
                   @error('telepon')
                   <small style="color: red">{{ $message }}</small>
                   @enderror
                {{-- deskripsi --}}
                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control" placeholder="Maps Embed" >{{ $contact->maps_embed}}</textarea>

                </div>
                @error('maps_embed')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- gambar --}}
                <img src="/image/{{ $contact->logo}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="logo">
                </div>
                @error('logo')
                <small style="color:red">{{$message}}</small>
                @enderror

                {{-- button input --}}
                <div>
                     <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div class="form-group">
           
            </form>
        </div>
   </div>
</div>
@endsection
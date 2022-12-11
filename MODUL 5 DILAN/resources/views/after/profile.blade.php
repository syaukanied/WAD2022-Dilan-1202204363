@extends('after.header')
@section('content')
      <!-- Navbar Start -->
@auth

    <!-- Form Start -->
    <section id="insert">
      <div style="margin: 40px; margin-top: -40px" class="container insert">
        <br>
        <br>
        <br>
        <h1 class="titleInsert" >Profile</h1>
        <form enctype="multipart/form-data" action="{{ route('profile.action') }}" method="POST" class="form-input">
            @csrf
        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
          <div class="mb-3">
            <label for="inputNamaMobil" >Email</label>
            <input disabled
              value="{{ Auth::user()->email }}"
              name="email"

            />
          </div>
          <div class="mb-3">
            <label for="inputNamaPemilik" class="form-label"
              >Nama</label
            >
            <input
              type="text"
              class="form-control"
              value="{{ Auth::user()->nama }}"
              name="name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Nomor handphone</label>
            <input
              type="text"
              class="form-control"
              value="{{ Auth::user()->no_hp }}"
              name="no_hp"
              required
            />
          </div>

          
    @endauth
    @endsection
    @guest
    {{ route('logout') }}
    @endguest
    
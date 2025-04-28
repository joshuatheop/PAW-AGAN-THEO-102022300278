@extends('layouts.app')

@section('title', 'Edit Pengguna')

@section('content')
    <h2 style="font-size: 24px; margin-bottom: 20px; text-align: center;">Edit Pengguna</h2>

    {{-- Form untuk update pengguna --}}
    <form action="{{ route('users.update', $user->id) }}" method="POST" style="max-width: 500px; margin: 0 auto; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff;">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Nama:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px;">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="phone" style="display: block; font-weight: bold; margin-bottom: 5px;">Telepon:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
        </div>

        <button type="submit" style="background-color: #4caf50; color: white; padding: 12px 20px; border-radius: 5px; font-size: 16px; width: 100%; cursor: pointer; border: none; transition: background-color 0.3s;">
            Update
        </button>
    </form>
@endsection

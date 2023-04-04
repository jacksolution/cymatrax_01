@extends('layouts.app')

@section('content')
    <div class="content" >
        <section class="contained" >
            <h1 class="myaccount" >{{$title}}</h1>
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif

            <div class="relative" >
                <form method="POST" action="{{ route('time-on-disk-save') }}" class="register" >
                    @csrf
                    <table>
                        <tbody>
                        <tr>
                            <td>Key:</td>
                            <td>
                                <input id="key" type="text" class="form-control @error('key') is-invalid @enderror"
                                       name="key" value="{{ $settings->key }}" required autocomplete="key" autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td>Value:</td>
                            <td>
                                <input id="value" type="text" class="form-control @error('value') is-invalid @enderror"
                                       name="value" value="{{ $settings->value }}" required autocomplete="value" autofocus>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                    {{-- <button id="process-button" name="submit" type="button" >Submit --}}
                    {{-- </button> --}}
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </section>
    </div>

@endsection

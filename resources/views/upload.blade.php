@extends('layouts.app')
@section('content')

    <section>
       @include('layouts/menu')
        <div class="tool">
            <h3>Audio Conversion Tool</h3>
            <p>$<?php echo "1" ?> per minute</p>
            <form id="dropzoneForm" enctype="multipart/form-data" class="dropzone"
                  action="{{ route('file.upload') }}">
                @csrf
            </form>
            <button type="button" class="upload-btn" id="submit-all">Upload</button>
        </div>
    </section>
@endsection


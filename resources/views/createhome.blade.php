@extends('layouts.main')

@section('contents')


<div class="col-md-8">
    <form method="POST" action="/home/create">
        @csrf
        <div class="mb-3">
          <label for="title_1" class="form-label">title 1</label>
          <input type="text" class="form-control @error('title_1') is-invalid @enderror" id="title_1" name="title_1">
            @error('title_1')
                {{ $message }}
            @enderror

        </div>
        <div class="mb-3">
          <label for="title_2" class="form-label">title 2</label>
          <input type="text" class="form-control  @error('title_2') is-invalid @enderror" id="title_2" name="title_2">
        </div>
        <div class="mb-3">
            <label for="title_3" class="form-label">title 3</label>
            <input type="text" class="form-control  @error('title_3') is-invalid @enderror" id="title_3" name="title_3">
        </div>
          <div class="mb-3">
            <label for="button_left" class="form-label">button left</label>
            <input type="text" class="form-control  @error('button_left') is-invalid @enderror" id="button_left" name="button_left">
          </div>
          <div class="mb-3">
            <label for="button_right" class="form-label">button right</label>
            <input type="text" class="form-control  @error('button_right') is-invalid @enderror" id="button_right" name="button_right">
          </div>
          <div class="mb-3">
            <label for="about_me_title" class="form-label">abou me title</label>
            <input type="text" class="form-control  @error('about_me_title') is-invalid @enderror" id="about_me_title" name="about_me_title">
          </div>
          <div class="mb-3">
            <label for="about_me_description" class="form-label">about me description</label>
            <input type="text" class="form-control  @error('about_me_description') is-invalid @enderror" id="about_me_description" name="about_me_description">
          </div>
          <div class="mb-3">
            <label for="image_path" class="form-label">image path</label>
            <input type="text" class="form-control" id="image_path" name="image_path">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
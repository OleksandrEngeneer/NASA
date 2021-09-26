@extends('layouts.master')

@section('content')
<div class="box_form">
    <form action="/get_form" method="POST" style="padding: 50px">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name">
            </div>
          </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="email">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Phone number</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" name="phone_number">
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Getting news by</legend>
          <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="email_way" value="1">
                <label class="form-check-label" for="gridCheck1">
                  Email
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="telegram_way" value="1">
                <label class="form-check-label" for="gridCheck1">
                  Telegram
                </label>
            </div>
          </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Sign up</button>
      </form>
</div>
@endsection 
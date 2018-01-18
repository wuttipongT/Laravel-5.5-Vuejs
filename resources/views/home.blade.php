@extends('layouts.app')

@section('content')
<div class="content container">
  <div class="title m-b-md">
     @{{ message }}
  </div>

  <div class="links">
      <a href="https://laravel.com/docs">Documentation</a>
      <a href="https://laracasts.com">Laracasts</a>
      <a href="https://laravel-news.com">News</a>
      <a href="https://forge.laravel.com">Forge</a>
      <a href="https://github.com/laravel/laravel">GitHub</a>
  </div>

  <br>

<div style="text-align: left;">
  <span v-bind:title="message">
    Hover your mouse over me for a few seconds
    to see my dynamically bound title!
  </span>

  <br>

  <span v-if="seen">
    Now you see me
  </span>

  <br>

  <ol>
    <li v-for="todo in todos">
      @{{ todo.text }}
    </li>
  </ol>

  <br>

  <button v-on:click="reverseMessage">Reverse Message</button>

  <br><br>

  <input type="text" v-model="message">

  <br><br>

  <ol>
    <todo-item
      v-for="item in groceryList"
      v-bind:todo="item"
      v-bind:key="item.id">
    </todo-item>
  </ol>
<hr/>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" v-model="form.email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" v-model="form.password">
      <small class="form-text text-muted">@{{ password }}</small>
    </div>
    <br/>
    <div class="form-check form-check-inline">
      <input type="checkbox" class="form-check-input" id="jack" value="Jack" v-model="form.checkedNames">
      <label class="form-check-label" for="jack">Jack</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" class="form-check-input" id="john" value="John" v-model="form.checkedNames">
      <label class="form-check-label" for="john">John</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" class="form-check-input" id="milke" value="Milke" v-model="form.checkedNames">
      <label class="form-check-label" for="milke">Milke</label>
    </div>
    checked: @{{ checkedNames }}
    <i class="clearfix"></i>
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" id="one" value="One" v-model="form.picked">
      <label for="one" class="form-check-label">One</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" id="two" value="Two" v-model="form.picked">
      <label for="two" class="form-check-label">Two</label>
    </div>
    <span>Picked: @{{ picked }}</span>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="exampleCheck1" v-model="form.checked">
      <label class="custom-control-label" for="exampleCheck1">Check me out</label>
      <span>&nbsp; checked: @{{ checked }}</span>
    </div>
    <br/>
    <div class="form-group">
      <select class="custom-select mr-sm-2" id="select1" v-model="form.selected">
        <option v-for="option in options" v-bind:value="option.value">
          @{{ option.text }}
        </option>
      </select>
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary" v-on:click="submitData">Submit</button>
  </form>

<!-- @{{ animals }} -->

<ul id="users">
  <li v-for="animal in animals">
    @{{ animal }}
  </li>
</ul>
  <!-- <button class="btn btn-seconds" v-on:click="buttonClick">click</button> -->
</div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
<ul class="list-group">
  <a href="" class="list-group-item list-group-item-action">Add</a>
    <a href="" class="list-group-item list-group-item-action">View</a>


</ul>
            </div>
        </div>
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Pizza</div>
                    <div class="card-body">
                <div class="form-group">

                <label for="name">Name Of The Pizza</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">

                <label for="Description">Description Of The Pizza</label>
                <textarea name="description" id="" class="form-control"></textarea>
            </div>

<div class="form-inline">

                <label for="price">Price of the Pizza</label>
                <input type="number" class="form-control" placeholder="small">
                <input type="number" class="form-control" placeholder="medium">
                <input type="number" class="form-control" placeholder="large">

            </div>
            <div class="form-group">

<label for="description"> Category</label>
                <select name="" id="" class="form-control">
                      <option value=""></option>
                    <option value="vageterian">Vegeterain</option>
                      <option value="nonvageterian">Nonvegeterain</option>
                        <option value="traditional">Traditional</option>
                </select>
            </div>
             <div class="form-group">

                <label for="Image">Image</label>
               <input type="file" class="form-control" name="image">
            </div>
            
             <div class="form-group text-center">
<button class=" btn btn-primary" type="submit" name="submit">Save</button>
            </div>

            </div>







        </div>



    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create A New Thread</div>

                <div class="card-body">
                
                    <form action="/threads" method="POST">
                        {{ csrf_field() }}
                    
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="title" name="title">
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" rows="8" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" placeholder="">Publish</button>


                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bible Study Registration</div>

                <div class="panel-body">
                    {!! Form::open(array('route' => 'contacts.store')) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('regNo') ? ' has-error' : '' }}">
                            <label for="regNo" class="col-md-4 control-label">Reg No</label>

                            <div class="col-md-6">
                                <input id="regNo" type="text" class="form-control" name="regNo" value="{{ Auth::user()->regNo }}" required autofocus>

                                @if ($errors->has('regNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="0{{ Auth::user()->phone }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('residence') ? ' has-error' : '' }}">
                            <label for="residence" class="col-md-4 control-label">Residence</label>

                            <div class="col-md-6">
                            	{{ Form::select('residence', array(
								  'Tatton' => array('Nairobi', 'Mombasa', 'Eldoret', 'Argentina'),
								  'CBD' => array('Uganda', 'Mama Ngina', 'Barret', 'Taifa'),
								  'New Hostel' => array('L.Turkana', 'R.Tana', 'Aberdares','Tsavo', 'L.Elementeita'),
								  'Buruburu' => array('Marsabit', 'Machakos', 'Mandela', 'Kisii'),
								  'Non-Residence' => array('Njokerio', 'Ahero', 'Kwa Wright', 'Gate'),
								))}}
                            </div>
                        </div>


                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register Bs
                                </button>

                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{"filter":false,"title":"register.blade.php","tooltip":"/books/resources/views/auth/register.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":77,"column":0},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">{{ __('Register') }}</div>","","                <div class=\"card-body\">","                    <form method=\"POST\" action=\"{{ route('register') }}\">","                        @csrf","","                        <div class=\"form-group row\">","                            <label for=\"name\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Name') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"name\" type=\"text\" class=\"form-control @error('name') is-invalid @enderror\" name=\"name\" value=\"{{ old('name') }}\" required autocomplete=\"name\" autofocus>","","                                @error('name')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"email\" class=\"col-md-4 col-form-label text-md-right\">{{ __('E-Mail Address') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\">","","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control @error('password') is-invalid @enderror\" name=\"password\" required autocomplete=\"new-password\">","","                                @error('password')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password-confirm\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Confirm Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password-confirm\" type=\"password\" class=\"form-control\" name=\"password_confirmation\" required autocomplete=\"new-password\">","                            </div>","                        </div>","","                        <div class=\"form-group row mb-0\">","                            <div class=\"col-md-6 offset-md-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    {{ __('Register') }}","                                </button>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":77,"column":0},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">{{ __('Register') }}</div>","","                <div class=\"card-body\">","                    <form method=\"POST\" action=\"{{ route('register') }}\">","                        @csrf","","                        <div class=\"form-group row\">","                            <label for=\"name\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Name') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"name\" type=\"text\" class=\"form-control @error('name') is-invalid @enderror\" name=\"name\" value=\"{{ old('name') }}\" required autocomplete=\"name\" autofocus>","","                                @error('name')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"email\" class=\"col-md-4 col-form-label text-md-right\">{{ __('E-Mail Address') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\">","","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control @error('password') is-invalid @enderror\" name=\"password\" required autocomplete=\"new-password\">","","                                @error('password')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password-confirm\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Confirm Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password-confirm\" type=\"password\" class=\"form-control\" name=\"password_confirmation\" required autocomplete=\"new-password\">","                            </div>","                        </div>","","                        <div class=\"form-group row mb-0\">","                            <div class=\"col-md-6 offset-md-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    {{ __('Register') }}","                                </button>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":77,"column":0},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">{{ __('Register') }}</div>","","                <div class=\"card-body\">","                    <form method=\"POST\" action=\"{{ route('register') }}\">","                        @csrf","","                        <div class=\"form-group row\">","                            <label for=\"name\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Name') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"name\" type=\"text\" class=\"form-control @error('name') is-invalid @enderror\" name=\"name\" value=\"{{ old('name') }}\" required autocomplete=\"name\" autofocus>","","                                @error('name')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"email\" class=\"col-md-4 col-form-label text-md-right\">{{ __('E-Mail Address') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\">","","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control @error('password') is-invalid @enderror\" name=\"password\" required autocomplete=\"new-password\">","","                                @error('password')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password-confirm\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Confirm Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password-confirm\" type=\"password\" class=\"form-control\" name=\"password_confirmation\" required autocomplete=\"new-password\">","                            </div>","                        </div>","","                        <div class=\"form-group row mb-0\">","                            <div class=\"col-md-6 offset-md-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    {{ __('Register') }}","                                </button>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":76,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">{{ __('Register') }}</div>","","                <div class=\"card-body\">","                    <form method=\"POST\" action=\"{{ route('register') }}\">","                        @csrf","","                        <div class=\"form-group row\">","                            <label for=\"name\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Name') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"name\" type=\"text\" class=\"form-control @error('name') is-invalid @enderror\" name=\"name\" value=\"{{ old('name') }}\" required autocomplete=\"name\" autofocus>","","                                @error('name')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"email\" class=\"col-md-4 col-form-label text-md-right\">{{ __('E-Mail Address') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\">","","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control @error('password') is-invalid @enderror\" name=\"password\" required autocomplete=\"new-password\">","","                                @error('password')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password-confirm\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Confirm Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password-confirm\" type=\"password\" class=\"form-control\" name=\"password_confirmation\" required autocomplete=\"new-password\">","                            </div>","                        </div>","","                        <div class=\"form-group row mb-0\">","                            <div class=\"col-md-6 offset-md-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    {{ __('Register') }}","                                </button>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection"],"id":5}]]},"ace":{"folds":[],"scrolltop":602,"scrollleft":0,"selection":{"start":{"row":76,"column":11},"end":{"row":76,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":42,"state":"start","mode":"ace/mode/php"}},"timestamp":1591682180382,"hash":"febe534184f35e41b8d95823b0f63ab47a64369c"}
@csrf
<div class="form-group row">
    <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('nama') }}</label>

        <div class="col-md-10">
            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>
            
                @error('nama')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="kategori_galeri_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Galeri') }}</label>

        <div class="col-md-10">
            {!! Form::select('kategori_galeri_id', $KategoriGaleri,null, ["class"=>"form-control","required"] ) !!}
            
                @error('isi')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('isi') }}</label>

        <div class="col-md-10">
            {!! Form::textarea('isi', null, ['class'=>'form-control']); !!}
            
                @error('isi')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required>

            <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <a href="{!! route('galeri.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
                            </div>
                        </div>

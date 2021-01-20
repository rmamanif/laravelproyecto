<div class="form-group">

<label for="Titulo" class="control-label">{{'Titulo'}}</label>

<input type="text" class="form-control {{$errors->has('Titulo')?'is-invalid':''}} " name="Titulo" id="Titulo" 
value="{{ isset($biblioteca->Titulo)?$biblioteca->Titulo:old('Titulo')}}">

{!! $errors->first('Titulo','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="Reseña" class="control-label">{{'Reseña'}}</label>
<input type="text" class="form-control {{$errors->has('Reseña')?'is-invalid':''}}" name="Reseña" id="Reseña" 
value="{{ isset($biblioteca->Reseña)?$biblioteca->Reseña:old('Reseña')}}">
{!! $errors->first('Reseña','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Editorial" class="control-label">{{'Editorial'}}</label>
<input type="text" class="form-control {{$errors->has('Editorial')?'is-invalid':''}}" name="Editorial" id="Editorial" 
value="{{ isset($biblioteca->Editorial)?$biblioteca->Editorial:old('Editorial')}}">
{!! $errors->first('Editorial','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Autor" class="control-label">{{'Autor'}}</label>
<input type="text" class="form-control {{$errors->has('Autor')?'is-invalid':''}}" name="Autor" id="Autor"
value="{{ isset($biblioteca->Autor)?$biblioteca->Autor:old('Autor')}}">
{!! $errors->first('Autor','<div class="invalid-feedback">:message</div>') !!}
</div>

<input type="submit" class='btn btn-success' value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">


<a class='btn btn-primary' href="{{ url('biblioteca')}}">Regresar</a>
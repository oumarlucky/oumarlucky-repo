@csrf
<div class="form-group">
    <label for="">Designation</label>
    <input value="{{ old('designation') ?? $produit->designation }}" type="text" name="designation" id="" class="form-control" placeholder="" aria-describedby="helpId">
@error('designation')
    <small class="text-danger" > {{ $message }} </small>
@enderror
</div>
<div class="form-group">
    <label for="">Prix</label>
    <input value="{{  old('prix') ?? $produit->prix }}" type="number" name="prix" id="" class="form-control" placeholder="" aria-describedby="helpId">
    @error('prix')
        <small class="text-danger" > {{ $message }} </small>
    @enderror
</div>
<div class="form-group">
    <label for="">Description</label>
    <input value="{{  old('description') ?? $produit->description }}" type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
    @error('description')
    <small class="text-danger" > {{ $message }} </small>
    @enderror
</div>
<div class="form-group">
    <label for="">Pays Source</label>
    <select class="form-control" name="pays_source" id="">
        <option value="{{  old('pays_source') ?? $produit->pays_source }}" selected >{{   old('pays_source') ?? $produit->pays_source }}</option>
        <option value="Burkina Faso"  >Burkina Faso</option>
        <option value="Sénégal"  >Sénégal</option>
        <option value="Mali"  >Mali</option>
    </select>
    @error('pays_source')
    <small class="text-danger" > {{ $message }} </small>
    @enderror
    <small></small>
</div>
<div class="form-group">
    <label for="">Poids</label>
    <input value="{{  old('poids') ?? $produit->poids }}" type="number" name="poids" class="form-control">
    @error('poids')
    <small class="text-danger" > {{ $message }} </small>
    @enderror
</div>
<div class="form-group">
    <label for="">Like</label>
    <input value="{{  old('like') ?? $produit->like }}" type="number" name="like" id="" class="form-control" placeholder="" aria-describedby="helpId">
    @error('like')
    <small class="text-danger" > {{ $message }} </small>
    @enderror
</div>

<div class="custom-file mb-5 mt-4">
    <input id="image" type="file" name="image" class="">
    @error('image')
    <small class="text-danger" > {{ $message }} </small>
    @enderror
</div>

<button type="submit" class="btn btn-success btn-block btn-lg">{{ $btnTexte }}</button>

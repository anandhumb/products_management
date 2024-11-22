<x-layout>
    <div class="">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" id="" placeholder="" name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="textarea" class="form-control" id="" placeholder="" name="discription"
                        value="{{old('discription')}}">
                    @error('discription')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="">Price</label>
                    <input type="number" class="form-control" id="" placeholder="" name="price"
                        value="{{old('price')}}">
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">stock</label>
                    <input type="number" class="form-control" id="" placeholder="" name="stock"
                        value="{{old('stock')}}">
                    @error('stock')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row p-4">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
<h1>Add New Customer</h1>

<div>
    <a href="/customers">Back</a>
</div>

<form action="/customers" method="post">
    <div>
        <lable for="name">Name</lable>
        <input type="text" name="name" id="" autocomplete="off" value="{{old('name')}}">
        @error('name')<p style="color: red">{{$message}}</p> @enderror
    </div>

    <div>
        <lable for="email">Email</lable>
        <input type="text" name="email" id="" autocomplete="off" value="{{old('email')}}">
        @error('email')<p style="color: red">{{$message}}</p> @enderror
    </div>

    <div>
        <lable for="note">Note</lable>
        <textarea type="text" name="note" id="" autocomplete="off">{{old('note')}}</textarea>
    </div>

    @csrf

    <button>Add New Customer</button>
</form>

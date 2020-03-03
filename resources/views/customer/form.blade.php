<h1>Add New Customer</h1>

<form action="/customers" method="post">
    <div>
        <lable for="name">Name</lable>
        <input type="text" name="name" id="" autocomplete="off" value="{{old('name') ?? $customer->name}} ">
        @error('name')<p style="color: red">{{$message}}</p> @enderror
    </div>

    <div>
        <lable for="email">Email</lable>
        <input type="text" name="email" id="" autocomplete="off" value="{{old('email')?? $customer->email}}">
        @error('email')<p style="color: red">{{$message}}</p> @enderror
    </div>

    <div>
        <lable for="note">Note</lable>
        <textarea type="text" name="note" id="" autocomplete="off">{{old('note')?? $customer->note}}</textarea>
    </div>

    @csrf

    <button>Add New Customer</button>
</form>
